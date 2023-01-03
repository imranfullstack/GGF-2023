<?php

namespace App\Http\Controllers\Frontend\Org;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Productbuy;
use App\Models\Product;
use App\Models\Productbalence;
use Auth;
use Toastr;
 
class FrontendProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $org = Organisation::where('slug',$slug)->first();

        $product = Product::orderby('id','desc')->where('status',1)->where('organisation_id',$org->id)->get();

        return view('frontend.pages.org.product.index', compact('org','product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single($slug,$productslug)
    {


        $org = Organisation::where('slug',$slug)->first();
        $product = Product::where('slug',$productslug)->first();
        return view('frontend.pages.org.product.single', compact('org','product'));


    }


    public function buy(Request $request, $slug , $productslug){

        $org = Organisation::where('slug',$slug)->first();
        $mainproduct = Product::where('slug',$productslug)->first();

        if($mainproduct->stock >= $request->quantity){
                $product = new Productbuy;
                $product->user_id = Auth::user()->id;
                $product->status = 0;
                $product->product_id = $mainproduct->id;
                $product->organisation_id = $org->id;
                $product->name = $request->name;
                $product->email = $request->email;
                $product->phone = $request->phone;
                $product->quantity = $request->quantity;
                $product->delivery_address = $request->delivery_address;
                $product->special_request = $request->special_request;
                $product->requirement = $request->requirement;
                $product->comment = $request->comment;
                $product->question = $request->question;
                $product->save();
                 
                    
                $paidproduct = 1;
                $productbuyid = $product->id;
                if($paidproduct == 1){
                    return redirect()->route('preocesspaypal',[$slug,$productslug,$productbuyid]);
                    
                }                    

                return redirect()->back();
        }else{



        Toastr::error("Sorry Don't We have Limited Product", 'Product Limit');


            return redirect()->back();
        }


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
    public function product_wallet($slug,$productslug,$productbuyid)
    {

        $product = Product::where('slug',$productslug)->first();
        $org = Organisation::where('slug',$slug)->first();
        $productbuy = Productbuy::where('id',$productbuyid)->first();
        $balance = Productbalence::where('organisation_id',$org->id)->first();
        // Product ( - ) From DB
        if($productbuy->quantity){
            $product->stock = $product->stock - $productbuy->quantity;
            $product->save();
        }

            

        if($balance){
            $balance->product_bal =  $balance->product_bal + $product->price * $productbuy->quantity;
            $balance->organisation_id = $org->id;
            $balance->save();
            return redirect()->route('payment.success');

        }else{
            $addbal = new Productbalence;
            $addbal->product_bal = $product->price * $productbuy->quantity;
            $addbal->organisation_id = $org->id;
            $addbal->save();
            return redirect()->route('payment.success');
        }




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
