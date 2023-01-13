<?php

namespace App\Http\Controllers\Orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Event;
use App\Models\Eventapply;
use App\Models\Eventhavecategory;
use Auth;
use File;
use Image;
use Str;

class OrgadminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index($id)
        {

            $event = Event::orderby('id','desc')->where('organisation_id',$id)->get();
            $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();

            return view('orgadmin.pages.event.index', compact('org','event'));    
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create($id)
        {

            $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
            return view('orgadmin.pages.event.create', compact('org'));    
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
            'event_name' => 'required',
            'short_desc' => 'required',
            'long_version' => 'required',
            'date' => 'required',
            'cost_status' => 'required',
            'contact_parson' => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            'location' => 'required',
            'what_to_bring' => 'required',
            'whats_needed' => 'required',
            'registration_form' => 'required',
        ]);





        // orgganisation
        $org = Organisation::where('id',$id)->first();
        $org->event = 1;
        $org->save(); //  -> Event Active Code



        $event = new Event;
        $event->event_name = $request->event_name;
        $event->slug = Str::slug($request->event_name).'-'.uniqid();
        $event->user_id = Auth::user()->id;
        $event->status = 1;
        $event->organisation_id = $id;
        $event->limit = $request->limit;
        $event->short_desc = $request->short_desc;
        $event->long_version = $request->long_version;
        $event->date = $request->date;
        $event->cost_status = $request->cost_status;
        $event->price = $request->price;
        $event->contact_parson = $request->contact_parson;
        $event->contact_email = $request->contact_email;
        $event->contact_phone = $request->contact_phone;
        $event->location = $request->location;
        $event->lat = $request->lat;
        $event->long = $request->long;
        $event->what_to_bring = $request->what_to_bring;
        $event->whats_needed = $request->whats_needed;
        $event->registration_form = $request->registration_form;

          if($request->image){
        // -- Image UPload
            if($request->hasFile('image')){
                $image = $request->file('image');
                $img = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/event/'.$img));
                $event->image = $img;
            }
        }




        $event->save();





if($request->eventcat_id){
           foreach($request->eventcat_id as $item){
            $cat = new Eventhavecategory;
            $cat->organisation_id = $id;
            $cat->user_id = Auth::user()->id;
            $cat->event_id = $event->id;
            $cat->eventcat_id = $item;
            $cat->save();
        }
 
}
              // Project Category 



        return redirect()->route('orgadmin.organisation.event.index',$id)->with('success',' Congratulation! You Just Successfully added a Event.');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function application($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first(); 

        $apply = Eventapply::orderby('id','desc')->where('organisation_id',$org->id)->get(); 
        return view('orgadmin.pages.event.application', compact('org','apply'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id , $eventid)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();


        $event = Event::where('organisation_id',$id)->where('id',$eventid)->first(); 



        if($event->status == 4){
            return redirect()->back()->with('danger',"Sorry you don't have Access!");
        }else{
               return view('orgadmin.pages.event.edit', compact('org','event'));        
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id , $eventid)
    {




        $validated = $request->validate([
            'event_name' => 'required',
            'short_desc' => 'required',
            'long_version' => 'required',
            'date' => 'required',
            'cost_status' => 'required',
            'contact_parson' => 'required',
            'contact_email' => 'required',
            'contact_phone' => 'required',
            'location' => 'required',
            'what_to_bring' => 'required',
            'whats_needed' => 'required',
            'registration_form' => 'required',
        ]);





        $event = Event::where('organisation_id',$id)->where('id',$eventid)->first(); 
        $event->event_name = $request->event_name;
        $event->user_id = Auth::user()->id;
        $event->status = $request->status;
        $event->organisation_id = $id;
        $event->limit = $request->limit;
        $event->short_desc = $request->short_desc;
        $event->long_version = $request->long_version;
        $event->date = $request->date;
        $event->cost_status = $request->cost_status;
        $event->price = $request->price;
        $event->contact_parson = $request->contact_parson;
        $event->contact_email = $request->contact_email;
        $event->contact_phone = $request->contact_phone;
        $event->location = $request->location;
        $event->what_to_bring = $request->what_to_bring;
        $event->whats_needed = $request->whats_needed;
        $event->registration_form = $request->registration_form;

          if($request->image){
            if($event->event){
                $image_path = public_path("img/upload/event/{$event->image}");
                if (File::exists($image_path)) {
                    unlink($image_path);
                }
            }
        // -- Image UPload
            if($request->hasFile('image')){
                $image = $request->file('image');
                $img = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/event/'.$img));
                $event->image = $img;
            }
        }
        $event->save();
        if($request->eventcat_id){
               foreach($request->eventcat_id as $item){
                    $cat = new Eventhavecategory;
                    $cat->organisation_id = $id;
                    $cat->user_id = Auth::user()->id;
                    $cat->event_id = $event->id;
                    $cat->eventcat_id = $item;
                    $cat->save();
                }
        }
              // Project Category 
        return redirect()->route('orgadmin.organisation.event.index',$id)->with('success',' Congratulation! You Just Successfully updated  Event.');


    }


    // remove Category  from Event

    public function remove_cat($id , $eventid , $catid){


        $category = Eventhavecategory::where('eventcat_id',$catid)->where('event_id',$eventid)->first();
        $category->delete();
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


        public function single_application($id,$applicationid)
    {

        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();

        $apply = Eventapply::where('organisation_id',$org->id)->where('id',$applicationid)->first(); 

        return view('orgadmin.pages.event.single-application', compact('org','apply'));
    }

 



    // Change Application Status 

    public function application_status(Request $request, $id,$applicationid){


        $apply = Eventapply::where('id',$applicationid)->first(); 
        $apply->status = $request->status;
        $apply->save();


        return redirect()->route('orgadmin.organisation.event.application',$id)->with('success',' Successfully Update Status.');
    }



}
