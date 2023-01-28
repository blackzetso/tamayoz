<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index',compact('testimonials'));
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
            //dd($newFileName);
            $request->img->move(public_path('front/images/face/'), $newFileName);

            Testimonial::create([
            'name'      => $request->name,
            'content'   => $request->content,
            'via'   => $request->via,
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
    public function img(Request $request,$id)
    {
        $fileExtention = $request->file('img')->guessExtension();
        $newFileName = time().'_'.rand(10000,100000).'.'.$fileExtention;
        $request->img->move(public_path('front/images/face'), $newFileName);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update([
            'img' => $newFileName
        ]);

        return "<script>
                    toastr.success('data has been updated successfully', 'success!');
                </script>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit',compact('testimonial'));
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
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update($request->all());

        return "<script>
                    toastr.success('data has been updated successfully', 'success!');
                </script>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrfail($id);
        $imgName = $testimonial->img;
        unlink(public_path('front/images/face/'.$imgName));
        $testimonial->delete();
        return "<script>
                    toastr.success('data has been deleted successfully', 'success!');
                    setTimeout(function(){
                        window.location.reload();
                    }, 2000);
                </script>";
    }
}
