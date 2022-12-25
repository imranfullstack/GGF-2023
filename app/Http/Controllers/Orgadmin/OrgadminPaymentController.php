<?php

namespace App\Http\Controllers\Orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Orgmanagebank;
use App\Models\Productbalence;
use App\Models\Eventbalance;
use App\Models\Servicebalance;
use App\Models\Orgpayment;

use Auth;

class OrgadminPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $payment = Orgpayment::where('organisation_id',$id)->get();
        return view('orgadmin.pages.payment.index', compact('org','payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment_req($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $bank = Orgmanagebank::where('organisation_id',$id)->get();
        return view('orgadmin.pages.payment.payment-req', compact('org','bank'));
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
        'ammount' => 'required|max:255',
        'wallet' => 'required',
        'selectbank' => 'required',
  ]);


if($request->wallet == 1){
            // Product Balance
            $product_bal_row = Productbalence::where('organisation_id',$id)->first();
            if($product_bal_row->product_bal > $request->ammount){
                // Cut Balance From DB  
                $product_update_bal = $product_bal_row->product_bal - $request->ammount;
                $product_bal_row->product_bal = $product_update_bal;
                $product_bal_row->save();
                // Payment Store Database
                $payment = new Orgpayment;
                $payment->organisation_id = $id;
                $payment->user_id = Auth::user()->id;
                $payment->status = 0;
                $payment->ammount = $request->ammount;
                $payment->wallet = $request->wallet;
                $payment->bank = $request->selectbank;
                $payment->save();
                return redirect()->route('orgadmin.organisation.payment.index',$id);
            }else{
                return redirect()->back()->with('danger',"Sorry! you don't have Balance!.");
            }

}elseif($request->wallet == 2){
// Event Balance            
    $event_bal_row = Eventbalance::where('organisation_id',$id)->first();
    if($event_bal_row->event_bal > $request->ammount){
        // Cut Balance From DB  
        $event_update_bal = $event_bal_row->event_bal - $request->ammount;
        $event_bal_row->event_bal = $event_update_bal;
        $event_bal_row->save();
        // Payment Store Database
        $payment = new Orgpayment;
        $payment->organisation_id = $id;
        $payment->user_id = Auth::user()->id;
        $payment->status = 0;
        $payment->ammount = $request->ammount;
        $payment->wallet = $request->wallet;
        $payment->bank = $request->selectbank;
        $payment->save();
        return redirect()->route('orgadmin.organisation.payment.index',$id);
    }else{
        return redirect()->back()->with('danger',"Sorry! you don't have Balance!.");
    }
// End            



        }elseif($request->wallet == 3){
// Service Balance
$service_bal_row = Servicebalance::where('organisation_id',$id)->first();



// Event Balance            
    if($service_bal_row->service_bal > $request->ammount){
        // Cut Balance From DB  
        $service_update_bal = $service_bal_row->service_bal - $request->ammount;
        $service_bal_row->service_bal = $service_update_bal;
        $service_bal_row->save();
        // Payment Store Database
        $payment = new Orgpayment;
        $payment->organisation_id = $id;
        $payment->user_id = Auth::user()->id;
        $payment->status = 0;
        $payment->ammount = $request->ammount;
        $payment->wallet = $request->wallet;
        $payment->bank = $request->selectbank;
        $payment->save();
        return redirect()->route('orgadmin.organisation.payment.index',$id);
    }else{
        return redirect()->back()->with('danger',"Sorry! you don't have Balance!.");
    }
// End 


        }

        // $payment-> 
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
