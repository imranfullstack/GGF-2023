<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Serviceapply;
use App\Models\Service;
use App\Models\Servicebalance;

use Srmklive\PayPal\Services\PayPal as PayPalClient;

class ServicePaypalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function preocesspaypal($slug,$serviceslug,$serviceapplyid)
    {


        $service = Service::where('slug',$serviceslug)->first();
        $org = Organisation::where('slug',$slug)->first();
        $serviceapply = Serviceapply::where('id',$serviceapplyid)->first();
        $balance = Servicebalance::where('organisation_id',$org->id)->first();
    
        $total = $service->price * $serviceapply->number_people;

         $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('service.payment.success',[$slug,$serviceslug,$serviceapplyid]),
                "cancel_url" => route('service.payment.cancel'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "AUD",
                        "value" => "$total"
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('payment.error')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('payment.error')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sucessprocess(Request $request , $slug,$serviceslug,$serviceapplyid)
    {

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {


            return redirect()->route('org.service.wallet',[$slug,$serviceslug,$serviceapplyid]);

        } else {
            return redirect()
                ->route('payment.cancel')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }


    }


    public function cancelprocess()
    {
        return redirect()
            ->route('payment.cancel')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
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
