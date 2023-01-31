<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Event;
use App\Models\Project;
use Carbon\Carbon;



class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Organisation Code Start
        $organisation = Organisation::orderby('created_at','desc')->where('status',1)->take(3)->get();
        // Organisation Code End        
        // Event Code
        $nextfewdays = Carbon::today()->addDay(365)->format('Y-m-d');
        $today = Carbon::today()->format('Y-m-d');
        $event = Event::orderby('date','asc')
                ->where('status',1)
                ->whereBetween('date', [$today, $nextfewdays])
                ->limit(5)
                ->get();
        // Event Code End
        $project = Project::orderby('id','desc')
                    ->where('status',1)
                    ->limit(3)
                    ->take(3)
                    ->get();
        


        return view('frontend.pages.index',compact('organisation','event','project'));
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
