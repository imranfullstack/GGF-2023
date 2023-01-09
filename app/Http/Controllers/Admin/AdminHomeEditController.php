<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homebanner;
use Auth;
use File;
use Image;

class AdminHomeEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Homebanner::first();
        return view('admin.pages.frontend.home.index' , compact('banner'));
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
    public function banner_store(Request $request)
    {

        $banner = Homebanner::first();
        $banner->user_id = Auth::user()->id;
        $banner->title = $request->title;
        $banner->desc = $request->desc;
        // Image Store
        if($request->banner_image){
            if($banner->banner_image){
                $image_path = public_path("/img/upload/home/banner/{$banner->banner_image}");
                if($image_path){
                    if (File::exists($image_path)) {
                        unlink($image_path);
                    }
                }
            }
             // -- Image UPload
            if($request->file('banner_image')){




                $image = $request->file('banner_image');
                $img = time().'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/home/banner/'.$img));
                $banner->banner_image = $img;
            }else{
                return 'Not Image';
            }


        }










        $banner->button_text = $request->button_text;
        $banner->banner_bg = $request->banner_bg;
        $banner->banner_btn_bg = $request->banner_btn_bg;
        $banner->save();
        return redirect()->back()->with('success','Successfully Update');
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
    public function destroy($id)
    {
        //
    }
}
