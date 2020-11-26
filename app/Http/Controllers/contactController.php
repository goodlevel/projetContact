<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request; 
use App\Contact;
use Eloquent;



class contactController extends BaseController
{
    public function allContact(){

        $contacts = Contact::all();

        return view("listcontact", ["contacts"=>$contacts]);

    }

    public function addContact(){
 
        return view("addcontact");

    }
    
    public function saveContact(Request $request){

        $contact = new Contact;

        $contact::create($request->all());

        return redirect('/');

    }

    public function detailContact($contact_id){

        $contact = Contact::find($contact_id);

        return view("detailcontact", ["contact"=>$contact]);
    }

    public function updateContact(Request $request){

        $contact_id = $request->contact_id;
        $data = request()->except(['_token']);

        Contact::where('contact_id',$contact_id)->update($data);

        return redirect('/');
    }

    public function deleteContact($contact_id){

        Contact::where('contact_id',$contact_id)->delete();

        return redirect('/');

    }

}
