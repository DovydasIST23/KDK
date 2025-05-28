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
            'gamintojas_id' => 'required|exists:kdk_gamintojas,id',
            'tipas_id' => 'required|exists:kdk_tipas,id'
        ]);


        kdk::create($request->only('name', 'kiekis', 'aprasas', 'kaina', 'gamintojas_id', 'tipas_id'));
        return redirect()->route('Katalogas.index')->with('success', 'Detale prideta sėkmingai!');
    }


    public function edit($id)
    {
        $kdk = kdk::findOrFail($id); // Corrected
        $gamintojai = kdk_gamintojas::all();
        $tipai = kdk_tipas::all();
        return view('Katalogas.create', compact('kdk', 'gamintojai', 'tipai'));
    }

    public function destroy(kdk $kdk)
    {
        $kdk->delete();
        return redirect()->route('Katalogas.index')->with('success', 'Contact deleted successfully!');
    }


    public function trashed()
    {
        // Retrieve only soft-deleted contacts with pagination
        $kdks = kdk::onlyTrashed()->paginate(20); // Corrected variable name
        return view('Katalogas.trashed', compact('kdks')); // Corrected variable name
    }


    public function restore($id)
    {
        kdk::withTrashed()->findOrFail($id)->restore();
        return redirect()->route('Katalogas.trashed')->with('success', 'Kontaktas atkurtas!');
    }


    public function forceDelete($id)
    {
        kdk::withTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('Katalogas.trashed')->with('success', 'Kontaktas visam laikui pašalintas.');
    }
}