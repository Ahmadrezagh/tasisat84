<?php

namespace App\Http\Controllers\Panel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siteinfo;
use App\Models\Slider;
use Auth;


class WebsiteSettingController extends Controller
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
            $sliders = Slider::get();
            $info = Siteinfo::where('id','=','1')->first();
            return view('Panel.Admin.Siteinfo.Edit',compact('info','sliders'));
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
    public function edit(Request $req)
    {
        //
        
        if(Auth::user()->admin == 1){
            foreach($req as $r){
                if(empty($r)){
                    alert()->warning('هیچ یک از مقادیر نباید خالی باشد');
                    return back();
                break;
                }
            }
            if(isset($req->aboutus_content)){
                Siteinfo::where('id','=','1')->update([
                    'aboutus_content' => $req->aboutus_content
                ]);
            }elseif(isset($req->name)){
                Siteinfo::where('id','=','1')->update([
                    'name' => $req->name,
                    'mail' => $req->mail,
                    'address' => $req->address,
                    'phone' => $req->phone,
                    'time_to_work' => $req->time_to_work,
                    'instagram' => $req->instagram,
                    'twitter' => $req->twitter,
                    'facebook' => $req->facebook,
                    'logo_nav' => $req->logo_nav,
                    'logo_footer' => $req->logo_footer
                ]);
            }elseif(isset($req->btn_white1)){
                for($i = 1; $i <8;$i ++)
                {
                    if($i < 4){
                        Slider::where('id','=',$i)->update([
                            'img' => $req['filepath'.$i],
                            'title'=> $req['title'.$i],
                            'desc' => $req['desc'.$i],
                            'subtitle'=> $req['subtitle'.$i],
                            'btn_white'=>$req['btn_white'.$i],
                            'btn_white_link'=>$req['btn_white_link'.$i],
                            'btn_orange' => $req['btn_orange'.$i],
                            'btn_orange_link' => $req['btn_orange_link'.$i]
                        ]);
                    }else{
                        Slider::where('id','=',$i)->update([
                            'img' => $req['filepath'.$i],
                            'title'=> $req['title'.$i],
                            'desc' => $req['desc'.$i],
                        ]);
                    }
                }
                alert()->success('بخش اسلایدر ها ویرایش شد');
                return back();
            }else{
                alert()->warning('هیچ یک از مقادیر نباید خالی باشد');
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
        //
    }
}
