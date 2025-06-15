<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmissionMail;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\kdk;

class MailController extends Controller
{
    public function submit(Request $request)
    {
        $formData = $request->all();

         $Katalogas = kdk::with(['kdk_gamintojas', 'kdk_tipas'])->get();
        $pdf = Pdf::loadView('Katalogas.pdf', ['Katalogas' => $Katalogas])->output();

        // Išsiunčiame el. laišką su formos duomenimis
        Mail::to('recipient@example.com')->send(new FormSubmissionMail($formData)->attachData($pdf, 'detaliu_katalogas.pdf', ['mime' => 'application/pdf',]));

        return back()->with('success', 'Forma sėkmingai pateikta ir kopija išsiųsta el. paštu.');
    }
}
