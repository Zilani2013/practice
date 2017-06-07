<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\simple;

class myController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $var = new simple;

        $data= $var::all();

        return view('index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $var = new simple;

        $var->name = $request->name;

        $var->save();

        $data=$var::all();

        return view('index',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = new simple;

        $data= $var::where('id',$id)->get();

        return view('show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = new simple;

        $data= $var::find($id);
        // return "string";

        return view('edited',compact('data'));
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
        $var = new simple;

        $data = $var::find($id);

        $data->name = $request->name;

        $data->save();

        $data = $var::all();
        return view('index',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $var = new simple;

        $data= $var::find($id);
        $data->delete();

        $data = $var::all();

        return view('index',compact('data'));
    }
}
