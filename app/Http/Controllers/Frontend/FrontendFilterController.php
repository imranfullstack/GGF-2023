<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Event;
use App\Models\Organisation;
use App\Models\Eventhavecategory;
use DB;

class FrontendFilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.filter.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function org_filtter(Request $request)
    {

        // return $request->lookingfor;




if($request->product && !$request->service){
    // return 'product';
    $org = DB::table('organisations')
    ->join('orgfocusedhaves','organisations.id','=','orgfocusedhaves.organisation_id')
    ->join('orgtypehaves','organisations.id','=','orgtypehaves.organisation_id')
    ->join('orgprovidehaves','organisations.id','=','orgprovidehaves.organisation_id')
    ->join('producthavecategories','organisations.id','=','producthavecategories.organisation_id')
    ->select('organisations.*','orgfocusedhaves.focused_id','orgtypehaves.ogranisationtype_id' ,'orgprovidehaves.provide_id', 'producthavecategories.productcat_id' , 'organisations.org_name', DB::raw('sum(organisations.id) as sum'))
    ->where('status',1)
    ->wherein('focused_id',$request->focus)
    ->wherein('ogranisationtype_id',$request->structure)
    ->wherein('provide_id',$request->provide)
    ->wherein('productcat_id',$request->product)
    ->groupBy('organisations.id')
    ->get();
}elseif ($request->service && !$request->product) {
   
        $org = DB::table('organisations')
                ->join('orgfocusedhaves','organisations.id','=','orgfocusedhaves.organisation_id')
                ->join('orgtypehaves','organisations.id','=','orgtypehaves.organisation_id')
                ->join('orgprovidehaves','organisations.id','=','orgprovidehaves.organisation_id')
                ->join('servicehavecategories','organisations.id','=','servicehavecategories.organisation_id')
                ->select('organisations.*','orgfocusedhaves.focused_id','orgtypehaves.ogranisationtype_id' ,'orgprovidehaves.provide_id','servicehavecategories.servicecat_id' , 'organisations.org_name', DB::raw('sum(organisations.id) as sum'))
                ->where('status',1)
                ->wherein('focused_id',$request->focus)
                ->wherein('ogranisationtype_id',$request->structure)
                ->wherein('provide_id',$request->provide)
                ->wherein('servicecat_id',$request->service)
                ->groupBy('organisations.id')
                ->get();
}elseif ($request->service && $request->product) {

        $org = DB::table('organisations')
                ->join('orgfocusedhaves','organisations.id','=','orgfocusedhaves.organisation_id')
                ->join('orgtypehaves','organisations.id','=','orgtypehaves.organisation_id')
                ->join('orgprovidehaves','organisations.id','=','orgprovidehaves.organisation_id')
                ->join('producthavecategories','organisations.id','=','producthavecategories.organisation_id')
                ->join('servicehavecategories','organisations.id','=','servicehavecategories.organisation_id')
                ->select('organisations.*','orgfocusedhaves.focused_id','orgtypehaves.ogranisationtype_id' ,'orgprovidehaves.provide_id', 'producthavecategories.productcat_id','servicehavecategories.servicecat_id' , 'organisations.org_name', DB::raw('sum(organisations.id) as sum'))
                ->where('status',1)
                ->wherein('focused_id',$request->focus)
                ->wherein('ogranisationtype_id',$request->structure)
                ->wherein('provide_id',$request->provide)
                ->wherein('productcat_id',$request->product)
                ->wherein('servicecat_id',$request->service)
                ->groupBy('organisations.id')
                ->get();


}else{
            $org = DB::table('organisations')
                ->join('orgfocusedhaves','organisations.id','=','orgfocusedhaves.organisation_id')
                ->join('orgtypehaves','organisations.id','=','orgtypehaves.organisation_id')
                ->join('orgprovidehaves','organisations.id','=','orgprovidehaves.organisation_id')
                ->select('organisations.*','orgfocusedhaves.focused_id','orgtypehaves.ogranisationtype_id' ,'orgprovidehaves.provide_id',  'organisations.org_name', DB::raw('sum(organisations.id) as sum'))
                ->where('status',1)
                ->wherein('focused_id',$request->focus)
                ->wherein('ogranisationtype_id',$request->structure)
                ->wherein('provide_id',$request->provide)
                ->groupBy('organisations.id')
                ->get();
}



$sdata = $request->structure;

        return view('frontend.pages.filter.org', compact('org','sdata'));


 






    }
    public function project_filtter(Request $request)
    {
$project = Project::join('projecthavecategories',  'projects.id', '=', 'projecthavecategories.project_id')
    ->wherein('projectcat_id',$request->project)
    ->where('name', 'LIKE', '%'.$request->keyword.'%')
    ->get();



        return view('frontend.pages.filter.project', compact('project'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function event_filtter(Request $request)
    {

        $keyword = $request->keyword;
        $event = Event::join('eventhavecategories',  'events.id', '=', 'eventhavecategories.event_id')
            ->wherein('eventcat_id',$request->event)
            ->where('event_name', 'LIKE', '%'.$request->keyword.'%')
            ->get();
        // return view
        return view('frontend.pages.filter.event', compact('event','keyword'));
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
