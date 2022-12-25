<?php

namespace App\Http\Controllers\orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Orgimage;
use App\Models\Keyword;
use App\Models\Ogranisationtype;
use App\Models\Orgtypehave;
use App\Models\Orgfocusedhave;
use App\Models\Orgprovidehave;
use App\Models\Lookingfor;
use Auth;
use Image;
class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

// return 'Problem';
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();

        return view('orgadmin.pages.organisation.dashboard', compact('org'));
    }

    // Organisation List 
    public function list()
    {
        $org = Organisation::orderby('id','desc')->where('user_id',Auth::user()->id)->get();
        return view('orgadmin.pages.nonorg.pages.list', compact('org'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 'Create';

        $orgtype = Ogranisationtype::orderby('id','desc')->where('status',1)->get();
        return view('orgadmin.pages.nonorg.pages.create', compact('orgtype'));
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
            'org_name' => 'required|max:255',
            'org_email' => 'unique:organisations',
            'org_email' => 'required|max:255',
            'org_public_email' => 'required|max:255',
            'account_email' => 'required|max:255',
            'phone' => 'required|max:255',
            'address' => 'required|max:255',
            'contact_person' => 'required|max:255',
            'contact_person_email' => 'required|max:255',
            'best_contact' => 'required|max:255',
            'logo' => 'required',
            'keywords' => 'required',
            // 'looking_for' => 'required',
            'lat' => 'required',
            'long' => 'required',
        ]);

    // --- Save Organisation Info --
        $org = new Organisation;
        $org->user_id = Auth::user()->id;
        $org->org_name = $request->org_name;
        $org->slug = strtolower(str_replace(' ', '-', $request->org_name)).'-'.uniqid();
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
                $logo = $request->file('logo');
                $img = Auth::user()->id.''.uniqid().'.'. $logo->getClientOriginalExtension();
                Image::make($logo)->save(public_path('/img/upload/org/logo/'.$img));
                $org->logo = $img;
            }
        // Upload Logo From Here End
        // Upload Logo From Here 
            if($request->hasFile('banner_1')){
                $bannerone = $request->file('banner_1');
                $oneimg = Auth::user()->id.''.uniqid().'.'. $bannerone->getClientOriginalExtension();
                Image::make($bannerone)->save(public_path('/img/upload/org/images/'.$oneimg));
                $org->banner_1 = $oneimg;
            }
        // Upload Logo From Here 
            if($request->hasFile('banner_2')){
                $bannertwo = $request->file('banner_2');
                $twoimg = Auth::user()->id.''.uniqid().'.'. $bannertwo->getClientOriginalExtension();
                Image::make($bannertwo)->save(public_path('/img/upload/org/images/'.$twoimg));
                $org->banner_2 = $twoimg;
            }
        // Upload Logo From Here 
            if($request->hasFile('banner_3')){
                $bannerthree = $request->file('banner_3');
                $threeimg = Auth::user()->id.''.uniqid().'.'. $bannerthree->getClientOriginalExtension();
                Image::make($bannerthree)->save(public_path('/img/upload/org/images/'.$threeimg));
                $org->banner_3 = $threeimg;
            }


        $org->lat = $request->lat;
        $org->long = $request->long;



        $org->save();
    // --- Save Organisation Info --



      // Save org Type 
        if($request->looking_for){
          foreach ($request->looking_for as $item) {
                    $lookingfor = new Lookingfor;
                    $lookingfor->name = $item;
                    $lookingfor->user_id = Auth::user()->id;
                    $lookingfor->organisation_id = $org->id;
                    $lookingfor->save();
          }
        }
        // Save org Type 
        // Save Keywords 
        if($request->keywords){
           // $keyword_to_array =   (explode(",",$request->keywords));
                foreach ($request->keywords as $item) {
                    $keyword = new Keyword;
                    $keyword->organisation_id = $org->id;
                    $keyword->keyword = $item;
                    $keyword->save();
          }
        }
        // Save Keywords End
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

        // upload Images END
        return redirect()->route('orgadmin.index');


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



    public function view($id){

        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();

        return view('orgadmin.pages.nonorg.pages.view', compact('org'));
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
