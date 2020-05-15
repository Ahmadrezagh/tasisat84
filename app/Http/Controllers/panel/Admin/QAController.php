<?php

namespace App\Http\Controllers\Panel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;
use App\Models\Category;
use App\Models\Question;
use Auth;

class QAController extends Controller
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
        //
        if(Auth::user()->admin == 1){
            $questions = Question::latest()->get();
            return view('Panel.Admin.Q&A.Index',compact('questions'));
        }else{
            return abort(404);
        }
    }

    public function show_add()
    {
        if(Auth::user()->admin == 1){
            $services = Service::get();
            $projects = Project::get();
            $cats = Category::get();
            return view('Panel.Admin.Q&A.Add',compact('cats','services','projects'));
        }else{
            return abort(404);
        }
    }
    public function show_edit($id)
    {
        if(Auth::user()->admin == 1 && count(Question::where('id','=',$id)->get())>0){
            $question = Question::where('id','=',$id)->first();
            $services = Service::get();
            $projects = Project::get();
            $cats = Category::get();
            return view('Panel.Admin.Q&A.Edit',compact('cats','services','projects','question'));
            
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
        //
            
        if(Auth::user()->admin == 1){
            if($req->cat == null && $req->type == null && $req->project == null && $req->service == null){
                alert()->warning('پرسش حداقل باید برای یک پارامتر تعریف شود، لطفا حداقل یک پارامتر را انتخاب کنید.');
            return back();
            }else if($req->question == null || $req->answer == null){
                alert()->warning('پارامتر پرسش یا پاسخ نباید خالی باشد');
                return back();
            }
            else{
                Question::create([
                    'question' => $req->question ,
                    'answer'   => $req->answer ,
                    'type' => $req->type ,
                    'cat_id'  => $req->cat ,
                    'service_id'   => $req->service ,
                    'project_id' => $req->project   ,
                ]);
                alert()->success('پرسش با موفقیت ایجاد شد');
                return redirect('/admin/q&a');
            }
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
    public function edit($id , Request $req)
    {
        //
        if(Auth::user()->admin == 1){
            if($req->cat == null && $req->type == null && $req->project == null && $req->service == null){
                alert()->warning('پرسش حداقل باید برای یک پارامتر تعریف شود، لطفا حداقل یک پارامتر را انتخاب کنید.');
            return back();
            }else if($req->question == null || $req->answer == null){
                alert()->warning('پارامتر پرسش یا پاسخ نباید خالی باشد');
                return back();
            }
            else{
                Question::where('id','=',$id)->update([
                    'question' => $req->question ,
                    'answer'   => $req->answer ,
                    'type' => $req->type ,
                    'cat_id'  => $req->cat ,
                    'service_id'   => $req->service ,
                    'project_id' => $req->project   ,
                ]);
                alert()->success('ویرایش با موفقیت انجام شد');
                return redirect('/admin/q&a');
            }
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
            Question::where('id','=',$id)->delete();
            alert()->success('سوال با موفقیت حذف شد');
                return redirect('/admin/q&a');
        }else{
            return abort(404);
        }
    }
}
