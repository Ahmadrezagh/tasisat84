<?php

namespace App\Http\Controllers\web;

use Alert;
// use SweetAlert;
use UxWeb\SweetAlert\SweetAlert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Contact;
use App\Models\Siteinfo;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.contact');
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
        $data = array(
            'name'=>$request->name,
            'mail'=>$request->mail,
            'msg'=>$request->msg
        );
      Mail::send('mail.contact', $data, function($message) {
        //Change 'r.gh687@gmail.com' to Siteinfo::find(1)->pluck(mail);
         $message->to('r.gh687@gmail.com', 'ادمین سایت')->subject
            ('پیام پشتیبانی وبسایت');
         $message->from('noreplay@tasisat84.ir','پیام پشتیبانی');
      });
      SweetAlert::message('Robots are working!');
      alert()->success('در اسرع وقت پاسخگو خواهیم بود', 'پیام شما با موفقیت ارسال شد');
      return back();
        
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
