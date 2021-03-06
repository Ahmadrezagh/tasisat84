<?php

namespace App\Http\Controllers\Panel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Recipt;
class ReciptsController extends Controller
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
            $recs = Recipt::latest()->get();
            return view('Panel.Admin.Recipt.Index',compact('recs'));
        }else{
            return abort(404);
        }
    }
    public function show_edit($id)
    {
        if(Auth::user()->admin == 1 && count(Recipt::where('id', '=', $id)->get())>0){
            $rec = Recipt::where('id','=',$id)->first();
            $users = User::get();
            return view('Panel.Admin.Recipt.Edit',compact('rec','users'));
        }else{
            return abort(404);
        }
    }

    public function show_add()
    {
        if(Auth::user()->admin == 1){
            $users = User::get();
            return view('Panel.Admin.Recipt.Add',\compact('users'));
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
            Recipt::create([
                'user_id' => $req->user_id,
                'rcp_img' => $req->filepath
            ]);
            alert()->success(' فیش حقوقی با موفقیت ثبت شد');
                return redirect('/admin/recs');
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
            Recipt::where('id','=',$id)->update([
                'user_id' => $req->user_id,
                'rcp_img' => $req->filepath
            ]);
            alert()->success('ویرایش با موفقیت انجام شد');
            return redirect('/admin/recs');
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
            Recipt::where('id','=',$id)->delete();
            alert()->success(' فیش حقوقی با موفقیت حذف شد');
                return redirect('/admin/recs');
        }else{
            return abort(404);
        }
    }
}
