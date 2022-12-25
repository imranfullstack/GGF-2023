<?php

namespace App\Http\Controllers\Orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Project;
use App\Models\Projecthavecategory;
use App\Models\Projectapply;
use Auth;
use File;
use Image;


class OrgadminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $project = Project::orderby('id','desc')->where('organisation_id',$id)->get();
        return view('orgadmin.pages.project.index', compact('org', 'project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        return view('orgadmin.pages.project.create', compact('org'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        return view('orgadmin.pages.project.view', compact('org'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {



        // orgganisation
        $org = Organisation::where('id',$id)->first();
        $org->project = 1;
        $org->save(); //  -> Event Active Code
        
   
          $validated = $request->validate([
                'name' => 'required',
                'short_desc' => 'required',
                'long_version' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'contact_person' => 'required',
                'contact_email' => 'required',
                'contact_phone' => 'required',
                'location' => 'required',
                'Whats_needed' => 'required',
                'registration_form' => 'required',
            ]);



        // return $request->projectcat_id;
        $project = new Project;
        $project->name = $request->name;
        $project->slug = strtolower(str_replace(' ', '-', $request->name));
        $project->status = 1;
        $project->user_id = Auth::user()->id;
        $project->organisation_id = $id;
        $project->short_desc = $request->short_desc;
        $project->long_version = $request->long_version;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->contact_person = $request->contact_person;
        $project->contact_email = $request->contact_email;
        $project->contact_phone = $request->contact_phone;
        $project->location = $request->location;
        $project->lat = $request->lat;
        $project->long = $request->long;
        $project->Whats_needed = $request->Whats_needed;
        $project->registration_form = $request->registration_form;
        // upload PDF FILE 
        if($request->image){
        // -- Image UPload
            if($request->hasFile('image')){
                $image = $request->file('image');
                $img = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();

                Image::make($image)->save(public_path('/img/upload/project/'.$img));

                $project->image = $img;
            }else{
                $project->image = "default.png";
            }
        }
        $project->save();
        // Project Category 
        foreach($request->projectcat_id as $item){
            $cat = new Projecthavecategory;
            $cat->organisation_id = $id;
            $cat->user_id = Auth::user()->id;
            $cat->project_id = $project->id;
            $cat->projectcat_id = $item;
            $cat->save();
        }
        return redirect()->route('orgadmin.organisation.project.index',$id)->with('success',' Congratulation! You Just Successfully added a Project.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function application($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();

        $apply = Projectapply::where('organisation_id',$id)->get();        
        return view('orgadmin.pages.project.application', compact('org','apply'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function single_application($id,$applicationid)
    {
        $org = Organisation::where('slug',$id)->where('user_id',Auth::user()->id)->first();

        $apply = Projectapply::where('organisation_id',$org->id)->where('id',$applicationid)->first(); 

        return view('orgadmin.pages.project.single-application', compact('org','apply'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id , $projectid)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();

        $project = Project::where('organisation_id',$id)->where('id',$projectid)->first(); 

        $category = Projecthavecategory::where('project_id',$project->id)->get();



        return view('orgadmin.pages.project.edit', compact('org','project','category'));

    }

    // Delete Category
    public function remove_cat($id , $projectid , $catid){


        $category = Projecthavecategory::where('projectcat_id',$catid)->where('project_id',$projectid)->first();
        $category->delete();
        return redirect()->back();
    }


    // update Project 
    public function update(Request $request, $id , $projectid)
    {


       

          $validated = $request->validate([
                'name' => 'required',
                'short_desc' => 'required',
                'long_version' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'contact_person' => 'required',
                'contact_email' => 'required',
                'contact_phone' => 'required',
                'location' => 'required',
                'Whats_needed' => 'required',
                'registration_form' => 'required',
            ]);



        // return $request->projectcat_id;
        $project = Project::where('id',$projectid)->first();
        $project->name = $request->name;
        if($request->name){
            $project->slug = strtolower(str_replace(' ', '-', $request->name)).'-'.uniqid().''.$id;
        }

        $project->status = $request->status;
        $project->user_id = Auth::user()->id;
        $project->organisation_id = $id;
        $project->short_desc = $request->short_desc;
        $project->long_version = $request->long_version;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->contact_person = $request->contact_person;
        $project->contact_email = $request->contact_email;
        $project->contact_phone = $request->contact_phone;
        $project->location = $request->location;
        $project->Whats_needed = $request->Whats_needed;
        $project->registration_form = $request->registration_form;
        // upload PDF FILE 
        if($request->image){

        if($project->image){
            $image_path = public_path("img/upload/project/{$project->image}");
            if (File::exists($image_path)) {
                //File::delete($image_path);
                unlink($image_path);
            }
        }





        // -- Image UPload
            if($request->hasFile('image')){
                $image = $request->file('image');
                $img = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();

                Image::make($image)->save(public_path('/img/upload/project/'.$img));

                $project->image = $img;
            }else{
                $project->image = "default.png";
            }
        }
        $project->save();
        // Project Category 

if($request->projectcat_id){

        foreach($request->projectcat_id as $item){
            $cat = new Projecthavecategory;
            $cat->organisation_id = $id;
            $cat->user_id = Auth::user()->id;
            $cat->project_id = $project->id;
            $cat->projectcat_id = $item;
            $cat->save();
        }
}


        return redirect()->route('orgadmin.organisation.project.index',$id)->with('success',' Congratulation! You Just Successfully Update  Project.');


    }







    // Change Application Status 

    public function application_status(Request $request, $id,$applicationid){


        $apply = Projectapply::where('id',$applicationid)->first(); 
        $apply->status = $request->status;
        $apply->save();


        return redirect()->route('orgadmin.organisation.project.application',$id)->with('success',' Successfully Update Status.');
    }


}
