<?php

namespace App\Http\Controllers\Orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Producthavecategory;
use App\Models\Product;
use App\Models\Productbuy;
use Auth;
use Image;
use File;


class OrgadminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();

        $product = Product::orderby('id','desc')->where('organisation_id',$id)->get();

        return view('orgadmin.pages.product.index', compact('org','product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function create($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        return view('orgadmin.pages.product.create', compact('org'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {




        // orgganisation
        $org = Organisation::where('id',$id)->first();
        $org->products = 1;
        $org->save(); //  -> Event Active Code
   


        $product = new Product;
        $product->name = $request->product_name;
        $product->slug = strtolower(str_replace(' ', '-', $request->product_name)) .'-'.uniqid().''.$id;
        $product->status = 1;
        $product->user_id = Auth::user()->id;
        $product->organisation_id = $id;
        $product->short_desc = $request->short_desc;
        $product->long_version = $request->long_version;
        $product->contact_person = $request->contact_parson;
        $product->contact_email = $request->contact_email;
        $product->contact_phone = $request->contact_no;
        $product->price = $request->price;
        $product->delivery = $request->delivery;
        $product->id_number = $request->id_no;
        $product->stock = $request->stock;
        $product->location = $request->location;
        // upload Product Image
        if($request->thumbnail){
        // -- Image UPload
            if($request->hasFile('thumbnail')){
                $image = $request->file('thumbnail');
                $img = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/product/'.$img));
                $product->thumbnail = $img;
            }
        }
        $product->save();



        // Project Category 
        foreach($request->productcat_id as $item){
            $cat = new Producthavecategory;
            $cat->organisation_id = $id;
            $cat->user_id = Auth::user()->id;
            $cat->product_id = $product->id;
            $cat->productcat_id = $item;
            $cat->save();
        }


        return redirect()->route('orgadmin.organisation.product.index',$id)->with('success','Successfully added a new product!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove_cat($id , $productid , $catid)
    {
        $category = Producthavecategory::where('productcat_id',$catid)->where('product_id',$productid)->first();
        $category->delete();
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id , $productid)
    {

        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();

        $product = Product::where('organisation_id',$id)->where('id',$productid)->first(); 

        return view('orgadmin.pages.product.edit', compact('org','product'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id , $productid)
    {


        // return $request->projectcat_id;
        $product = Product::where('id',$productid)->first();
        $product->name = $request->product_name;
        $product->status = $request->status;
        $product->user_id = Auth::user()->id;
        $product->organisation_id = $id;
        $product->short_desc = $request->short_desc;
        $product->long_version = $request->long_version;
        $product->contact_person = $request->contact_parson;
        $product->contact_email = $request->contact_email;
        $product->contact_phone = $request->contact_no;
        $product->price = $request->price;
        $product->delivery = $request->delivery;
        $product->id_number = $request->id_no;
        $product->stock = $request->stock;
        $product->location = $request->location;
        // upload Product Image
        if($request->image){



   // -- Remove Image From DB --
            if($product->thumbnail){
                    $image_path = public_path("img/upload/product/{$product->thumbnail}");
                if (File::exists($image_path)) {
                    unlink($image_path);
                }
            }


        // -- Image UPload
            if($request->hasFile('image')){
                $image = $request->file('image');
                $img = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/product/'.$img));
                $product->thumbnail = $img;
            }
        }
        $product->save();


if($request->productcat_id){

        // Project Category 
        foreach($request->productcat_id as $item){
            $cat = new Producthavecategory;
            $cat->organisation_id = $id;
            $cat->user_id = Auth::user()->id;
            $cat->product_id = $product->id;
            $cat->productcat_id = $item;
            $cat->save();
        }
}


        return redirect()->route('orgadmin.organisation.product.index',$id)->with('success','Successfully update Product!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  


    public function orders($id)
        {
            $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
            $orders = Productbuy::orderby('id','desc')->where('organisation_id',$id)->get();    

            return view('orgadmin.pages.product.orders', compact('org','orders'));
        }


    public function single_order($id, $orderid)
        {
                $org = Organisation::where('slug',$id)->where('user_id',Auth::user()->id)->first();

        $order = Productbuy::where('organisation_id',$org->id)->where('id',$orderid)->first(); 


        return view('orgadmin.pages.product.single-order', compact('org','order'));
        }



        // Change Order status
        public function order_status(Request $request, $id , $orderid){

        $order = Productbuy::where('id',$orderid)->first(); ;
        $order->status = $request->status;
        $order->save();
        return redirect()->route('orgadmin.organisation.product.orders',$id)->with('success','Successfully Change Status!');



        }


}
