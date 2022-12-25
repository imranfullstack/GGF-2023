<?php

namespace App\Http\Controllers\Orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Befound;
use App\Models\User;
use DB;
use Auth;




class OrgadminSearchProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        return view('orgadmin.pages.searchprofile.index', compact('org'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
        {
            $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
            return view('orgadmin.pages.searchprofile.create', compact('org'));
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search_result(Request $request,$id)
    {
    $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();




$befound = User::orderby('id','desc')
            ->join('befounds', 'befounds.user_id', '=', 'users.id') 
            ->join('befoundkeyskills', 'befoundkeyskills.user_id', '=', 'users.id') 
            ->join('befoundkeyinterests', 'befoundkeyinterests.user_id', '=', 'users.id') 
            ->select('users.id','users.id', 'befoundkeyskills.keyskill_id', 'befoundkeyinterests.interest_id','befounds.paid_work','befounds.volunteer_oppertunity' )
           // ->orwhere('volunteer_oppertunity','=',$request->type)
           // ->where('paid_work','=',$request->paid_work)
           ->where('keyskill_id','=',$request->keyskill_id)
           ->where('interest_id','=',$request->interest_id)
           ->get();




        return view('orgadmin.pages.searchprofile.search-result', compact('org','befound'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function individual_profile($id , $userid)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();

        $user = User::where('id',$userid)->first();


        return view('orgadmin.pages.searchprofile.single-profile', compact('org','user'));
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
