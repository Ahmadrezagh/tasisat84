<?php

namespace App\Http\Controllers\Panel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Category;
use Auth;
class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin == 1){
            $services = Service::latest()->get();
            return view('Panel.Admin.Services.Index',compact('services'));
        }else{
            return abort(404);
        }
    }

    public function show_edit($id)
    {
        if(Auth::user()->admin == 1 && count(Service::where('id', '=', $id)->get())>0){
            $cats = Category::get();
            $service = Service::where('id', '=', $id)->first();
            return view('Panel.Admin.Services.Edit',compact('service','cats'));
        }else{
            return abort(404);
        }
    }

    public function show_add()
    {
        if(Auth::user()->admin == 1){
            $cats = Category::get();
            return view('Panel.Admin.Services.Add',compact('cats'));
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
            Service::create([
                'title' => $req->title,
                'desc' => $req->desc,
                'content' => $req->content,
                'cat_id' => $req->cat,
                'img' => $req->filepath
            ]);
            alert()->success('خدمات با موفقیت ثبت شد');
                return redirect('/admin/services');
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
    public function edit($id, Request $req)
    {
        //
        if(Auth::user()->admin == 1){
            Service::where('id','=',$id)->update([
                'title' => $req->title,
                'desc' => $req->desc,
                'content' => $req->content,
                'cat_id' => $req->cat,
                'img' => $req->filepath
            ]);
            alert()->success('ویرایش با موفقیت انجام شد');
            return redirect('/admin/services');
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
        //
        if(Auth::user()->admin == 1){
            Service::where('id','=',$id)->delete();
            alert()->success('خدمات مورد نظر با موفقیت حذف شد');
                return redirect('/admin/services');
        }else{
            return abort(404);
        }
    }
}
