<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactBranch;
class ContactBranchController extends Controller
{
    //
    public function branch(Request $request){
        return view('contacts.branch');
    }
}
