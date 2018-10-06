<?php

namespace App\Http\Controllers;
use App\Supplier;
use Illuminate\Http\Request;

class ContactsupplierController extends Controller
{
    //

    public function suppliercontact()
    {
        
        
        $suppliers  = Supplier::all();

        return view('contacts.supply',compact('suppliers'));
    }
    public function suppliercontactstore(Request $request)
    {
       contacts::supply([
            
            'supplier_id'   => request('supplier_id'),
            'email'        => request('email'),
            'description'  => request('description')
        ]);
        
        return redirect()->route('contacts.supply')->withSuccess('one message send');
    }
}
