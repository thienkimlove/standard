<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\TagRequest;
use App\Tag;


class TagsController extends AdminController
{


    public function index()
    {
        $tags = Tag::latest()->paginate(env('ITEM_PER_PAGE'));
        return view('admin.tag.index', compact('tags'));
    }

    /**
     * display form for edit category
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tag.form', compact('tag'));
    }

    /**
     * @param $id
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, TagRequest $request)
    {
        $tag = Tag::find($id);

        $data = $request->all();

        $tag->update($data);

        flash('Update tag success!', 'success');
        return redirect('admin/tags');
    }



}
