<?php

namespace App\Http\Controllers\Orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Sponsor;
use Auth;
use Image;
use File;

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
        $validated = $request->validate([
            'sponsor_title' => 'required',
            'sponsor_desc' => 'required',
            'logo' => 'required',
            'url' => 'required',
        ]);


        $sponsor = new Sponsor;
        $sponsor->sponsor_title = $request->sponsor_title;
        $sponsor->status = 1;
        $sponsor->organisation_id = $id;
        $sponsor->user_id = Auth::user()->id;
        $sponsor->sponsor_desc = $request->sponsor_desc;
        $sponsor->sponsor_url = $request->url;

        if($request->logo){
            if($request->hasFile('logo')){
                $image = $request->file('logo');
                $img = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/sponsor/'.$img));
                $sponsor->sponsor_logo = $img;
            } 
         }
        $sponsor->save();
        return redirect()->route('orgadmin.organisation.sponsor.index',$id)->with('success','Successfully Added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id ,$sponsorid)
    {
        $sponsor  = Sponsor::find($sponsorid);
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        return view('orgadmin.pages.sponsor.view', compact('org','sponsor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id ,$sponsorid)
    {
        $sponsor  = Sponsor::find($sponsorid);
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        return view('orgadmin.pages.sponsor.edit', compact('org','sponsor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id ,$sponsorid)
    {

        $validated = $request->validate([
            'sponsor_title' => 'required',
            'sponsor_desc' => 'required',
            'logo' => 'required',
            'url' => 'required',
        ]);


        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $sponsor  = Sponsor::find($sponsorid);
        $sponsor->sponsor_title = $request->sponsor_title;
        $sponsor->sponsor_desc = $request->sponsor_desc;
        $sponsor->sponsor_url = $request->url;

        if($request->logo){

            if($sponsor->sponsor_logo){

                $image_path = public_path("img/upload/sponsor/{$sponsor->sponsor_logo}");
                if (File::exists($image_path)) {
                    //File::delete($image_path);
                    unlink($image_path);
                }
            }


            if($request->hasFile('logo')){
                $image = $request->file('logo');
                $img = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/sponsor/'.$img));
                $sponsor->sponsor_logo = $img;
            } 
         }
        $sponsor->save();
        return redirect()->route('orgadmin.organisation.sponsor.index',$id)->with('success','Successfully Updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id , $sponsorid)
    {
        $sponsor  = Sponsor::where('id',$sponsorid)->where('organisation_id',$id)->first();
       
        if($sponsor->sponsor_logo){
            $image_path = public_path("img/upload/sponsor/{$sponsor->sponsor_logo}");
            if (File::exists($image_path)) {
                //File::delete($image_path);
                unlink($image_path);
            }
        }
        $sponsor->delete();
        return redirect()->route('orgadmin.organisation.sponsor.index',$id)->with('success','Successfully Deleted');


        return $sponsor;
    }
}
