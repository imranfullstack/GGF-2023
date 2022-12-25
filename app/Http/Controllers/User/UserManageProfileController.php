<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Image;
use Toastr;
use Hash;

class UserManageProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile_update(Request $request,$id)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);



        $user = User::where('id',$id)->first();
        $user->name = $request->name;
        $user->email = $request->email;




        if($request->pic){
        // -- Image UPload
            if($request->hasFile('pic')){
                $image = $request->file('pic');
                $img = Auth::user()->id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                Image::make($image)->save(public_path('/img/upload/pic/'.$img));
                $user->image = $img;
            }
        }



        $user->save();
        Toastr::success('successfully update Profile', 'Success');
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

public function password_update(request $request){

      $validated = $request->validate([
        'old_pass' => 'required',
        'new_pass' => 'required|min:8',
    ],
    [        
        'old_pass.required' => 'The old password field is required.',
        'new_pass.min' => 'The new password must be at least 8 characters.',
        'new_pass.required' => 'The New password field is required.'
    ]
    );


    $db_pass = Auth::user()->password;
    $old_pass = $request->old_pass;
    $new_pass = $request->new_pass;
    $confirm_pass = $request->confirm_pass;


    if(Hash::check($old_pass,$db_pass)){
        if($new_pass === $confirm_pass){

            $user = user::find(Auth::id());
            $user->password = Hash::make($new_pass);
            $user->save();
            Toastr::success('Password is Changed Successfully!', 'Success');
            return redirect()->back();

        }else{

            Toastr::error('New password & Confirm Password Not Same', 'Error!');
            return redirect()->back();
        }
        }else{
            Toastr::error('Your Password Not Match', 'Error!');
            return redirect()->back();
        }
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
