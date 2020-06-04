<?php

namespace App\Http\Controllers\Panel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'min:10', 'max:11'],
        ]);
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
            $users = User::latest()->get();
            return view('Panel.Admin.Users.Index',compact('users'));
        }else{
            return abort(404);
        }

    }
    public function show_add()
    {
        if(Auth::user()->admin == 1){
            return view('Panel.Admin.Users.Add');
        }else{
            return abort(404);
        }
    }
    public function show_edit($id)
    {
        if(Auth::user()->admin == 1 && count(User::where('id','=',$id)->get())>0){
            $user = User::where('id','=',$id)->first();
            return view('Panel.Admin.Users.Edit',compact('user'));
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
    public function store(Request $data)
    {
        if(Auth::user()->admin == 1){
            if(count(User::where('phone','=',$data['phone'])->get())>0){
                alert()->warning('این شماره قبلا در سامانه ثبت گردیده است');
                return back();
            }elseif(count(User::where('email','=',$data['email'])->get())>0){
                alert()->warning('این ایمیل قبلا در سامانه ثبت گردیده است');
                return back();
            }
            else{
                User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'password' => Hash::make($data['password']),
                ]);
                alert()->success('کاربر با موفقیت ثبت شد');
                return back();
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
    public function edit($id , Request $data)
    {
        if(Auth::user()->admin == 1){
            
            if(count(User::where([
                ['phone','=',$data['phone']],
                ['id' ,'!=', $id]
            ])->get())>0){
                alert()->warning('این شماره قبلا در سامانه ثبت گردیده است');
                return back();
            }elseif(count(User::where([
                ['phone','=',$data['phone']],
                ['id' ,'!=', $id]
            ])->get())>0){
                alert()->warning('این ایمیل قبلا در سامانه ثبت گردیده است');
                return back();
            }
            else{
                User::where('id','=',$id)->update([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'password' => Hash::make($data['password']),
                ]);
                alert()->success('مشخصات کاربر با موفقیت بروزرسانی شد');
                return back();
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
        if(Auth::user()->admin == '1' && count(User::where('id','=',$id)->get())>0){
            User::where('id','=',$id)->delete();
            alert()->success('کاربر با موفقیت حذف شد');
            return back();
        }else{
            return abort(404);
        }
    }
}
