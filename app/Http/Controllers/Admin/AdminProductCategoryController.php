<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productcat;
use Str;

class AdminProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productcat = Productcat::orderby('id','desc')->get();
        return view('admin.pages.product.category.index', compact('productcat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.product.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        $productcat = new Productcat;
        $productcat->name = $request->name;
        $productcat->slug = Str::slug($request->name).'-'.uniqid();
        $productcat->save();
        return redirect()->route('admin.product.category.index')->with('success','Successfully Added New Category');
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
        $productcat = Productcat::find($id);
        return view('admin.pages.product.category.edit', compact('productcat'));
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
        $productcat = Productcat::find($id);
        $productcat->name = $request->name;
        $productcat->slug = Str::slug($request->name).'-'.uniqid();
        $productcat->save();
        return redirect()->route('admin.product.category.index')->with('success','Successfully Updated Category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function active($id)
        {
            $cat = Productcat::find($id);
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
            $cat = Productcat::find($id);
            $cat->status = 0;
            $cat->save();
            return redirect()->back()->with('success','Successfully Updated Status');
        }
    
}
