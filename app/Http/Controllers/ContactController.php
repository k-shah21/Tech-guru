<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        Contact::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Your message has been submitted successfully!',
        ]);
    }

    public function index()
    {
        $contacts = Contact::all();

        return view('admin.dashboard', compact('contacts'));
    }

    public function delete(Contact $contact)
    {
        $contact->delete();

        return redirect()->back()->with('success', 'Contact deleted successfully!');
    }
}
