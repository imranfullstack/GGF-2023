<?php

namespace App\Http\Controllers\Orgadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisation;
use App\Models\Post;
use App\Models\Posthavecategory;
use Auth;
use Image;
use File;
use Str;



class OrgadminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $post = Post::orderby('id','desc')->where('organisation_id',$id)->get();
        return view('orgadmin.pages.post.index', compact('org','post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function create($id)
    {
        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        return view('orgadmin.pages.post.create', compact('org'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {

        $validated = $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'image' => 'required',
        ]);        

        $post = new Post;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title).'-'.uniqid().'-'.$id;
        $post->user_id = Auth::user()->id;
        $post->status = 1;
        $post->organisation_id = $id;
        $post->short_desc = $request->short_desc;
          if($request->image){
        // -- Image UPload
            if($request->hasFile('image')){
                $image = $request->file('image');
                $img = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/post/'.$img));

                $post->image = $img;
            }
        }


        $post->save();




          // Project Category 
        foreach($request->postcat_id as $item){
            $cat = new Posthavecategory;
            $cat->organisation_id = $id;
            $cat->user_id = Auth::user()->id;
            $cat->post_id = $post->id;
            $cat->postcat_id = $item;
            $cat->save();
        }








        return redirect()->route('orgadmin.organisation.post.index',$id)->with('success','Successfully added a new post.');
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
    public function edit($id , $slug)
    {

        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $post = post::where('slug',$slug)->first();
        $cat = Posthavecategory::where('post_id',$post->id)->get();



        if($post->status == 4){
            return redirect()->back()->with('danger',"Sorry you don't have Access!");
        }else{            
            return view('orgadmin.pages.post.edit', compact('org','post','cat'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id , $slug)
    {

        $validated = $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
        ]);


        $org = Organisation::where('id',$id)->where('user_id',Auth::user()->id)->first();
        $post = post::where('slug',$slug)->first();
        $post->title = $request->title;
        $post->user_id = Auth::user()->id;
        $post->status = 1;
        $post->organisation_id = $id;
        $post->short_desc = $request->short_desc;
        $post->status = $request->status;
          if($request->image){


        $image_path = public_path("/img/upload/post/{$post->image}");
        if($image_path){
            if (File::exists($image_path)) {
                unlink($image_path);
            }
        }


        // -- Image UPload
            if($request->hasFile('image')){
                $image = $request->file('image');
                $img = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/post/'.$img));

                $post->image = $img;
            }
        }
        $post->save();
          // Project Category 
        if($request->postcat_id){
            foreach($request->postcat_id as $item){
                $cat = new Posthavecategory;
                $cat->organisation_id = $id;
                $cat->user_id = Auth::user()->id;
                $cat->post_id = $post->id;
                $cat->postcat_id = $item;
                $cat->save();
            }
        }
        return redirect()->route('orgadmin.organisation.post.index',$id)->with('success','Successfully updated');


    }
// cat_remove
    public function cat_remove(Request $request, $id , $catid)
    {
        $cat = Posthavecategory::where('id',$catid)->first();
        $cat->delete();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id,$slug)
    {

        $post = Post::where('slug',$slug)->first();
        // Remove Image From Directory
        if($post->status == 4){
            return redirect()->back()->with('danger',"Sorry you don't have Access!");       
        }else{
          $image_path = public_path("/img/upload/post/{$post->image}");
          if($image_path){
              if (File::exists($image_path)) {
                  unlink($image_path);
              }
          }
          // Remove Category For this Post
          $cat = Posthavecategory::where('post_id',$post->id)->get();

          if($cat){
              foreach($cat as $item){
                  $item = Posthavecategory::where('id',$item->id)->first();
                  $item->delete();
              }
          }  
          // Delete Main Post 
          $post->delete();
          return redirect()->back()->with('success','Successfully Deleted');
        }


    }
}
