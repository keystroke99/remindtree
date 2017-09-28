<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class DashboardController extends Controller
{
    public function index()	{

    	return view('dashboard');
    }


    // Contacts Section

    public function contacts()	{

    	$contacts = DB::table('contacts')
            ->join('groups', 'contacts.group_id', '=', 'groups.id')
            ->select('contacts.contact_name', 'contacts.contact_email', 'contacts.contact_mobile', 'groups.groupname', 'contacts.created_at','groups.status')
            ->get();

        // dd($contacts);
    	return view('contacts', compact('contacts'));
    }
}
