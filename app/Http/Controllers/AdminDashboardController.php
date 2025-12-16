<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\NewsLetter;
use Illuminate\Routing\Controller;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'contacts' => Contact::latest()->get(),
            'newsLetters' => NewsLetter::latest()->get(),
        ]);
    }
}
