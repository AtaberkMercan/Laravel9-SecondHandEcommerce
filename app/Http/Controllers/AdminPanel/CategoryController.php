<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $appends=['getParentsTree'];
    public static function getParentsTree($category,$title){
    if($category->parent_id==0) {
        return $title;
    }
    $parent=Category::find($category->parent_id);
    $title=$parent->title . '>' .$title;
    return CategoryController::getParentsTree($parent,$title);
 }
    public function index()
    {
        $data=Category::all();
        return view('admin.Category.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
        return view('admin.Category.create',['data'=>$data]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Category();
        $data->parent_id=$request->parent_id;
        $data->title=$request->title;
        $data->keys=$request->keys;
        $data->desc=$request->desc;
        $data->stats=$request->stats;
        if($request->file('img')){
            $data->img=$request->file('img')->store('images');
        }
        $data->save();
        return redirect('admin/Category');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category,$id)
    {
        $data=Category::find($id);
        return view('admin.Category.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        $data=Category::find($id);
        $datalist=Category::all();
        return view('admin.Category.edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {
        $data=Category::find($id);
        $data->parent_id=$request->parent_id;
        $data->title=$request->title;
        $data->keys=$request->keys;
        $data->desc=$request->desc;
        $data->stats=$request->stats;
        if($request->file('img')){
            $data->img=$request->file('img')->store('images');
        }
        $data->save();
        return redirect('admin/Category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        $data=Category::find($id);
        Storage::delete($data->img);
        $data->delete();
        return redirect('admin/Category');
    }
}
