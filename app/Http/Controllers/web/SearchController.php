<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;
use App\Models\Category;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $categories = Category::all();
        $count = 0;
        $cat_id = Category::where('name','like','%'.$search.'%')->pluck('id')->first();
        $results[0] = Project::where('title','like','%'.$search.'%')->
        orWhere('desc','like','%'.$search.'%')->
        orWhere('content','like','%'.$search.'%')->
        orWhere('cat_id','=',$cat_id)->
        get();
        $results[0]->type = 'project';
        $results[1] = Service::where('title','like','%'.$search.'%')->
        orWhere('desc','like','%'.$search.'%')->
        orWhere('content','like','%'.$search.'%')->
        orWhere('cat_id','=',$cat_id)->
        get();
        $results[1]->type = 'service';
        foreach($results as $result){
            $count += count($result);
        }
        return view('web.search',compact('results','categories','count'));
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
