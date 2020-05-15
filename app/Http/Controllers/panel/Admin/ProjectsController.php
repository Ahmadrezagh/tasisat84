<?php

namespace App\Http\Controllers\Panel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use Auth;
class ProjectsController extends Controller
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
            $projects = Project::latest()->get();
            return view('Panel.Admin.Projects.Index',compact('projects'));
        }else{
            return abort(404);
        }
    }

    public function show_edit($id)
    {
        if(Auth::user()->admin == 1 && count(Project::where('id', '=', $id)->get())>0){
            $cats = Category::get();
            $project = Project::where('id', '=', $id)->first();
            return view('Panel.Admin.Projects.Edit',compact('project','cats'));
        }else{
            return abort(404);
        }
    }

    public function show_add()
    {
        if(Auth::user()->admin == 1){
            $cats = Category::get();
            return view('Panel.Admin.Projects.Add',compact('cats'));
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
            Project::create([
                'title' => $req->title,
                'desc' => $req->desc,
                'content' => $req->content,
                'cat_id' => $req->cat,
                'img' => $req->filepath
            ]);
            alert()->success('پروژه با موفقیت ثبت شد');
                return redirect('/admin/projects');
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
        if(Auth::user()->admin == 1){
            Project::where('id','=',$id)->update([
                'title' => $req->title,
                'desc' => $req->desc,
                'content' => $req->content,
                'cat_id' => $req->cat,
                'img' => $req->filepath
            ]);
            alert()->success('ویرایش با موفقیت انجام شد');
            return redirect('/admin/projects');
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
            Project::where('id','=',$id)->delete();
            alert()->success('پروژه با موفقیت حذف شد');
                return redirect('/admin/projects');
        }else{
            return abort(404);
        }
    }
}
