<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contributekeyword;
use App\Models\Contribute;
use App\Models\Contributehavecategorie;
use Str;
use Image;
use Auth;

class UserContributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
            'title' => 'required',
            'location_availability' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'keywords' => 'required',
        ]);

        $contribute = new Contribute;
        $contribute->title = $request->title;
        $contribute->slug = Str::slug($request->title).'-'.uniqid();
        $contribute->user_id = Auth::user()->id;
        $contribute->organisation_id = 0;
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
                $img = uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/contribute/'.$img));

                $contribute->file = $img;
            }
        }


        $contribute->city = 'city';
        $contribute->latitude = 'lat';
        $contribute->longitude = 'long';
        $contribute->contact_parson = $request->contact_parson;
        $contribute->contact_email = $request->contact_email;
        $contribute->contact_phone = $request->contact_phone;
        $contribute->save();

        // Save Contribute Category 

                   // Project Category 
        if($request->contributecat_id){
            foreach($request->contributecat_id as $item){
                $data = new Contributehavecategorie;
                $data->user_id = Auth::user()->id;
                $data->role_id = Auth::user()->role_id;
                $data->organisation_id = 0;
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

        return redirect()->back()->with('success','Successfully added');



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
