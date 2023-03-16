<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function saveContact(Request $request){
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'subject'=>'required|max:255',
            'message'=>'required|max:500',
        ]);

        $contact=Contact::create($request->all());

        return redirect()->route('thank_you');
    }
}
