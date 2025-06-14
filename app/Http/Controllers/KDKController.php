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
        $results = null;
        return view('Katalogas.index', compact('Katalogas', 'results'));
    }


    public function create()
    {
        $gamintojai = kdk_gamintojas::all();
        $tipai = kdk_tipas::all();
        return view('Katalogas.create', compact('gamintojai', 'tipai'));
    }


    public function store(Request $request)
    {
      /*
        // gaudo ERROR kai neprideda
        \Log::info('Store called', $request->all());
        try {
*/
            kdk::create($request->only('name', 'kiekis', 'aprasas', 'kaina', 'gamintojas_id', 'tipas_id'));
          /*
            \Log::info('Create success');
        } catch (\Exception $e) {
            \Log::error('Create failed: ' . $e->getMessage());
        }
           */ 
        return redirect()->route('Katalogas.index')->with('success', 'Detale prideta sėkmingai!');
    }


    public function edit($id)
    {
        $kdk = kdk::findOrFail($id); // Corrected
        $gamintojai = kdk_gamintojas::all();
        $tipai = kdk_tipas::all();
        return view('Katalogas.create', compact('kdk', 'gamintojai', 'tipai'));
    }

    public function destroy($id)
{
    $kdk = kdk::findOrFail($id);
    $kdk->delete();
    return redirect()->route('Katalogas.index')->with('success', 'Įrašas ištrintas!');
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
        return redirect()->route('Katalogas.trashed')->with('success', 'Detale atkurta!');
    }


    public function forceDelete($id)
    {
        kdk::withTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('Katalogas.trashed')->with('success', 'Detale visam laikui pašalinta.');
    }

    public function show($id)
    {
        // Find the KDK item by ID
        $kdk = kdk::findOrFail($id);
        // Return a view with the KDK item
        return view('Katalogas.show', compact('kdk'));

    }

    public function ataskaita()
    {
        // This method can be used to display a form for generating reports or PDFs
        $Katalogas = \App\Models\kdk::with(['kdk_gamintojas', 'kdk_tipas'])->get();
        $kdk_gamintojas = kdk_gamintojas::all();
        $kdk_tipas = kdk_tipas::all();
        return view('Katalogas.ataskaita', compact('Katalogas', 'kdk_gamintojas', 'kdk_tipas'));
    }

        public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Kdk::with(['kdk_gamintojas', 'kdk_tipas'])
            ->where('name', 'like', "%$query%")
            ->orWhereHas('kdk_gamintojas', function ($q) use ($query) {
                $q->where('Gname', 'like', "%$query%");
            })
            ->orWhereHas('kdk_tipas', function ($q) use ($query) {
                $q->where('tipas', 'like', "%$query%");
            })
            ->get();

            $Katalogas = kdk::with(['kdk_gamintojas', 'kdk_tipas'])->paginate(10);

        return view('Katalogas.search', compact('results',));
    }

}