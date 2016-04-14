<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Category;
use App\Post;
use App\Question;
use App\Setting;
use App\Video;


Route::get('example/composer', function(){
    return view('example.composer');
});

Route::get('example/paginator', function(){
    $posts = Post::paginate(1);
    //$posts->setPath('custom/url');
    return view('example.paginator', compact('posts'));
});


Route::get('restricted', function(){
    return view('errors.restricted');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/admin', 'HomeController@index');
    Route::resource('admin/posts', 'PostsController');
    Route::resource('admin/categories', 'CategoriesController');
    Route::resource('admin/settings', 'SettingsController');
    Route::resource('admin/questions', 'QuestionsController');
    Route::resource('admin/videos', 'VideosController');
    Route::resource('admin/tags', 'TagsController');
    Route::resource('admin/products', 'ProductsController');
    Route::resource('admin/deliveries', 'DeliveriesController');
});
$settings = Setting::lists('value', 'name')->all();
Route::get('/', function () use($settings) {
    return view('frontend.index')->with([
        'meta_title' =>  $settings['META_INDEX_TITLE'],
        'meta_desc' =>  $settings['META_INDEX_DESC'],
        'meta_keywords' =>  $settings['META_INDEX_KEYWORDS'],
    ]);
});


Route::get('lien-he', function() use($settings) {
    return view('frontend.contact')->with([
        'meta_title' =>  $settings['META_CONTACT_TITLE'],
        'meta_desc' =>  $settings['META_CONTACT_DESC'],
        'meta_keywords' =>  $settings['META_CONTACT_KEYWORDS'],
    ]);
});

Route::get('video/{value?}', function($value = null) use($settings) {
    $video = null;
    $meta_title = $meta_desc = $meta_keywords =  null;
    if ($value) {
        $video = Video::where('slug', $value)->first();
        $meta_title = ($video->seo_title) ? $video->seo_title : $video->title;
        $meta_desc = $video->desc;
        $meta_keywords = $video->keywords;
    }
    $videos = Video::paginate(10);
    return view('frontend.video', compact('videos', 'video'))->with([
        'meta_title' => ($meta_title) ? $meta_title : $settings['META_VIDEO_TITLE'],
        'meta_desc' => ($meta_desc) ? $meta_desc : $settings['META_VIDEO_DESC'],
        'meta_keywords' => ($meta_keywords) ? $meta_keywords : $settings['META_VIDEO_KEYWORDS'],
    ]);
});

Route::get('cau-hoi-thuong-gap/{value?}', function($value = null) use($settings) {
    $question = null;
    $meta_title = $meta_desc = $meta_keywords =  null;
    if ($value) {
        $question = Question::where('slug', $value)->first();
        $meta_title = ($question->seo_question) ? $question->seo_question : $question->question;
        $meta_desc = $question->desc;
        $meta_keywords = $question->keywords;
    }
    $questions = Question::paginate(10);
    return view('frontend.question', compact('questions', 'question'))->with([
        'meta_title' => ($meta_title) ? $meta_title : $settings['META_QUESTION_TITLE'],
        'meta_desc' => ($meta_desc) ? $meta_desc : $settings['META_QUESTION_DESC'],
        'meta_keywords' => ($meta_keywords) ? $meta_keywords : $settings['META_QUESTION_KEYWORDS'],
    ]);
});


Route::get('{value}', function ($value) use($settings) {

    if (preg_match('/([a-z0-9\-]+)\.html/', $value, $matches)) {
        
        $post = Post::where('slug', $matches[1])->first();

        return view('frontend.post', compact('post'))->with([
            'meta_title' => ($post->seo_title) ? $post->seo_title : $post->title,
            'meta_desc' => $post->desc,
            'meta_keywords' => ($post->tagList) ? implode(',', $post->tagList) : $settings['META_POST_KEYWORDS'],
        ]);
    } else {
        $category = Category::where('slug', $value)->first();

   
        if ($category->subCategories->count() == 0) {
            //child categories
            $posts = Post::publish()
                ->where('category_id', $category->id)
                ->paginate(10);

        } else {       
            //parent categories
            $posts = Post::publish()
                ->whereIn('category_id', $category->subCategories->lists('id')->all())
                ->paginate(10);

        }

        return view('frontend.category', compact(
            'category', 'posts'
        ))->with([
            'meta_title' => ($category->seo_name) ?  $category->seo_name : $category->name,
            'meta_desc' =>  ($category->desc)? $category->desc : $settings['META_CATEGORY_DESC'],
            'meta_keywords' => ($category->keywords)? $category->keywords : $settings['META_CATEGORY_KEYWORDS'],
        ]);
    }
});