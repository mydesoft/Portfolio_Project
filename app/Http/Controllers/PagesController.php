<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Education;
use App\Experience;
use App\Portfolio;
use App\contact;

use App\Mail\ContactCreated;


class PagesController extends Controller

{
    
    // INDEX PAGE
    public function index(){
        $abouts = About::all();
        $educations = Education::orderBy('created_at', 'asc')->get(); 
        $experiences = Experience::orderBy('created_at', 'asc')->get();
        $portfolios = Portfolio::orderBy('created_at', 'asc')->get();
        
        return view('pages.index', compact('abouts', 'educations', 'experiences', 'portfolios'));
    }


    
    public function StoreContact(contact $contact){
    
        $contact_attributes = request()->validate([
            'name' =>'required', 
            'email' => 'required', 
            'subject' => 'required', 
            'message' => 'required'
            ]);
    
        contact::create($contact_attributes);
    
      
    
        return redirect('/');  
    }

 




    

    
}
