<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use App\Tag;


class ProductsController extends AdminController
{
    public $tags;

    /**
     * PostsController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->tags = Tag::lists('name', 'name')->all();      
    }    


    protected function syncTags($request, Product $product)
    {
        $tagIds = [];
        foreach ($request->input('tag_list') as $tag) {
            $tagIds[] = Tag::firstOrCreate(['name' => $tag])->id;
        }
        $product->tags()->sync($tagIds);       
    }

    public function index()
    {      

        $products = Product::paginate(env('ITEM_PER_PAGE'));

        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $tags = $this->tags;       
        return view('admin.product.form', compact('tags'));
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['image'] =  ($request->file('image') && $request->file('image')->isValid()) ? $this->saveImage($request->file('image')) : '';

        $product = Product::create($data);
        $this->syncTags($request, $product);        
        flash('Create product success!', 'success');
        return redirect('admin/products');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $tags = $this->tags;      
        return view('admin.product.form', compact('tags', 'product'));
    }

    public function update($id, ProductRequest $request)
    {
        $data = $request->all();
        $product = Product::find($id);
        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request->file('image'), $product->image);
        }
        $product->update($data);
        $this->syncTags($request, $product);
        flash('Update product success!', 'success');
        return redirect('admin/products');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (file_exists(public_path('files/' . $product->image))) {
            @unlink(public_path('files/' . $product->image));
        }
        $product->delete();
        flash('Success deleted product!');
        return redirect('admin/products');
    }

}
