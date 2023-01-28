<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index',compact('portfolios','categories'));
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
            $request->img->move(public_path('front/images/folio/'), $newFileName);

            Portfolio::create([
            'title'        => $request->title,
            'subtitle'     => $request->subtitle,
            'content'      => $request->content,
            'client'       => $request->client,
            'url'          => $request->url,
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
        $portfolio  = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit',compact('portfolio','categories'));
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
            $request->img->move(public_path('front/images/folio/'), $newFileName);

            $slide = Portfolio::findOrFail($id);
            $slide->update([
                'title'     => $request->title,
                'subtitle'  => $request->subtitle,
                'content'   => $request->content,
                'client'    => $request->client,
                'url'       => $request->url,
                'date'      => $request->date,
                'category'  => $request->category,
                'img'       => $newFileName,
                'lang'      => $request->lang
            ]);

            return redirect('/admin/portfolios');
        }else{
            $slide = Portfolio::findOrFail($id);
            $slide->update([
                'title'     => $request->title,
                'subtitle'  => $request->subtitle,
                'content'   => $request->content,
                'client'    => $request->client,
                'url'       => $request->url,
                'date'      => $request->date,
                'category'  => $request->category,
                'lang'      => $request->lang
            ]);

            return redirect('/admin/portfolios');
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
        $portfolio = Portfolio::findOrfail($id);
        $imgName = $portfolio->img;
        unlink(public_path('front/images/folio/'.$imgName));
        $portfolio->delete();
        return "<script>
                    toastr.success('data has been deleted successfully', 'success!');
                    setTimeout(function(){
                        window.location.reload();
                    }, 2000);
                    </script>";
    }
}
