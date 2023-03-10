<?php

namespace App\Http\Controllers\Frontend\Org;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Event;
use App\Models\Eventapply;
use App\Models\Eventbalance;
use Auth;
use Toastr;



class FrontendEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $org = Organisation::where('slug',$slug)->first();
        $event = Event::where('organisation_id',$org->id)->get();

        return view('frontend.pages.org.event.index', compact('org','event'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single($slug , $eventslug)
    {


        $org = Organisation::where('slug',$slug)->first();
        $event = Event::where('slug',$eventslug)->first();

        return view('frontend.pages.org.event.single', compact('org','event'));
    }

    public function apply(Request $request, $slug , $eventslug){


        $org = Organisation::where('slug',$slug)->first();
        $eventid = Event::where('slug',$eventslug)->first();

        $event = new Eventapply;
        $event->status = 0;
        $event->user_id = Auth::user()->id;
        $event->event_id = $eventid->id;
        $event->organisation_id = $org->id;
        $event->name = $request->name;
        $event->email = $request->email;
        $event->age = $request->age;
        $event->phone = $request->phone;
        $event->address = $request->address;
        $event->special_requests = $request->special_requests;
        $event->number_of_people = $request->number_of_people;
        $event->arrival_date = $request->arrival_date;
        $event->departure_date = $request->departure_date;
        $event->require_pickup = $request->require_pickup;
        $event->requirements = $request->requirements;
        $event->comments = $request->comments;
        $event->question = $request->question;
        $event->save();


            $eventbuy = $eventid->cost_status;
            $eventapplyid = $event->id;

            if($eventbuy == 1){
                return redirect()->route('event.payment.process',[$slug,$eventslug,$eventapplyid]);
            }else{
                return redirect()->route('org.event.wallet',[$slug,$eventslug,$eventapplyid]);
            }


        Toastr::success('successfully Submited the form.', 'Congrats! Success');
        return redirect()->back();



    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function event_wallet($slug,$eventslug,$eventapplyid)
    {

        $event = Event::where('slug',$eventslug)->first();
        $org = Organisation::where('slug',$slug)->first();
        $eventapply = Eventapply::where('id',$eventapplyid)->first();

        $balance = Eventbalance::where('organisation_id',$org->id)->first();

        if($eventapply->number_of_people >= $event->limit){
            return redirect()->back()->with('error','Sorry not enough sit on this event.');
        }else{            
            if($eventapply){
                $sitecount = $event->limit - $eventapply->number_of_people;
                $event->limit = $sitecount;
                $event->save();
            }
        }


        if($event->cost_status == 1){
            if($balance){
                $balance->event_bal =  $balance->event_bal + $event->price * $eventapply->number_of_people;
                $balance->organisation_id = $org->id;
                $balance->save();
                return redirect()->route('payment.success');

            }else{
                $addbal = new Eventbalance;
                $addbal->event_bal = $event->price * $eventapply->number_of_people;
                $addbal->organisation_id = $org->id;
                $addbal->save();
                return redirect()->route('payment.success');
            }

        }
                return redirect()->route('payment.success');
 


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
