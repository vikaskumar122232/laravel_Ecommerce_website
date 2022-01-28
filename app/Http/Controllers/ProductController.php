<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::get();


      return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $categories = Category::whereNotNULL('category_id')->get();
       return view('admin.product.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'category_id'=>$request->category_id,
            'name' =>$request->name,
            'price'=>$request->price,

        );
        if ($request->hasfile('image')) {
           $image = $request->file('image');
           $filename = date('dmY').time().'.'.$image->getClientOriginalExtension();
           $image->move(public_path("/uploads"),$filename);
           $data['image'] = $filename;
        }
        $create = Product::create($data);
        return redirect()->route('product.create');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, Request $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);
        $categories = Category::whereNotNULL('category_id')->get();
        return view('admin.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

       $id = $request->id;
       $data = array(
        'category_id'=>$request->category_id,
        'name' =>$request->name,
        'price'=>$request->price,  );
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $filename = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/uploads"),$filename);
            $data['image'] = $filename;
         }
         $update = Product::where('id',$id)->update($data);
         return redirect()->route('product.list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Product $product)
    {
        $id = $request->id;
        $product = Product::find($id);
        $product->delete($id);
        return redirect()->route('product.list');
    }


 /**
     * add extraDetails the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
public function extraDetails( Request $request)
{
    $id = $request->id;
    $product =Product::where('id',$id)->with('ProductDetail')->first();
    return view('admin.product.details',compact('id','product'));
}
public function extraDetailsStore( Request $request)
{

    $id = $request->id;
    $data = array(
        'title' =>$request->title,
        'product_id'=>$id,
        'total_items'=>$request->total_items,
        'description' =>$request->description,
    );
    $detail = ProductDetail::updateOrCreate(
        ['product_id'=>$id], $data
    );
    return redirect()->route('product.list');

}

}
