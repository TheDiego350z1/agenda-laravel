<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        $UserId = Auth::id();

        $contacts = Contact::where('user_id', $UserId)->get();
        return view('contact.index', compact('contacts'));
    }
    
    public function create()
    {
        return view('contact.create');
    }
}
