<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data=Product::all();
        return view('admin.Product.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
        return view('admin.Product.create',['data'=>$data]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Product();
        $data->category_id=$request->category_id;
        $data->user_id=Auth::id();
        $data->title=$request->title;
        $data->keys=$request->keys;
        $data->desc=$request->desc;
        $data->detail=$request->detail;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->minquantity=$request->minquantity;
        $data->tax=$request->tax;
        $data->stats=$request->stats;
        if($request->file('img')){
            $data->img=$request->file('img')->store('images');
        }
        $data->save();
        return redirect('admin/Product');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,$id)
    {
        $data=Product::find($id);
        return view('admin.Product.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $data=Product::find($id);
        $datalist=Category::all();
        return view('admin.Product.edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $data=Product::find($id);
        $data->category_id=$request->category_id;
        $data->user_id=Auth::id();
        $data->title=$request->title;
        $data->keys=$request->keys;
        $data->desc=$request->desc;
        $data->detail=$request->detail;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->minquantity=$request->minquantity;
        $data->tax=$request->tax;
        $data->stats=$request->stats;
        if($request->file('img')){
            $data->img=$request->file('img')->store('images');
        }
        $data->save();
        return redirect('admin/Product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        $data=Product::find($id);
        if($data->img && Storage::disk('public')->exists($data->img)){
        Storage::delete($data->img);
        }
        $data->delete();
        return redirect('admin/Product');
    }
}
