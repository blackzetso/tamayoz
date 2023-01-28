<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.account.edit',compact('user'));
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
    public function img(Request $request)
    {

        $fileExtention = $request->file('img')->guessExtension();
        $newFileName = time().'_'.rand(10000,100000).'.'.$fileExtention;
        $request->img->move(public_path('front/images/face'), $newFileName);

        $user = User::findOrFail(Auth::user()->id);
        $user->update([
            'img' => $newFileName
        ]);

        return "<script>
                    toastr.success('data has been updated successfully', 'success!');
                </script>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $user->update($request->all());

        return "<script>
                    toastr.success('data has been updated successfully', 'success!');
                </script>";
    }

    public function updatepass(Request $request) {

        $db_current     = Auth::user()->password;
        $form_current   = $request->current_pass;
        $new_pass       = $request->new_pass;
        $conf_pass      = $request->conf_pass;


            if(Hash::check($form_current,$db_current)){
                 if($new_pass == $conf_pass) {
                    $user = User::findOrFail(Auth::user()->id);
                    $user->update([
                        'password'  => Hash::make($new_pass),
                    ]);

                    return "<script>
                            toastr.success('password has been updated successfully', 'success!');
                        </script>";
                 }else{
                    return "<script>
                                toastr.error('كلمتا المرور غير متطابقتين', 'success!');
                            </script>";
                 }


            }else{
                return "<script>
                            toastr.error('كلمة المرور غير صحيحة', 'success!');
                        </script>";
            }

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
