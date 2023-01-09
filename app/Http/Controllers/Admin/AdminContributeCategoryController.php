<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contributecat;
use Str;

class AdminContributeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contributecat = Contributecat::orderby('id','desc')->get();
        return view('admin.pages.contribute.category.index' , compact('contributecat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.contribute.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        $contributecat = new Contributecat;
        $contributecat->name = $request->name;
        $contributecat->slug = strtolower(str_replace(' ', '-', $request->name));
        $contributecat->save();
        return redirect()->route('admin.contribute.category.index')->with('success','Successfully Added New Category');
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
        $cat = Contributecat::find($id);
        return view('admin.pages.contribute.category.edit' , compact('cat'));
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
        $cat = Contributecat::find($id);
        $cat->name = $request->name;
        $cat->slug = Str::slug($request->name).'-'.uniqid();
        $cat->save();
        return redirect()->route('admin.contribute.category.index')->with('success','Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function active($id)
        {
            $cat = Contributecat::find($id);
            $cat->status = 1;
            $cat->save();
            return redirect()->back()->with('success','Successfully Active Status');
        }


        public function disable($id)
        {
            $cat = Contributecat::find($id);
            $cat->status = 0;
            $cat->save();
            return redirect()->back()->with('success','Successfully De-active Status');
        }
}
