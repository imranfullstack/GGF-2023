<?php

namespace App\Http\Controllers\orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Orgmanagebank;
use Auth;

class OrgadminBankManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();

        $bank = Orgmanagebank::where('organisation_id',$id)->get();


        return view('orgadmin.pages.bank.index', compact('org','bank'));
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
    public function store(Request $request,$id)
    {


        $validated = $request->validate([
            'bank_name' => 'required',
            'bank_account_name' => 'required',
            'bank_bsb_no' => 'required',
            'bank_ac_no' => 'required',
            'bank_b_pay_id' => 'required',
        ]);


        $bank = new Orgmanagebank;
        $bank->organisation_id = $id;
        $bank->user_id = Auth::user()->id;
        $bank->bank_name = $request->bank_name;
        $bank->bank_account_name = $request->bank_account_name;
        $bank->bank_bsb_no = $request->bank_bsb_no;
        $bank->bank_ac_no = $request->bank_ac_no;
        $bank->bank_b_pay_id = $request->bank_b_pay_id;
        $bank->save();
        return redirect()->back();
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
    public function destroy(Request $request , $id)
    {

        $bank = Orgmanagebank::where('id',$request->bankid)->first();
        $bank->delete();
        return redirect()->back();
    }
}
