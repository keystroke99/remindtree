<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Contact;


class DashboardController extends Controller
{
    public function index()	{

    	return view('dashboard');
    }


    // Contacts Section

    public function contacts()	{

    	$contacts = DB::table('contacts')
            ->join('groups', 'contacts.group_id', '=', 'groups.id')
            ->select('contacts.id', 'contacts.contact_name', 'contacts.contact_email', 'contacts.contact_mobile', 'groups.groupname', 'contacts.created_at','groups.status')
            ->get();

         // dd($contacts);
    	return view('contacts', compact('contacts'));
    }

    public function viewcontact($id) {
        $contact = DB::table('contacts')->where('id', $id)->first();

        return json_encode($contact);
    }

    public function updatecontact(Request $request, $id) {
            $contact = Contact::findOrFail($id);

            $contact->contact_name = $request->input('contact_name');
            $contact->contact_email = $request->input('contact_email');
            $contact->contact_mobile = $request->input('contact_mobile');

            $contact->save();

            return response()->json(['response' => 'Updated Successfully']); 
    }

    public function deletecontact($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
         return response()->json(['response' => 'Contact Deleted Successfully']);
    }

    public function multipledelete(Request $request){


        DB::table('contacts')->whereIn('id', $request->ids)->delete();

        return response()->json(['response' => 'Multiple Contacts Deleted Successfully']); 
    }
}
