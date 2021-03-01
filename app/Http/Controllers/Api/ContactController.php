<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index() {

        if (Auth::check() && Auth::user()->isAdmin()) {

            $contacts = Contact::orderBy('created_at', 'desc')
            ->get(); 
        }

        if(empty($contacts)) {
            abort(404);
        }
        
        return response()->json($contacts); 
   
    }
}
