<?php
namespace App\Http\Controllers;
use App\Models\kdk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\kdk_gamintojas;
use App\Models\kdk_tipas;

class KDKController extends Controller
{
public function index()
{
$Katalogas = kdk::all();
$Katalogas = kdk::paginate(10); // Fetch 10 records per page
return view('Katalogas.index', compact('Katalogas'));

}

public function create()
{
    $gamintojai = kdk_gamintojas::all();
    $tipai = kdk_tipas::all();
    return view('Katalogas.create', compact('gamintojai', 'tipai'));
}

public function store(Request $request)
{
$request->validate([
        'name' => 'required|string',
        'kiekis' => 'required|integer',
        'aprasas' => 'required|string',
        'kaina' => 'required|numeric',
        'kdk_gamintojas_id' => 'required|exists:kdk_gamintojas,id', // Validate that the ID exists
        'kdk_tipas_id' => 'required|exists:kdk_tipas,id' // Validate that the ID exists
]);
kdk::create($request->only('name', 'kiekis', 'aprasas', 'kaina', 'kdk_gamintojas_id', 'kdk_tipas_id'));
return redirect()->route('Katalogas.index')->with('success', 'Detale prideta sėkmingai!');
}

public function edit($id)
{
    $kdk = Katalogas::findOrFail($id);
    $gamintojai = kdk_gamintojas::all();
    $tipai = kdk_tipas::all();
    return view('Katalogas.create', compact('kdk', 'gamintojai', 'tipai'));
}




}

