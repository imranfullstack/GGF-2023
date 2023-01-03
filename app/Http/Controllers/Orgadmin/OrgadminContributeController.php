<?php

namespace App\Http\Controllers\Orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Contribute;
use App\Models\Contributehavecategorie;
use App\Models\Contributekeyword;
use Auth;
use Image;



class OrgadminContributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
        {

            $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
            $contribute = Contribute::orderby('id','desc')->where('organisation_id',$id)->get();
            return view('orgadmin.pages.contribute.index', compact('org','contribute'));    
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response contribute
     */
     public function create($id)
        {

            $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
            return view('orgadmin.pages.contribute.create', compact('org'));    
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //




        $contribute = new Contribute;
        $contribute->title = $request->title;
        $contribute->slug = strtolower(str_replace(' ', '-', $request->title)).'-'.uniqid().''.Auth::user()->id;
        $contribute->user_id = Auth::user()->id;
        $contribute->organisation_id = $id;
        $contribute->status = 1;
        $contribute->short_desc = $request->short_desc;
        $contribute->long_version = $request->long_version;
        $contribute->location_availability = $request->location_availability;
        $contribute->file_name = $request->file_name;
        // $contribute->file = $request->file;

        if($request->file_upload){
        // -- Image UPload
            if($request->hasFile('file_upload')){
                $image = $request->file('file_upload');
                $img = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/contribute/'.$img));

                $contribute->file = $img;
            }
        }



        $contribute->city = $request->city;
        $contribute->latitude = $request->latitude;
        $contribute->longitude = $request->longitude;
        $contribute->contact_parson = $request->contact_parson;
        $contribute->contact_email = $request->contact_email;
        $contribute->contact_phone = $request->contact_phone;
        // $contribute->keywords = $request->keywords;
        $contribute->save();


        // Save Contribute Category 

                   // Project Category 
        if($request->contributecat_id){
            foreach($request->contributecat_id as $item){
                $data = new Contributehavecategorie;
                $data->user_id = Auth::user()->id;
                $data->role_id = Auth::user()->role_id;
                $data->organisation_id = $id;
                $data->contribute_id = $contribute->id;
                $data->contributecat_id = $item;
                $data->save();
            }
        }


        if($request->keywords){
            foreach ($request->keywords as $keyword) {
                $con_data = new Contributekeyword;
                $con_data->name =  $keyword;
                $con_data->user_id =  Auth::user()->id;
                $con_data->contribute_id =  $contribute->id;
                $con_data->save();
            }
        }

        return redirect()->route('orgadmin.organisation.contribute.index',$id)->with('success','Successfully added a contribute.');


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
    public function edit($id , $contributeid)
    {
        return $id .'-'. $contributeid;
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
