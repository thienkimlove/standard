<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostsController extends AdminController
{
    public $tags, $categories;

    /**
     * PostsController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->tags = Tag::lists('name', 'name')->all();
        $categoryIds = [];
        $categories = Category::all();
        foreach ($categories as $cate) {
            if ($cate->subCategories->count() == 0) {
                $categoryIds[] = $cate->id;
            }
        }
        $this->categories = array('' => 'Choose category') +  Category::whereIn('id', $categoryIds)->lists('name', 'id')->all();
    }


    protected function syncTags($request, Post $post)
    {
        $tagIds = [];
        foreach ($request->input('tag_list') as $tag) {
            $tagIds[] = Tag::firstOrCreate(['name' => $tag])->id;
        }
        $post->tags()->sync($tagIds);
    }

    public function index(Request $request)
    {

        $searchPost = '';
        $categoryId = '';
        $posts = Post::latest('updated_at');
        if ($request->input('q')) {
            $searchPost = urldecode($request->input('q'));
            $posts = $posts->where('title', 'LIKE', '%'. $searchPost. '%');
        }

        if ($request->input('cat')) {
            $categoryId = $request->input('cat');
            $category = Category::find($categoryId);
            $posts = ($category->subCategories->count() == 0) ? $posts->where('category_id', '=', $categoryId) : $posts->whereIn('category_id', $category->subCategories->lists('id')->all());
        }

        $posts = $posts->paginate(env('ITEM_PER_PAGE'));

        return view('admin.post.index', compact('posts', 'searchPost', 'categoryId'));
    }

    public function create()
    {
        $tags = $this->tags;
        $categories = $this->categories;
        return view('admin.post.form', compact('tags', 'categories'));
    }

    public function store(PostRequest $request)
    {
        $data = $request->all();
        $data['image'] =  ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';
        $data['status'] = ($request->input('status') == 'on') ? true : false;
        $post = Post::create($data);
        $this->syncTags($request, $post);
        flash('Create post success!', 'success');
        return redirect('admin/posts');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = $this->categories;
        $tags = $this->tags;
        return view('admin.post.form', compact('tags', 'post', 'categories'));
    }

    public function update($id, PostRequest $request)
    {
        $data = $request->all();
        $post = Post::find($id);
        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request->file('image'), $post->image);
        }
        $data['status'] = ($request->input('status') == 'on') ? true : false;
        $post->update($data);
        $this->syncTags($request, $post);
        flash('Update post success!', 'success');
        return redirect('admin/posts');
    }

    public function destroy($id)
    {
       $post = Post::find($id);
        if (file_exists(public_path('files/' . $post->image))) {
            @unlink(public_path('files/' . $post->image));
        }
        $post->delete();
        flash('Success deleted post!');
        return redirect('admin/posts');
    }

}
