<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Postcat;
use Str;

class AdminPostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postcat = Postcat::orderby('id','desc')->get();
        return view('admin.pages.post.category.index', compact('postcat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.post.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postcat = new Postcat;
        $postcat->name = $request->name;
        $postcat->slug = Str::slug($request->name).'-'.uniqid().'-'.$id;
        $postcat->save();
        return redirect()->route('admin.post.category.index')->with('success','Successfully Added New Category');
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
        $postcat = Postcat::find($id);
        return view('admin.pages.post.category.edit' , compact('postcat'));
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
        $postcat = Postcat::find($id);
        $postcat->name = $request->name;
        $postcat->slug = Str::slug($request->name).'-'.uniqid().'-'.$id;
        $postcat->save();
        return redirect()->route('admin.post.category.index')->with('success','Successfully Added New Category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
        $cat = Postcat::find($id);
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
        $cat = Postcat::find($id);
        $cat->status = 0;
        $cat->save();
        return redirect()->back()->with('success','Successfully Updated Status');
    }
}
