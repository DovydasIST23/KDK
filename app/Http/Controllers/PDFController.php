<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $Katalogas = \App\Models\kdk::with(['kdk_gamintojas', 'kdk_tipas'])->get();
        $data = [
            'Katalogas' => $Katalogas,
        ];
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('Katalogas.pdf', $data);
        return $pdf->download('Detaliu_katalogas.pdf');
    }
}
