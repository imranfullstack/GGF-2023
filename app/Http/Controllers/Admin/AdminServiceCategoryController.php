<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicecat;
use App\Models\Service;

class AdminServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $servicecat = Servicecat::orderby('id','desc')->get();
        return view('admin.pages.service.category.index', compact('servicecat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.service.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        $servicecat = new Servicecat;
        $servicecat->name = $request->name;
        $servicecat->slug = strtolower(str_replace(' ', '-', $request->name));
        $servicecat->save();
        return redirect()->route('admin.service.category.index')->with('success','Successfully Added New Category');
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
        $servicecat = Servicecat::find($id);
        return view('admin.pages.service.category.edit', compact('servicecat'));
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
        $servicecat = Servicecat::find($id);
        $servicecat->name = $request->name;
        $servicecat->save();
        return redirect()->route('admin.service.category.index')->with('success','Successfully Update Category');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function active($id)
        {
            $cat = Servicecat::find($id);
            $cat->status = 1;
            $cat->save();
            return redirect()->back()->with('success','Successfully Updated Status');
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function deactive($id)
        {
            $cat = Servicecat::find($id);
            $cat->status = 0;
            $cat->save();
            return redirect()->back()->with('success','Successfully Updated Status');
    }
}
