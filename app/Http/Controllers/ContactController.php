<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    //
    public function supply(Request $request){
        return view('contacts.supply');
    }

    public function contactuser(Request $request){
        return view('contactuser.owner');
    }
}
