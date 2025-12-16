<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewsLetterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:news_letters,email',
            'terms' => 'accepted',
        ]);

        NewsLetter::create([
            'email' => $validated['email'],
        ]);

        return redirect()->back()
            ->with('success', 'You have successfully subscribed to our newsletter!');
    }

    public function index()
    {

        $newsLetters = NewsLetter::all();

        return view('admin.dashboard', compact('newsLetters'));
    }

    public function destroy($id)
    {
        NewsLetter::findOrFail($id)->delete();

        return back()->with('success', 'Subscriber deleted successfully.');
    }
}
