<?php

namespace App\Http\Controllers\Frontend\Org;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Project;
use App\Models\Projectapply;
use Auth;

class FrontendProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index($slug)
    {
        $org = Organisation::where('slug',$slug)->first();
        $orgid = $org->id;
        $project = Project::orderby('id','desc')->where('status',1)->where('organisation_id',$orgid)->get();

        return view('frontend.pages.org.project.index', compact('org','project'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single($slug , $projectslug)
    {


 
        $org = Organisation::where('slug',$slug)->first();
        $project = Project::orderby('id','desc')->where('organisation_id',$org->id)->where('slug',$projectslug)->first();
        return view('frontend.pages.org.project.single', compact('project','org'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function project_apply(Request $request,$slug , $postslug)
    {   

        $org = Organisation::where('slug',$slug)->first();
        $projectid = Project::where('slug',$postslug)->first();

        $project = new Projectapply;
        $project->status = 0;
        $project->user_id = Auth::user()->id;
        $project->project_id = $projectid->id;
        $project->organisation_id = $org->id;
        $project->name = $request->name;
        $project->email = $request->email;
        $project->address = $request->address;
        $project->number_of_people = $request->number_of_people;
        $project->number_of_adults = $request->number_of_adults;
        $project->children0_2 = $request->children0_2;
        $project->children2_12 = $request->children2_12;
        $project->bring_resources = $request->bring_resources;
        $project->Area_of_focus = $request->Area_of_focus;
        $project->being_involved = $request->being_involved;
        $project->special_requests = $request->special_requests;
        $project->requirements = $request->requirements;
        $project->comments = $request->comments;
        $project->question = $request->question;
        $project->save();
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
