<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recruitcat;

class AdminRecruitCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $recruitcat = Recruitcat::orderby('id','desc')->get();
        return view('admin.pages.recruit.category.index', compact('recruitcat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.recruit.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        $recruitcat = new Recruitcat;
        $recruitcat->name = $request->name;
        $recruitcat->slug = strtolower(str_replace(' ', '-', $request->name));
        $recruitcat->save();
        return redirect()->route('admin.recruit.category.index')->with('success','Successfully Added New Category');
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
        $recruitcat = Recruitcat::find($id);
        return view('admin.pages.recruit.category.edit',compact('recruitcat'));
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
        $recruitcat = Recruitcat::find($id);
        $recruitcat->name = $request->name;
        $recruitcat->save();
        return redirect()->route('admin.recruit.category.index')->with('success','Successfully update Category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
        public function active($id)
        {
            $cat = Recruitcat::find($id);
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
            $cat = Recruitcat::find($id);
            $cat->status = 0;
            $cat->save();
            return redirect()->back()->with('success','Successfully Updated Status');
        }
}
