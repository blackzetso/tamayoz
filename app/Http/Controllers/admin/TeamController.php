<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

use function Ramsey\Uuid\v1;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index',compact('teams'));
    }


    public function store(Request $request)
    {
        if ($request->hasFile('img')) {

            $fileExtention = $request->file('img')->guessExtension();
            $newFileName = time().'_'.rand(10000,100000).'.'.$fileExtention;
            //dd($newFileName);
            $request->img->move(public_path('front/images/team/'), $newFileName);

            Team::create([
            'name'      => $request->name,
            'job'       => $request->job,
            'caption'   => $request->caption,
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


    public function img(Request $request,$id)
    {
        $fileExtention = $request->file('img')->guessExtension();
        $newFileName = time().'_'.rand(10000,100000).'.'.$fileExtention;
        $request->img->move(public_path('front/images/team'), $newFileName);

        $about = Team::findOrFail($id);
        $about->update([
            'img' => $newFileName
        ]);

        return "<script>
                    toastr.success('data has been updated successfully', 'success!');
                </script>";
    }


    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.edit',compact('team'));
    }


    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);
        $team->update($request->all());

        return "<script>
                    toastr.success('data has been updated successfully', 'success!');
                </script>";
    }

    public function destroy($id)
    {
        $team = Team::findOrfail($id);
        $imgName = $team->img;
        unlink(public_path('front/images/team/'.$imgName));
        $team->delete();
        return "<script>
                    toastr.success('data has been deleted successfully', 'success!');
                    setTimeout(function(){
                        window.location.reload();
                    }, 2000);
                </script>";
    }
}
