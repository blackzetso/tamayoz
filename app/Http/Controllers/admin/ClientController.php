<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return  view('admin.client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            $request->img->move(public_path('front/images/clients/'), $newFileName);

            Client::create([
            'name'      => $request->name,
            'caption'   => $request->caption,
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
        $client = Client::findOrFail($id);
        return view('admin.client.edit',compact('client'));
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
        
        $client = Client::findOrFail($id);
        $client->update($request->all());

        return "<script>
                    toastr.success('data has been updated successfully', 'success!');
                </script>";
    }

    public function img(Request $request,$id)
    {
        $fileExtention = $request->file('img')->guessExtension();
        $newFileName = time().'_'.rand(10000,100000).'.'.$fileExtention;
        $request->img->move(public_path('front/images/clients'), $newFileName);

        $about = Client::findOrFail($id);
        $about->update([
            'img' => $newFileName
        ]);

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
        $team = Client::findOrfail($id);
        $imgName = $team->img;
        unlink(public_path('front/images/clients/'.$imgName));
        $team->delete();
        return "<script>
                    toastr.success('data has been deleted successfully', 'success!');
                    setTimeout(function(){
                        window.location.reload();
                    }, 2000);
                </script>";
    }
}
