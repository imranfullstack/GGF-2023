<?php

namespace App\Http\Controllers\Orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Sponsor;
use Auth;

class OrgadminSponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $sponsor = Sponsor::orderby('id','desc')->where('organisation_id',$id)->get();
        return view('orgadmin.pages.sponsor.index', compact('org','sponsor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        return view('orgadmin.pages.sponsor.create', compact('org'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $sponsor = new Sponsor;
        $sponsor->sponsor_title = $request->sponsor_title;
        $sponsor->status = 1;
        $sponsor->organisation_id = $id;
        $sponsor->user_id = Auth::user()->id;
        $sponsor->sponsor_desc = $request->sponsor_desc;
        $sponsor->sponsor_url = $request->url;
        $sponsor->sponsor_logo = $request->logo;
        $sponsor->save();
        return redirect()->route('orgadmin.organisation.sponsor.index',$id)->with('success','Successfully Added a new Sponsor');
        
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
