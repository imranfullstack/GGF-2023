<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projectcat;
use Str;

class AdminProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectcat = Projectcat::orderby('id','desc')->get();
        return view('admin.pages.project.category.index',compact('projectcat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.project.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        $projectcat = new Projectcat;
        $projectcat->name = $request->name;
        $projectcat->slug = Str::slug($request->name).'-'.uniqid();
        $projectcat->save();
        return redirect()->route('admin.project.category.index')->with('success','Successfully Added New Category');
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
        $projectcat = Projectcat::find($id);
        return view('admin.pages.project.category.edit', compact('projectcat'));
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
        $projectcat = Projectcat::find($id);
        $projectcat->name = $request->name;
        $projectcat->save();
        return redirect()->route('admin.project.category.index')->with('success','Successfully Updated  Category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
        $projectcat = Projectcat::find($id);
        $projectcat->status = 1;
        $projectcat->save();
        return redirect()->route('admin.project.category.index')->with('success','Successfully active category');
    }
    // deactive
    public function deactive($id)
    {
        $projectcat = Projectcat::find($id);
        $projectcat->status = 0;
        $projectcat->save();
        return redirect()->route('admin.project.category.index')->with('success','Successfully deactive category');
    }
}
