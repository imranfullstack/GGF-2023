<?php

namespace App\Http\Controllers\Orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Recruit;
use App\Models\Jobapply;
use App\Models\Recruithavecategory;
use Auth;
use Str;




class OrgadminRecruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $recruit = Recruit::orderby('id','desc')->where('organisation_id',$id)->get();
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        return view('orgadmin.pages.recruit.index', compact('org','recruit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
        {
            $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
            return view('orgadmin.pages.recruit.create', compact('org'));
        }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'location' => 'required',
        ]);


        $recruit = new Recruit;
        $recruit->title = $request->title;
        $recruit->slug = Str::slug($request->title).'-'.uniqid().'-'.$id;
        $recruit->user_id = Auth::user()->id;
        $recruit->organisation_id = $id;
        $recruit->status = 1;
        $recruit->parson_category = $request->parson_category;
        $recruit->short_desc = $request->short_desc;
        $recruit->rate_of_pay = $request->rate_of_pay;
        $recruit->start_date = $request->start_date;
        $recruit->end_date = $request->end_date;
        $recruit->contact_parson = $request->contact_parson;
        $recruit->contact_email = $request->contact_email;
        $recruit->contact_phone = $request->contact_phone;
        $recruit->location = $request->location;
        $recruit->attach_application = $request->attach_application;
        $recruit->save();




        // orgganisation
        $org = Organisation::where('id',$id)->first();
        $org->hiring = 1;
        $org->save(); //  -> Event Active Code




        if($request->recruitcat_id){
          // Project Category 
            foreach($request->recruitcat_id as $item){
                $cat = new Recruithavecategory;
                $cat->organisation_id = $id;
                $cat->user_id = Auth::user()->id;
                $cat->recruit_id = $recruit->id;
                $cat->recruitcat_id = $item;
                $cat->save();
            }
        }







        return redirect()->route('orgadmin.organisation.recruit.index',$id)->with('success','Successfully added a recruit.');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function recruit_application($id , $recruitslug)
    {
        $org = Organisation::where('slug',$id)->where('user_id',Auth::user()->id)->first();
        $recruit = Recruit::where('slug',$recruitslug)->first();
        $apply = Jobapply::where('recruit_id',$recruit->id)->get();    
        return view('orgadmin.pages.recruit.application', compact('org','apply'));
    }




    public function edit($id,$recruitid)
    {

        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $recruit = Recruit::where('organisation_id',$id)->where('id',$recruitid)->first();
        if($recruit->status == 4){
            return redirect()->back()->with('danger',"Sorry you don't have Access!");            
        }else{
            return view('orgadmin.pages.recruit.edit', compact('org','recruit'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id , $recruitid)
    {


        $validated = $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'location' => 'required',
        ]);


        $recruit = Recruit::where('organisation_id',$id)->where('id',$recruitid)->first();
        $recruit->title = $request->title;
        $recruit->organisation_id = $id;
        $recruit->status = $request->status;
        $recruit->parson_category = $request->parson_category;
        $recruit->short_desc = $request->short_desc;
        $recruit->rate_of_pay = $request->rate_of_pay;
        $recruit->start_date = $request->start_date;
        $recruit->end_date = $request->end_date;
        $recruit->contact_parson = $request->contact_parson;
        $recruit->contact_email = $request->contact_email;
        $recruit->contact_phone = $request->contact_phone;
        $recruit->location = $request->location;
        $recruit->attach_application = $request->attach_application;
        $recruit->save();

        if($request->recruitcat_id){
          // Project Category 
            foreach($request->recruitcat_id as $item){
                $cat = new Recruithavecategory;
                $cat->organisation_id = $id;
                $cat->user_id = Auth::user()->id;
                $cat->recruit_id = $recruit->id;
                $cat->recruitcat_id = $item;
                $cat->save();
            }
        }







        return redirect()->route('orgadmin.organisation.recruit.index',$id)->with('success','Successfully added a recruit.');






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove_cat($id , $recruitid , $catid)
    {
        $category = Recruithavecategory::where('recruitcat_id',$catid)->where('recruit_id',$recruitid)->first();
        $category->delete();
        return redirect()->back();
    }


    public function application($id){


        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $apply = Jobapply::where('organisation_id',$id)->get();  
        return view('orgadmin.pages.recruit.application', compact('org','apply'));


    }

    public function single_application($id , $applicationid){

          $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();


        $apply = Jobapply::where('organisation_id',$id)->where('id',$applicationid)->first(); 

        return view('orgadmin.pages.recruit.single-application', compact('org','apply'));


    }

    public function application_status(request $request,$id , $applicationid){

        $apply = Jobapply::where('id',$applicationid)->first(); 
        $apply->status = $request->status;
        $apply->save();
        return redirect()->route('orgadmin.organisation.recruit.application',$id)->with('success','Successfully Update Status');



    }
}
