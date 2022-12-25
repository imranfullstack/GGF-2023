<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Individualinfo;
use Auth;

class IndividualinfoController extends Controller
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

        $data = new Individualinfo;
        $data->user_id = Auth::user()->id;
        $data->email_status = $request->email_status;
        $data->surname = $request->surname;
        $data->surname_status = $request->surname_status;
        $data->phone = $request->phone;
        $data->phone_status = $request->phone_status;
        $data->ecommerce = $request->ecommerce;
        $data->ecommerce_status = $request->ecommerce_status;
        $data->other_info = $request->other_info;
        $data->other_info_status = $request->other_info_status;
        $data->save();
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
        $data = Individualinfo::where('id',$id)->first();
        $data->user_id = Auth::user()->id;
        $data->email_status = $request->email_status;
        $data->surname = $request->surname;
        $data->surname_status = $request->surname_status;
        $data->phone = $request->phone;
        $data->phone_status = $request->phone_status;
        $data->ecommerce = $request->ecommerce;
        $data->ecommerce_status = $request->ecommerce_status;
        $data->other_info = $request->other_info;
        $data->other_info_status = $request->other_info_status;
        $data->save();
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
