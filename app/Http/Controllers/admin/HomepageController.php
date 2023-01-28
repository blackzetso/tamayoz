<?php

namespace App\Http\Controllers\admin;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sliders = Home::all();
       return view('admin.sliders.index',compact('sliders'));
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

        if ($request->hasFile('img')) {

            $fileExtention = $request->file('img')->guessExtension();
            $newFileName = time().'_'.rand(10000,100000).'.'.$fileExtention;
            $request->img->move(public_path('front/images/bg/'), $newFileName);

            Home::create([
            'title'     => $request->title,
            'subtitle'  => $request->subtitle,
            'button'    => $request->button,
            'url'       => $request->url,
            'img'       => $newFileName,
            'lang'      => $request->lang
            ]);

            return "<script>
                    toastr.success('data has been added successfully', 'success!');
                    setTimeout(function(){
                        window.location.reload();
                    }, 2000);
                    </script>";

        }else{

        }
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
        $slide = Home::findOrFail($id);
        return view('admin.sliders.edit', compact('slide'));
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
        if ($request->hasFile('img')) {
            $fileExtention = $request->file('img')->guessExtension();
            $newFileName = time().'_'.rand(10000,100000).'.'.$fileExtention;
            $request->img->move(public_path('front/images/bg/'), $newFileName);

            $slide = Home::findOrFail($id);
            $slide->update([
                'title'     => $request->title,
                'subtitle'  => $request->subtitle,
                'button'    => $request->button,
                'url'       => $request->url,
                'img'       => $newFileName,
                'lang'      => $request->lang
            ]);

            return "<script>
                    toastr.success('data has been updated successfully', 'success!');
                </script>";
        }else{
            $slide = Home::findOrFail($id);
            $slide->update([
                'title'     => $request->title,
                'subtitle'  => $request->subtitle,
                'button'    => $request->button,
                'url'       => $request->url,
                'lang'      => $request->lang
            ]);

            return "<script>
                    toastr.success('data has been updated successfully', 'success!');
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

        $slide = Home::findOrfail($id);
        $imgName = $slide->img;
        unlink(public_path('front/images/bg/'.$imgName));
        $slide->delete();
        return "<script>
                    toastr.success('data has been deleted successfully', 'success!');
                    setTimeout(function(){
                        window.location.reload();
                    }, 2000);
                    </script>";
    }
}
