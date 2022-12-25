<?php

namespace App\Http\Controllers\Orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Contributekeyword;
use App\Models\Contribute;
use Auth;



class OrgadminSearchResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        return view('orgadmin.pages.searchresource.index', compact('org'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
        {
            $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
            return view('orgadmin.pages.searchresource.create', compact('org'));
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request,$id)
    {




            $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $lat = $request->latitude;
        $long = $request->longitude;
        $resources = Contribute::orderby('id','desc')
                        ->join('contributehavecategories', 'contributehavecategories.contribute_id', '=', 'contributes.id') 
                        ->select('contributes.*','contributehavecategories.contributecat_id')
                        ->whereBetween('latitude',[$lat-0.04,$lat+0.04])->whereBetween('longitude',[$long-0.04,$long+0.04])
                        ->where('title', 'like', '%'.$request->search.'%')
                        ->where('contributecat_id','=',$request->contributecat_id)
                        ->get();


            return view('orgadmin.pages.searchresource.search', compact('org','resources'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function single_resources($id , $resourcid)
    {
            $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $resources = Contribute::where('id',$resourcid)->first();
            return view('orgadmin.pages.searchresource.single', compact('org','resources'));
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
