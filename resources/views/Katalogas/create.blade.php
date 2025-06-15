@extends('layouts.LYkdk')

@section('content')
<div class="container" style="text-align: center;">
    <h2 style="color:cyan; font-size:200%">
        {{ isset($kdk) ? 'Redaguoti detalę' : 'Pridėti detale į kataloga' }}
    </h2><br>
    <form 
        method="POST" 
        action="{{ isset($kdk) ? route('Katalogas.update', $kdk->id) : route('Katalogas.store') }}" 
        style="display: inline-block; text-align: left; margin: 0 auto;"
    >
        @csrf
        @if(isset($kdk))
            @method('PUT')
        @endif
        <div style="margin-bottom: 10px;">
            <label style="display: inline-block; width: 120px;">Pavadinimas:</label>
            <input type="text" name="name" required placeholder="Įveskite pavadinimą" size="30"
                value="{{ old('name', $kdk->name ?? '') }}">
        </div>
        <div style="margin-bottom: 10px;">
            <label style="display: inline-block; width: 120px;">Gamintojas:</label>
            <select name="gamintojas_id" required style="width: 298px">
                <option value="">Pasirinkite gamintoją</option>
                @foreach($gamintojai as $gamintojas)
                    <option value="{{ $gamintojas->id }}"
                        {{ (isset($kdk) && $kdk->gamintojas_id == $gamintojas->id) ? 'selected' : '' }}>
                        {{ $gamintojas->Gname }}
                    </option>
                @endforeach
            </select>
        </div>
        <div style="margin-bottom: 10px;">
            <label style="display: inline-block; width: 120px;">Tipas:</label>
            <select name="tipas_id" required style="width: 298px">
                <option value="">Pasirinkite tipą</option>
                @foreach($tipai as $tipas)
                    <option value="{{ $tipas->id }}"
                        {{ (isset($kdk) && $kdk->tipas_id == $tipas->id) ? 'selected' : '' }}>
                        {{ $tipas->tipas }}
                    </option>
                @endforeach
            </select>
        </div>
        <div style="margin-bottom: 10px;">
            <label style="display: inline-block; width: 120px;">Kiekis:</label>
            <input type="text" name="kiekis" required placeholder="Įveskite kiekį" size="30"
                value="{{ old('kiekis', $kdk->kiekis ?? '') }}">
        </div>
        <div style="margin-bottom: 10px;">
            <label style="display: inline-block; width: 120px;">Aprasas:</label>
            <input type="text" name="aprasas" required placeholder="Įveskite aprasą" size="30"
                value="{{ old('aprasas', $kdk->aprasas ?? '') }}">
        </div>
        <div style="margin-bottom: 10px;">
            <label style="display: inline-block; width: 120px;">Kaina:</label>
            <input type="text" name="kaina" required maxlength="1000000" placeholder="Įveskite kaina (max numeris 1.000.000)" size="30"
                value="{{ old('kaina', $kdk->kaina ?? '') }}">
        </div>
        <div style="text-align: center;">
            <button type="submit" style="color:lime; border: 1px solid black; padding: 5px; margin-top:10px;">
                {{ isset($kdk) ? 'Išsaugoti pakeitimus' : 'Išsaugoti' }}
            </button>
        </div>
    </form>
</div>
@endsection