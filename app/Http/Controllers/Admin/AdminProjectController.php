<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Projecthavecategory;
use App\Models\Projectapply;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::orderby('id','desc')->get();
        return view('admin.pages.project.index', compact('project'));
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
        $project = Project::find($id);
        $category = Projecthavecategory::where('project_id',$project->id)->get();
        return view('admin.pages.project.edit', compact('project','category'));
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
        $project = Project::find($id);
        $project->status = $request->status;
        $project->suspended_note = $request->suspended_note;
        $project->save();
        return redirect()->route('admin.project.index')->with('success','Successfully update status!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function application($id)
    {
        $application = Projectapply::where('project_id',$id)->get();
        return view('admin.pages.project.application.index', compact('application'));
    }
    // Single application
    public function single_application($id)
    {
        $apply = Projectapply::where('id',$id)->first();
        return view('admin.pages.project.application.single', compact('apply'));
    }
}
