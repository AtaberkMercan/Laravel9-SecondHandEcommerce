<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting=Setting::first();
        $data=Product::where('user_id',Auth::id())->get();
        return view('home.user_Product',['data'=>$data,'setting'=>$setting]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting=Setting::first();
        $data=Category::all();
        return view('home.user_Product_create',['data'=>$data,'setting'=>$setting]);

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
        return redirect('user/Product');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,$id)
    {
        $setting=Setting::first();
        $data=Product::find($id);
        return view('home.user_Product_show',['data'=>$data,'setting'=>$setting]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $setting=Setting::first();
        $data=Product::find($id);
        $datalist=Category::all();
        return view('home.user_Product_edit',['data'=>$data,'datalist'=>$datalist,'setting'=>$setting]);
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
        return redirect('user/Product');
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
        return redirect('user/Product');
    }
}
