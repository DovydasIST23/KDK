@extends('layouts.LYkdk')

@section('content')
<div class="container">
    <h2>Pridėti kontaktą</h2><br>
    <form method="POST" action="{{ route('Katalogas.store') }}">
        @csrf
        <div>
            <label>Pavadinimas:</label>
            <input type="text" name="name" required>
        </div>
        
        <div>
    <label>Gamintojas:</label>
    <select name="kdk_gamintojas_id" required>
        <option value="">Pasirinkite gamintoją</option>
        @foreach($gamintojai as $gamintojas)
            <option value="{{ $gamintojas->id }}">{{ $gamintojas->Gname }}</option>
        @endforeach
    </select>
</div>
<div>
    <label>Tipas:</label>
    <select name="kdk_tipas_id" required>
        <option value="">Pasirinkite tipą</option>
        @foreach($tipai as $tipas)
            <option value="{{ $tipas->id }}">{{ $tipas->tipas }}</option>
        @endforeach
    </select>
</div>
        
        <div>
            <label>Kiekis:</label>
            <input type="text" name="kiekis" required>
        </div>
        <div>
            <label>Aprasas:</label>
            <input type="text" name="aprasas" required>
        </div>
        <div>
            <label>Kaina:</label>
            <input type="text" name="kaina" required>
        </div>
        <button type="submit">Išsaugoti</button>
    </form>
</div>
@endsection