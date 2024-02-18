<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function index(){
        $messages = Contact::all();
        return view('mailbox.index', [
            'messages' => $messages,
        ]);
    }

    public function insert(Request $request){
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Thanks for contacting us! We will be in touch with you shortly...');
    }

    public function delete($contact_id){
        Contact::find($contact_id)->delete();

        return back()->with('success', 'Mail deleted successfully!');
    }
}
