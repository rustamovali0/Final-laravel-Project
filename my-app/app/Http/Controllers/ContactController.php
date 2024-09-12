<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'number' => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->back()->with('success', 'Mesajınız uğurla göndərildi!');
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('Panel.pages.contact.index', compact('contacts'));
    }
    public function destroy($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
            return redirect()->route('contact.index')->with('success', 'Mesaj uğurla silindi!');
        } else {
            return redirect()->route('contact.index')->with('error', 'Mesaj tapılmadı!');
        }
    }
}
