<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recruit;
use App\Models\Organisation;
use App\Models\Jobapply;

class AdminRecruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruit = Recruit::orderby('id','desc')->get();
        return view('admin.pages.recruit.index',compact('recruit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function application($id)
    {
        $apply = Jobapply::where('recruit_id',$id)->get();

        return view('admin.pages.recruit.application.index',compact('apply'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function single_application(Request $request,$id)
    {
        $apply = Jobapply::find($id);
        return view('admin.pages.recruit.application.single',compact('apply'));
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
        $recruit = Recruit::find($id);
        $org = Organisation::where('id',$recruit->organisation_id)->first();
        return view('admin.pages.recruit.edit',compact('recruit','org'));
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

        $recruit = Recruit::find($id);
        $recruit->status = $request->status;
        $recruit->suspended_note = $request->suspended_note;
        $recruit->save();
        return redirect()->route('admin.recruit.index')->with('success','Soccessfully updateded');
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
