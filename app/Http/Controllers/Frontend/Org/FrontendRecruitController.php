<?php

namespace App\Http\Controllers\Frontend\Org;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Jobapply;
use App\Models\Recruit;
use Auth;

class FrontendRecruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $org = Organisation::where('slug',$slug)->first();
        $recruit = Recruit::where('organisation_id',$org->id)->get();
        return view('frontend.pages.org.recruit.index', compact('org','recruit'));




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
    public function store(Request $request,$slug , $jobslug)
    {


        $org = Organisation::where('slug',$slug)->first();
        $recruit = Recruit::where('slug',$jobslug)->first();



        $job = new Jobapply;
        $job->status = 1;
        $job->user_id = Auth::user()->id;
        $job->organisation_id = $org->id;
        $job->recruit_id = $recruit->id;
        $job->name = $request->name;
        $job->email = $request->email;
        $job->phone = $request->phone;
        $job->address = $request->address;
        $job->age = $request->age;
        $job->indivisual_or_group = $request->indivisual_or_group;

       

       if($request->hasFile('upload_resume')){
            $resume = $request->file('upload_resume');
            $resume_name = $slug.'-'.uniqid().'.'. $resume->getClientOriginalExtension();
            $request->upload_resume->move(public_path('/img/upload/org/resume/'), $resume_name);
            $job->upload_resume = $resume_name;
        }


        $job->about_yourself = $request->about_yourself;
        $job->arrival_date = $request->arrival_date;
        $job->arrival_time = $request->arrival_time;
        $job->depature_date = $request->depature_date;
        $job->depature_time = $request->depature_time;
        $job->require_pikup = $request->require_pikup;
        $job->equpment_or_resources = $request->equpment_or_resources;
        $job->requerments = $request->requerments;
        $job->comment = $request->comment;
        $job->question = $request->question;
        $job->save();



        return redirect()->route('payment.success');



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
