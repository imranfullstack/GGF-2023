<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Eventcat;
use Str;


class AdminEventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $eventcet = Eventcat::orderby('id','desc')->get();
        return view('admin.pages.event.category.index', compact('eventcet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.event.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        $eventcat = new Eventcat;
        $eventcat->name = $request->name;
        $eventcat->slug = Str::slug($request->name).'-'.uniqid();
        $eventcat->save();
        return redirect()->route('admin.event.category.index')->with('success','Successfully Added New Category');
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

        $cat = Eventcat::find($id);
        return view('admin.pages.event.category.edit', compact('cat'));
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
        $eventcat = Eventcat::find($id);
        $eventcat->name = $request->name;
        $eventcat->slug = Str::slug($request->name).'-'.uniqid();
        $eventcat->save();
        return redirect()->route('admin.event.category.index')->with('success','Successfully Update Category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
        $eventcat = Eventcat::find($id);
        $eventcat->status = 1;
        $eventcat->save();
        return redirect()->back()->with('success','Successfully Active Status');
    }


    public function disable($id)
    {
        $eventcat = Eventcat::find($id);
        $eventcat->status = 0;
        $eventcat->save();
        return redirect()->back()->with('success','Successfully De-active Status');
    }
}
