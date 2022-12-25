<?php

namespace App\Http\Controllers\Orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicehavecategory;
use App\Models\Organisation;
use App\Models\Serviceapply;
use App\Models\Service;
use Auth;
use Image;
use File;



class OrgadminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index($id)
    {


        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $service = Service::orderby('id','desc')->where('organisation_id',$id)->get();
        return view('orgadmin.pages.service.index', compact('org','service'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create($id)
        {
            $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
            return view('orgadmin.pages.service.create', compact('org'));
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
            'name' => 'required',
            'servicecat_id' => 'required',
            'long_version' => 'required',
            'date' => 'required',
            'price' => 'required',
            'contact_parson' => 'required',
            'contact_email' => 'required',
            'contact_no' => 'required',
            'location' => 'required',
            'enquiry_form' => 'required',
        ]);




        $service = new Service;
        $service->name = $request->name;
        $service->slug = strtolower(str_replace(' ', '-', $request->name));
        $service->status = 1;
        $service->user_id = Auth::user()->id;
        $service->organisation_id = $id;
        $service->short_desc = $request->short_desc;
        $service->long_version = $request->long_version;
        $service->available_date = $request->date;
        $service->price = $request->price;
        $service->contact_person = $request->contact_parson;
        $service->contact_email = $request->contact_email;
        $service->contact_phone = $request->contact_no;
        $service->location = $request->location;
        $service->enquiry_form = $request->enquiry_form;
        // Image File
        if($request->image){
        // -- Image UPload
            if($request->hasFile('image')){
                $image = $request->file('image');
                $img = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/service/'.$img));
                $service->image = $img;
            }
        }
        $service->save();


        // orgganisation
        $org = Organisation::where('id',$id)->first();
        $org->our_service = 1;
        $org->save(); //  -> Event Active Code



        // Project Category 
        foreach($request->servicecat_id as $item){
            $cat = new Servicehavecategory;
            $cat->organisation_id = $id;
            $cat->user_id = Auth::user()->id;
            $cat->service_id = $service->id;
            $cat->servicecat_id = $item;
            $cat->save();
        }


        return redirect()->route('orgadmin.organisation.service.index',$id)->with('success','Successfully Added a service.');



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
    public function edit($id,$serviceid)
    {


        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();

        $service = Service::where('organisation_id',$id)->where('id',$serviceid)->first(); 

        return view('orgadmin.pages.service.edit', compact('org','service'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$id , $serviceid)
    {

        $validated = $request->validate([
            'name' => 'required',
            'long_version' => 'required',
            'date' => 'required',
            'price' => 'required',
            'contact_parson' => 'required',
            'contact_email' => 'required',
            'contact_no' => 'required',
            'location' => 'required',
            'enquiry_form' => 'required',
        ]);
        $service = Service::where('organisation_id',$id)->where('id',$serviceid)->first(); 
        $service->name = $request->name;
        $service->slug = strtolower(str_replace(' ', '-', $request->name));
        $service->status = $request->status;
        $service->user_id = Auth::user()->id;
        $service->organisation_id = $id;
        $service->short_desc = $request->short_desc;
        $service->long_version = $request->long_version;
        $service->available_date = $request->date;
        $service->price = $request->price;
        $service->contact_person = $request->contact_parson;
        $service->contact_email = $request->contact_email;
        $service->contact_phone = $request->contact_no;
        $service->location = $request->location;
        $service->enquiry_form = $request->enquiry_form;
        // Image File
        if($request->image){

        if($service->image){
            $image_path = public_path("img/upload/service/{$service->image}");
            if (File::exists($image_path)) {
                //File::delete($image_path);
                unlink($image_path);
            }
        }

        // -- Image UPload
            if($request->hasFile('image')){
                $image = $request->file('image');
                $img = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/service/'.$img));
                $service->image = $img;
            }
        }
        $service->save();



        // Project Category 
        if($request->servicecat_id){
            foreach($request->servicecat_id as $item){
                $cat = new Servicehavecategory;
                $cat->organisation_id = $id;
                $cat->user_id = Auth::user()->id;
                $cat->service_id = $service->id;
                $cat->servicecat_id = $item;
                $cat->save();
            }
        }
        return redirect()->route('orgadmin.organisation.service.index',$id)->with('success','Successfully Added a service.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Delete Category
    public function remove_cat($id , $servicetid , $catid){
        $category = Servicehavecategory::where('servicecat_id',$catid)->where('service_id',$servicetid)->first();
        $category->delete();
        return redirect()->back();
    }



    // Orser Pages
    public function orders($id){

      $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();

      $service = Serviceapply::orderby('id','desc')->where('organisation_id',$id)->get(); 

      return view('orgadmin.pages.service.orders', compact('org','service'));

    }


    public function single_order($id , $orderid)
   {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $order = Serviceapply::where('organisation_id',$id)->where('id',$orderid)->first(); 
        return view('orgadmin.pages.service.single-order', compact('org','order'));
  }
  // change Order Status For service
  public function order_status(Request $request,$id, $orderid){


        $order = Serviceapply::where('id',$orderid)->first();
        $order->status = $request->status;
        $order->save();
        return redirect()->route('orgadmin.organisation.service.orders',$id)->with('success','Successfully Change Status!');




  }
}
