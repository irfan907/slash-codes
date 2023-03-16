<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Quote;
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

    public function saveFreeQuote(Request $request){
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'service'=>'required|max:255',
            'message'=>'required|max:500',
        ]);

        $free_quote=Quote::create($request->all());

        return redirect()->route('thank_you');
    }
}
