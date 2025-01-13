<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function contactUs() {
        return view('contattaci');
    }

    public function submit(Request $request) {
        $contactMail = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'description' => $request->input('description'),
        ];

        Mail::to('noreply@mail.it')->send(new AdminMail($contactMail));

        return redirect()->back()->with('message', 'Dati inseriti con successo!');
    }
}
