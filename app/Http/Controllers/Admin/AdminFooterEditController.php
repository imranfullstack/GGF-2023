<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;
use Auth;
use Image;
use File;

class AdminFooterEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $footer = Footer::first();
        return view('admin.pages.frontend.footer.index',compact('footer'));
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
        $footer = Footer::first();
        $footer->user_id = Auth::user()->id;
        // $footer->footer_logo = $request->footer_logo;


           // Image Store
        if($request->footer_logo){
            if($footer->footer_logo){
                $image_path = public_path("/img/upload/footer/{$footer->footer_logo}");
                if($image_path){
                    if (File::exists($image_path)) {
                        unlink($image_path);
                    }
                }
            }
             // -- Image UPload
            if($request->file('footer_logo')){
                $image = $request->file('footer_logo');
                $img = time().'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/footer/'.$img));
                $footer->footer_logo = $img;
            }else{
                return 'Not Image';
            }


        }


        $footer->logo_url = $request->logo_url;
        $footer->desc = $request->desc;
        $footer->copyright_text = $request->copyright_text;
        $footer->bg_color = $request->bg_color;
        $footer->save();
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
