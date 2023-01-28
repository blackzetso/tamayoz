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
        $contact->update($request->all());
        return "<script>
                    toastr.success('data has been updated successfully', 'success!');
                </script>";
    }

}
