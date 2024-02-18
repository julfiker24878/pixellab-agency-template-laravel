<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::User()->name;
        $user_count = User::all()->count();
        $contacts_count = Contact::all()->count();
        return view('admin', [
            'user' => $user,
            'user_count' => $user_count,
            'contacts_count' => $contacts_count,
        ]);
    }
}
