<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function edit()
    {
        $about_ar = About::findOrFail(1);
        $about_en = About::findOrFail(2);
        return view('admin.about.edit',compact('about_ar','about_en'));
    }

    public function img(Request $request){
        return $request;
    }

    public function update(Request $request)
    {
        if($request->lang == 1){
            $about = About::findOrFail(1);
            $content    =   $request->content;
        }else{
            $about = About::findOrFail(2);
            $content    =   $request->content2;
        }

        $about->update([
            'title'         => $request->title,
            'subtitle'      => $request->subtitle ,
            'content'       => $content,
            'button_name'   => $request->button,
            'url'           => $request->url
        ]);

        return "<script>
                    toastr.success('data has been updated successfully', 'success!');
                </script>";
    }

    public function updateImage(Request $request, $id)
    {

        $fileExtention = $request->file('img')->guessExtension();
        $newFileName = time().'_'.rand(10000,100000).'.'.$fileExtention;
        $request->img->move(public_path('front/images/'), $newFileName);
        $about = About::findOrFail($id);
        $about->update([
            'img' => $newFileName
        ]);

        return "<script>
                    toastr.success('data has been updated successfully', 'success!');
                </script>";
    }

//    public function destroy($id)
//    {
//        $about = About::findOrfail($id);
//        $imgName = $about->img;
//        unlink(public_path('front/images/'.$imgName));
//        $dell = About::where('id', $id)->where('img', 'like', 'imgName')->first();
//        $dell->update(['img' => null]);
//        return "<script>
//                    toastr.success('data has been deleted successfully', 'success!');
//                    setTimeout(function(){
//                        window.location.reload();
//                    }, 2000);
//                </script>";
//    }

}
