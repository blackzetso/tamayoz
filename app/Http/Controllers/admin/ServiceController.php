<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =   Category::all();
        $services   =   Service::all();
        return view('admin.service.index',compact('services','categories'));
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
            $request->img->move(public_path('front/images/services/'), $newFileName);

            Service::create([
            'hint1'        => $request->hint1,
            'hint2'        => $request->hint2,
            'hint3'        => $request->hint3,
            'content'      => $request->desc,
            'min_price'    => $request->price,
            'max_price'    => $request->Discount,
            'date'         => $request->date,
            'category_id'  => $request->category,
            'img'          => $newFileName,
            'lang'      => $request->lang
            ]);

            return "<script>
                    toastr.success('data has been added successfully', 'success!');

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
        $categories = Category::all();
        $service    = Service::findOrfail($id);
        return view('admin.service.edit',compact('service','categories'));
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
            $request->img->move(public_path('front/images/services/'), $newFileName);

            $slide = Service::findOrFail($id);
            $slide->update([
                'hint1'        => $request->hint1,
                'hint2'        => $request->hint2,
                'hint3'        => $request->hint3,
                'content'      => $request->desc,
                'min_price'    => $request->min_price,
                'max_price'    => $request->max_price,
                'date'         => $request->date,
                'category_id'  => $request->category,
                'img'          => $newFileName,
                'lang'         => $request->lang
            ]);

            return redirect('/admin/services');
        }else{
            $slide = Service::findOrFail($id);
            $slide->update([
                'hint1'        => $request->hint1,
                'hint2'        => $request->hint2,
                'hint3'        => $request->hint3,
                'content'      => $request->desc,
                'min_price'    => $request->min_price,
                'max_price'    => $request->max_price,
                'date'         => $request->date,
                'category_id'  => $request->category,
                'lang'         => $request->lang
            ]);

            return redirect('/admin/services');
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
        $service = Service::findOrfail($id);
        $imgName = $service->img;
        unlink(public_path('front/images/services/'.$imgName));
        $service->delete();
        return "<script>
                    toastr.success('data has been deleted successfully', 'success!');
                    setTimeout(function(){
                        window.location.reload();
                    }, 2000);
                </script>";
    }
}
