<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Productbuy;
use App\Models\Product;
use App\Models\Productbalence;

use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function preocesspaypal($slug,$productslug,$productbuyid)
    {


        $product = Product::where('slug',$productslug)->first();
        $org = Organisation::where('slug',$slug)->first();
        $productbuy = Productbuy::where('id',$productbuyid)->first();
        $balance = Productbalence::where('organisation_id',$org->id)->first();
        $total = $product->price * $productbuy->quantity;



         $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('sucessprocess',[$slug,$productslug,$productbuyid]),
                "cancel_url" => route('cancelprocess'),
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
    public function sucessprocess(Request $request , $slug,$productslug,$productbuyid)
    {


        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {


            return redirect()->route('org.product.product.wallet',[$slug,$productslug,$productbuyid]);

        } else {
            return redirect()
                ->route('index')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cancelprocess()
    {
        return redirect()
            ->route('payment.cancel')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
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
