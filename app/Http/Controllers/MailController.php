<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmissionMail;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $formData = $request->all();

        // Išsiunčiame el. laišką su formos duomenimis
        Mail::to('recipient@example.com')->send(new FormSubmissionMail($formData));

        return back()->with('success', 'Forma sėkmingai pateikta ir kopija išsiųsta el. paštu.');
    }
}
