<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Contact;
use DB;
use Excel;
use Input;
use Auth;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()	{

    	return view('dashboard');
    }


    // Contacts Section

    // Display all contacts in the page

    public function contacts()	{

    	$contacts = DB::table('contacts')
            ->join('groups', 'contacts.group_id', '=', 'groups.id')
            ->select('contacts.id', 'contacts.contact_name', 'contacts.contact_email', 'contacts.contact_mobile', 'groups.groupname', 'contacts.created_at','groups.status')
            ->get();

         // dd($contacts);
    	return view('contacts', compact('contacts'));
    }

    // View Contact Info in Modal Window when clicked on Edit Option

    public function viewcontact($id) {
        $contact = DB::table('contacts')->where('id', $id)->first();

        return json_encode($contact);
    }

    // Edit / Update a Contact

    public function updatecontact(Request $request, $id) {
            $contact = Contact::findOrFail($id);

            $contact->contact_name = $request->input('contact_name');
            $contact->contact_email = $request->input('contact_email');
            $contact->contact_mobile = $request->input('contact_mobile');

            $contact->save();

            return response()->json(['response' => 'Updated Successfully']); 
    }

    // Delete a Contact

    public function deletecontact($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
         return response()->json(['response' => 'Contact Deleted Successfully']);
    }

    // Delete Multiple Contacts

    public function multipledelete(Request $request){


        DB::table('contacts')->whereIn('id', $request->ids)->delete();

        return response()->json(['response' => 'Multiple Contacts Deleted Successfully']); 
    }

    // Add Multiple Contacts

    public function addmultiplecontacts(Request $request) {
        $userInput = $request->all();

        $mobileNo = $request->mobile;
        $emails  = $request->email;
        $firstNames  = $request->firstname;
        $lastNames  = $request->lastname;

          for($i=0; $i < (count($mobileNo)); $i++) {
            $contact = new Contact;
          $contact->contact_name  = $mobileNo[$i];
          $contact->contact_email  = $emails[$i];
          $contact->contact_mobile  = $firstNames[$i].$lastNames[$i];

          $contact->user_id  = Auth::user()->id;

          $contact->save();
          }
        return back();

        // foreach( $userInput['mobile'] as $item){
        //   $contact = new Contact;
        //   $contact->contact_name  = $request->groupname;
        //   $contact->contact_email  = $request->groupname;
        //   $contact->contact_mobile  = $userInput['mobile'];

        //   $contact->userid  = Auth::user()->id;

        //   $group->save();
        // }        
       
    }

    // Import Contacts

    public function importcontacts(Request $request) {
        // dd($request);
        if($request->file('import_file'))
      {
                $path = $request->file('import_file')->getRealPath();
                $data = Excel::load($path, function($reader)
          {
                })->get();

          if(!empty($data) && $data->count())
          {
            foreach ($data->toArray() as $row)
            {

              if(!empty($row))
              {
                $dataArray[] =
                [
                  'contact_name' => $row['contact_name'],
                  'contact_email' => $row['contact_email'],
                  'contact_mobile' => $row['contact_mobile']
                ];
              }
          }
          if(!empty($dataArray))
          {
             Contact::insert($dataArray);
             return back();
           }
         }
       }
   }

   // Groups Section

   public function groups() {

    // $groups = Group::where('userid', Auth::user()->id)->get();
    
    $groups = DB::table('groups')
            ->join('contacts', 'groups.id', '=', 'contacts.group_id')
            ->select('groups.id', 'groups.groupname as groupname', DB::raw('COUNT(contacts.id) as contactscount'), 'groups.created_at')
            ->where('groups.userid', Auth::user()->id)
            ->groupBy('groups.id')
            ->get();

            // dd($groups);

    return view('groups', compact('groups'));
   }

  // Add a Group

   public function addGroup(Request $request) {


      $group = new Group;
      $group->groupname  = $request->groupname;
      $group->userid  = Auth::user()->id;

      $group->save();

      return response()->json(['response' => 'Group Added Successfully']); 
   }


   // View Contact Info in Modal Window when clicked on Edit Option

    public function viewgroup($id) {
        $group = DB::table('groups')->where('id', $id)->first();

        return json_encode($group);
    }

    // Edit / Update a Contact

    public function updategroup(Request $request, $id) {


            $group = Group::findOrFail($id);

            $group->groupname = $request->input('groupname');

            $group->save();

            return response()->json(['response' => 'Group Updated Successfully']); 
    }

    // Delete a Contact

    public function deletegroup($id){
        $group = Group::findOrFail($id);
        $group->delete();
         return response()->json(['response' => 'Group Deleted Successfully']);
    }
}
