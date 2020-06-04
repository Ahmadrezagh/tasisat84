<?php

namespace App\Http\Controllers\Panel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Kavenegar;
use App\SMS;
class SMSController extends Controller
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
            $users = User::latest()->get();
            $smss = SMS::latest()->get();
            return view('Panel.Admin.SMS.Index',compact('users','smss'));
        }else{
            return abort(404);
        }
    }


    public function send_sms(Request $req)
    {     
        if(Auth::user()->admin == 1){
        try{
            $sender = "10004346";
            $message = $req->msg;
            $receptor = $req->reciver;
            $result = Kavenegar::Send($sender,$receptor,$message);
            if($result){
                foreach($result as $r){
                    SMS::create([
                        'messageid' => $r->messageid ,
                        'message'   => $r->message ,
                        'status' => $r->status ,
                        'statustext'  => $r->statustext ,
                        'sender'   => $r->sender ,
                        'receptor' => $r->receptor   ,
                        'date'   => $r->date ,
                        'cost' => $r->cost   ,
                    ]);
                    return back();
                }       
            }
        }
        catch(\Kavenegar\Exceptions\ApiException $e){
            // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
            echo $e->errorMessage();
        }
        catch(\Kavenegar\Exceptions\HttpException $e){
            // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
            echo $e->errorMessage();
        }
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
    public function store(Request $request)
    {
        //
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
    }
}
