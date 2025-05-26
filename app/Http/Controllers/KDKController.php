<?php
namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class KDKController extends Controller
{
public function index()
{
$contacts = Contact::all();
return view('kdk.index', compact('kdk'));
}
public function create()
{
return view('kdk.create');
}
public function store(Request $request)
{
$request->validate([
'name' => 'required|string',
'phone' => 'required|string',
'kiekis' => 'required|integer',
'aprasas' => 'required|string',
'kaina' => 'required|numeric'
]);
Contact::create($request->only('name', 'phone', 'kiekis', 'aprasas', 'kaina'));
return redirect()->route('kdk.index')->with('success', 'Detale prideta sėkmingai!');
}
}