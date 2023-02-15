<?php

namespace App\Http\Controllers\Frontend\Org;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Service;
use App\Models\Serviceapply;
use App\Models\Servicebalance;
use Auth;
use Toastr;


class FrontendServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $org = Organisation::where('slug',$slug)->first();
        $service = Service::where('organisation_id',$org->id)->get();

        return view('frontend.pages.org.service.index', compact('org','service'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apply_service(Request $request, $slug , $serviceslug)
    {


        $org = Organisation::where('slug',$slug)->first();
        $serviceid = Service::where('slug',$serviceslug)->first();
 
        $service = new Serviceapply;
        $service->status = 1;
        $service->user_id = Auth::user()->id;
        $service->service_id = $serviceid->id;
        $service->organisation_id = $org->id;
        $service->name = $request->name;
        $service->email = $request->email;
        $service->phone = $request->phone;
        $service->address = $request->address;
        $service->preferred_start_date = $request->preferred_start_date;
        $service->preferred_start_time = $request->preferred_start_time;
        $service->preferred_completion_date = $request->preferred_completion_date;
        $service->preferred_completion_time = $request->preferred_completion_time;
        $service->special_requests = $request->special_requests;
        $service->comments_question = $request->comments_question;
        $service->save();



                $servicepaid = 1;
                $serviceapplyid = $service->id;


                if($servicepaid == 1){
                    return redirect()->route('service.payment.process',[$slug,$serviceslug,$serviceapplyid]);
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
    public function service_wallet($slug,$serviceslug,$serviceapplyid)
    {





        $service = Service::where('slug',$serviceslug)->first();

        $org = Organisation::where('slug',$slug)->first();
        $serviceapply = Serviceapply::where('id',$serviceapplyid)->first();



        $balance = Servicebalance::where('organisation_id',$org->id)->first();

        if($balance){
            $balance->service_bal =  $balance->service_bal + $service->price * $serviceapply->number_people;
            $balance->organisation_id = $org->id;
            $balance->save();
            return redirect()->route('payment.success');

        }else{
            $addbal = new Servicebalance;
            $addbal->service_bal = $service->price * $serviceapply->number_people;
            $addbal->organisation_id = $org->id;
            $addbal->save();
            return redirect()->route('payment.success');
        }


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
