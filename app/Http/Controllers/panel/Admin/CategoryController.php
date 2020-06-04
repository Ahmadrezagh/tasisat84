<?php

namespace App\Http\Controllers\Panel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Category;
use Auth;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin == 1){
        $cats = Category::get();
        return view('Panel.Admin.Category.Index',compact('cats'));
        }else{
            return abort(404);
        }
    }
    public function show_edit($id)
    {
        if(Auth::user()->admin == 1 && count(Category::where('id', '=', $id)->get())>0){
            $cat = Category::where('id','=',$id)->first();
            return view('Panel.Admin.Category.Edit',compact('cat','id'));
        }else{
            return abort(404);
        }
    }

    public function show_add()
    {
        if(Auth::user()->admin == 1){
            return view('Panel.Admin.Category.Add');
        }else{
            return abort(404);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        if(Auth::user()->admin == 1){
            Category::create([
                'name' => $req->name,
            ]);
            alert()->success('دسته بندی با موفقیت ثبت شد');
                return redirect('/admin/cat');
        }else{
            return abort(404);
        }
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
    public function edit(Request $req, $id)
    {
        if(Auth::user()->admin == 1){
            Category::where('id','=',$id)->update([
                'name' => $req->name,
            ]);
            alert()->success('ویرایش با موفقیت انجام شد');
            return redirect('/admin/cat');
        }else{
            return abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->admin == 1){
            Category::where('id','=',$id)->delete();
            alert()->success('دسته بندی با موفقیت حذف شد');
                return redirect('/admin/cat');
        }else{
            return abort(404);
        }
    }
}
