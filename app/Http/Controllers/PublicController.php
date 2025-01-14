<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use Exception;
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

        try {
            Mail::to('noreply@mail.it')->send(new AdminMail($contactMail));
        } catch (Exception $e) {
            return redirect()->back()->with('emailError', 'Si è verificato un errore! Per favore reinserisci i dati');
        }

        return redirect()->back()->with('message', 'Dati inseriti con successo!');
    }
}
