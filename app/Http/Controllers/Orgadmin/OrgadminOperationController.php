<?php

namespace App\Http\Controllers\Orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Lookingfor;
use App\Models\Orgfocusedhave;
use App\Models\Orgtypehave;
use App\Models\Orgprovidehave;
use App\Models\Keyword;
use Auth;
use Image;
use File;



class OrgadminOperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


   public function index($id)
    {

        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        return view('orgadmin.pages.operation.index', compact('org'));    
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        return view('orgadmin.pages.operation.create', compact('org'));   
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


          $validated = $request->validate([
                'org_name' => 'required|max:255',
                'org_email' => 'required|max:255',
                'org_public_email' => 'required|max:255',
                'account_email' => 'required|max:255',
                'phone' => 'required|max:255',
                'address' => 'required|max:255',
                'contact_person' => 'required|max:255',
                'contact_person_email' => 'required|max:255',
                'best_contact' => 'required|max:255',
            ]);




    // --- Save Organisation Info --
        $org = Organisation::where('id',$id)->first();
        $org->user_id = Auth::user()->id;
        $org->org_name = $request->org_name;
        $org->org_email = $request->org_email;
        $org->org_public_email = $request->org_public_email;
        $org->account_email = $request->account_email;
        $org->web_url = $request->web_url;
        $org->facebook_url = $request->facebook_url;
        $org->linkedin_url = $request->linkedin_url;
        $org->twitter_url = $request->twitter_url;
        $org->instagram_url = $request->instagram_url;
        $org->phone = $request->phone;
        $org->address = $request->address;
        $org->contact_person = $request->contact_person;
        $org->gov_registration = $request->gov_registration;
        $org->contact_person_email = $request->contact_person_email;
        $org->best_contact = $request->best_contact;
        $org->summary = $request->summary;
        $org->long_version = $request->long_version;
        // Upload Logo From Here 
            if($request->hasFile('logo')){



        if($org->logo){
            $image_path = public_path("/img/upload/org/logo/{$org->logo}");
            if (File::exists($image_path)) {
                //File::delete($image_path);
                unlink($image_path);
            }
        }



                $logo = $request->file('logo');
                $img = Auth::user()->id.''.uniqid().'.'. $logo->getClientOriginalExtension();
                Image::make($logo)->save(public_path('/img/upload/org/logo/'.$img));
                $org->logo = $img;
            }
        // Upload Logo From Here End



// update Banner 1 From Here 
if($request->hasFile('banner_1')){
    if($org->banner_1){
        $image_path = public_path("/img/upload/org/images/{$org->banner_1}");
        if (File::exists($image_path)) {
            //File::delete($image_path);
            unlink($image_path);
        }
    }
    $banner1 = $request->file('banner_1');
    $img1 = Auth::user()->id.''.uniqid().'.'. $banner1->getClientOriginalExtension();
    Image::make($banner1)->save(public_path('/img/upload/org/images/'.$img1));
    $org->banner_1 = $img1;
}
// update Banner 1 From Here End
// update Banner 2 From Here 
if($request->hasFile('banner_2')){
    if($org->banner_2){
        $image_path = public_path("/img/upload/org/images/{$org->banner_2}");
        if (File::exists($image_path)) {
            //File::delete($image_path);
            unlink($image_path);
        }
    }
    $banner2 = $request->file('banner_2');
    $img2 = Auth::user()->id.''.uniqid().'.'. $banner2->getClientOriginalExtension();
    Image::make($banner2)->save(public_path('/img/upload/org/images/'.$img2));
    $org->banner_2 = $img2;
}
// update Banner 2 From Here End
// update Banner 2 From Here 
if($request->hasFile('banner_3')){
    if($org->banner_3){
        $image_path = public_path("/img/upload/org/images/{$org->banner_3}");
        if (File::exists($image_path)) {
            //File::delete($image_path);
            unlink($image_path);
        }
    }
    $banner3 = $request->file('banner_3');
    $img3 = Auth::user()->id.''.uniqid().'.'. $banner3->getClientOriginalExtension();
    Image::make($banner3)->save(public_path('/img/upload/org/images/'.$img3));
    $org->banner_3 = $img3;
}
// update Banner 2 From Here End

    if($request->lat){
        $org->lat = $request->lat;
        $org->long = $request->long;

    }
        $org->save();









        // Save org Type 
        if($request->orgtype){
                foreach ($request->orgtype as $item) {
                    $orgtype = new Orgtypehave;
                    $orgtype->organisation_id = $org->id;
                    $orgtype->user_id = Auth::user()->id;
                    $orgtype->ogranisationtype_id = $item;
                    $orgtype->save();
          }
        }
        // Save org Type 
        
        // Save org Type 
        if($request->focused){
     
                foreach ($request->focused as $item) {
                    $focus = new Orgfocusedhave;
                    $focus->organisation_id = $org->id;
                    $focus->user_id = Auth::user()->id;
                    $focus->focused_id = $item;
                    $focus->save();
          }
        }
        // Save org Type 
        
   
        // Save org Type 

        if($request->provide){
                foreach ($request->provide as $item) {
                    $provide = new Orgprovidehave;
                    $provide->organisation_id = $org->id;
                    $provide->user_id = Auth::user()->id;
                    $provide->provide_id = $item;
                    $provide->save();
          }
        }
        // Save org Type 



        return redirect()->back()->with('success','successfully updated.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function keyword_update(Request $request,$id)
    {

        // Save Keywords 
        if($request->keywords){
                foreach ($request->keywords as $item) {
                    $keyword = new Keyword;
                    $keyword->organisation_id = $id;
                    $keyword->keyword = $item;
                    $keyword->save();
          }
        return redirect()->back()->with('success','successfully added new keyword');

        }
        // Save Keywords End
    }
    // Looking for Controller
    public function lookingfor_update(Request $request,$id)
    {
      if($request->looking_for){
                foreach ($request->looking_for as $item) {
                    $lookingfor = new Lookingfor;
                    $lookingfor->name = $item;
                    $lookingfor->user_id = Auth::user()->id;
                    $lookingfor->organisation_id = $id;
                    $lookingfor->save();
          }
        return redirect()->back()->with('success','successfully added new Items');
        }
    
    }


    // Org types Cat Remove
    public function orgtype_cat($id , $orgtypeid){
        $type = Orgtypehave::where('id',$orgtypeid)->where('organisation_id',$id)->first();
        $type->delete();
        return redirect()->back()->with('success','successfully Removed');
    }
    // Org types Cat Remove
    public function focus_cat_remove($id , $focuscatid){
        $focus = Orgfocusedhave::where('id',$focuscatid)->where('organisation_id',$id)->first();
        $focus->delete();
        return redirect()->back()->with('success','successfully Removed');
    }
    // Provide Cat Remove
    public function provide_cat_remove($id , $focuscatid){
        $provide = Orgprovidehave::where('id',$focuscatid)->where('organisation_id',$id)->first();
        $provide->delete();
        return redirect()->back()->with('success','successfully Removed');
    }
    // Provide Cat Remove
    public function keyword_remove($id , $keywordid){
        $keyword = Keyword::where('id',$keywordid)->where('organisation_id',$id)->first();
        $keyword->delete();
        return redirect()->back()->with('success','successfully Removed');
    }
    // Provide Cat Remove
    public function lookingfor_remove($id , $lookingforid){
        $keyword = Lookingfor::where('id',$lookingforid)->where('organisation_id',$id)->first();
        $keyword->delete();
        return redirect()->back()->with('success','successfully Removed');
    }
}
