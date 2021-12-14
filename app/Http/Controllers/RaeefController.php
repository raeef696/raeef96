<?php

namespace App\Http\Controllers;

use App\Models\raeef;
use Illuminate\Http\Request;

class RaeefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $raeef = raeef::all();
        return view('index',compact('raeef'));

    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $raeef = new raeef();
        $raeef->first_name = $request->first_name;
        $raeef->last_name = $request->last_name;
        $raeef->email = $request->email;

        $raeef->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\raeef  $raeef
     * @return \Illuminate\Http\Response
     */
    public function show(raeef $raeef)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\raeef  $raeef
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $raeef = raeef::find($id);
        return view('edit',compact('raeef'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\raeef  $raeef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $raeef = raeef::find($id);
        $raeef->first_name = $request->input('first_name');
        $raeef->last_name = $request->input('last_name');
        $raeef->email = $request->input('email');
        $raeef->update();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\raeef  $raeef
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $raeef = raeef::find($id);
        $raeef->delete();
        return redirect()->back();
    }
}
