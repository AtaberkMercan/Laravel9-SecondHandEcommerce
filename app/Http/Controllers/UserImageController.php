<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pid)
    {
        $product=Product::find($pid);
        $images=Image::where('product_id',$pid);
        $images=DB::table('images')->where('product_id',$pid)->get();
        return view('home.user_product_image_create',['product'=>$product,'images'=>$images]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$pid)
    {
        $data=new Image();
        $data->product_id=$pid;
        $data->title=$request->title;
        if($request->file('img')){
            $data->img=$request->file('img')->store('images');
        }
        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$pid, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pid,$id)
    {
        $data=Image::find($id);
        if($data->img && Storage::disk('public')->exists($data->img)){
            Storage::delete($data->img);
        }
        $data->delete();
        return redirect()->back();
    }
}
