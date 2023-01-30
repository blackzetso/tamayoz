<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit()
    {
        $contact_ar = Contact::findOrFail(1);
        $contact_en = Contact::findOrFail(2);
        return view('admin.contact.edit',compact('contact_ar','contact_en'));
    }

    public function update(Request $request)
    {

        if($request->lang == 1){
            $contact = Contact::findOrFail(1);
        }elseif($request->lang == 2){
            $contact = Contact::findOrFail(2);
        }
        $fileExtention = $request->file('img')->guessExtension();
        $newFileName = time().'_'.rand(10000,100000).'.'.$fileExtention;
        $request->img->move(public_path('front/images/'), $newFileName);

        $contact->update($request->all());
        $contact->img = $newFileName;
        $contact->save();
        return "<script>
                    toastr.success('data has been updated successfully', 'success!');
                </script>";
    }

}
