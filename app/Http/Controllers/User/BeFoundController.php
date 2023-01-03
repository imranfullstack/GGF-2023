<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Befound;
use App\Models\Befoundkeyskill;
use App\Models\Interest;
use App\Models\Befoundkeyinterest;
use App\Models\Keyskill;
use Auth;
use File;


class BeFoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $data = new Befound;
        $data->user_id = Auth::user()->id;
        $data->volunteer_oppertunity = $request->volunteer_oppertunity;
        $data->volunteer_oppertunity_status = $request->volunteer_oppertunity_status;
        $data->paid_work = $request->paid_work;
        $data->paid_work_status = $request->paid_work_status;
        $data->short_desc = $request->short_desc;
        $data->key_skill_status = $request->key_skill_status;
        $data->key_interests_status = $request->key_interests_status;
        if($request->resume){
            $resume = $request->file('resume');
            $pdf = Auth::user()->id.'-'.uniqid().'.'. $resume->getClientOriginalExtension();
            $request->resume->move(public_path('/img/upload/resume/'), $pdf);
            $data->resume = $pdf;
        }
        $data->resume_status = $request->resume_status;
        $data->location = $request->location;
        $data->availabitity = $request->availabitity;
        $data->auto_pause_date = $request->auto_pause_date;
        $data->auto_pause_date_status = $request->auto_pause_date_status;
        $data->status_control = $request->status_control;
        $data->save();

            // keyskill Store On DB     
            if($request->keyskill){
                foreach ($request->keyskill as $item) {
                    // Find Name Here
                    $name = Keyskill::where('id',$item)->first();
                    // Find Name Here end
                    $keyskill = new Befoundkeyskill;
                    $keyskill->name = $name->name;
                    $keyskill->keyskill_id = $item;
                    $keyskill->befound_id = $data->id;
                    $keyskill->user_id = Auth::user()->id;
                    $keyskill->save();
                }
            }
           // interest Store On DB            
            if($request->interests){
                foreach ($request->interests as $item) {
                    // Find Name Here
                    $name = Interest::where('id',$item)->first();
                    // Find Name Here End
                    $interests = new Befoundkeyinterest;
                    $interests->name = $name->name;
                    $interests->interest_id = $item;
                    $interests->befound_id = $data->id;
                    $interests->user_id = Auth::user()->id;
                    $interests->save();
                }
            }

            return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove_keyskill($id)
    {
        $keyskill = Befoundkeyskill::where('id',$id)->first();
        $keyskill->delete();
        return redirect()->back();
    }
    // remove Interest
    public function remove_interest ($id)
    {
        $interest = Befoundkeyinterest::where('id',$id)->first();
        $interest->delete();
        return redirect()->back();
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
        $data = Befound::where('id',$id)->first();
        $data->user_id = Auth::user()->id;
        $data->volunteer_oppertunity = $request->volunteer_oppertunity;
        $data->volunteer_oppertunity_status = $request->volunteer_oppertunity_status;
        $data->paid_work = $request->paid_work;
        $data->paid_work_status = $request->paid_work_status;
        $data->short_desc = $request->short_desc;
        $data->key_skill_status = $request->key_skill_status;
        $data->key_interests_status = $request->key_interests_status;
        if($request->resume){
        // Remove exists File
        if($data->resume){
            $pdf_path = public_path("/img/upload/resume/{$data->resume}");
            if (File::exists($pdf_path)) {
                unlink($pdf_path);
            }
        }
        // Remove exists File END
            $resume = $request->file('resume');
            $pdf = Auth::user()->id.'-'.uniqid().'.'. $resume->getClientOriginalExtension();
            $request->resume->move(public_path('/img/upload/resume/'), $pdf);
            $data->resume = $pdf;
        }
        $data->resume_status = $request->resume_status;
        $data->location = $request->location;
        $data->availabitity = $request->availabitity;
        $data->auto_pause_date = $request->auto_pause_date;
        $data->auto_pause_date_status = $request->auto_pause_date_status;
        $data->status_control = $request->status_control;
        $data->save();



            // keyskill Store On DB     
            if($request->keyskill){
                foreach ($request->keyskill as $item) {
                    // Find Name Here
                    $name = Keyskill::where('id',$item)->first();
                    // Find Name Here end
                    $keyskill = new Befoundkeyskill;
                    $keyskill->name = $name->name;
                    $keyskill->keyskill_id = $item;
                    $keyskill->befound_id = $data->id;
                    $keyskill->user_id = Auth::user()->id;
                    $keyskill->save();
                }
            }
           // interest Store On DB            
            if($request->interests){
                foreach ($request->interests as $item) {
                    // Find Name Here
                    $name = Interest::where('id',$item)->first();
                    // Find Name Here End
                    $interests = new Befoundkeyinterest;
                    $interests->name = $name->name;
                    $interests->interest_id = $item;
                    $interests->befound_id = $data->id;
                    $interests->user_id = Auth::user()->id;
                    $interests->save();
                }
            }


        return redirect()->back();
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
