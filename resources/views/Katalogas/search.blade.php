@extends('layouts.LYkdk')
@section('title', 'Kompiuteriniu detaliu paieska')

@section('content')
<div class="container" style="max-width:900px; margin:auto; text-align:center;">
    <h2 style="color:cyan; font-size:200%">Kompiuterinių detalių paieška</h2>
    <p style="color:blue; font-size:125%">Ieškokite kompiuterinių detalių pagal pavadinimą, gamintoją ar tipą.</p><br>
    <form action="{{ route('Katalogas.search') }}" method="GET" style="margin-bottom: 30px;">
        <input type="text" name="query" placeholder="Ieškoti..." value="{{ request('query') }}">
        <button type="submit">Ieškoti</button>
    </form>
@auth

    @if(request('query') && isset($results))

        @if($results->count())
            <table style="width:100%; border-collapse: collapse; margin: 0 auto; text-align: center; background-color: #f9f9f9; border: 2px solid black;">
                <thead>
                    <tr>
                        <th style="border: 1px solid black; padding: 5px;">ID</th>
                        <th style="border: 1px solid black; padding: 5px;">Pavadinimas</th>
                        <th style="border: 1px solid black; padding: 5px;">Gamintojas</th>
                        <th style="border: 1px solid black; padding: 5px;">Tipas</th>
                        <th style="border: 1px solid black; padding: 5px;">Kiekis</th>
                        <th style="border: 1px solid black; padding: 5px;">Aprašas</th>
                        <th style="border: 1px solid black; padding: 5px;">Kaina</th>
                        <th style="border: 1px solid black; padding: 5px;">Redaguoti/Ištrinti</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $kdk)
                        <tr>
                            <td style="border: 1px solid black; padding: 5px;">{{ $kdk->id }}</td>
                            <td style="border: 1px solid black; padding: 5px;">{{ $kdk->name }}</td>
                            <td style="border: 1px solid black; padding: 5px;">{{ $kdk->kdk_gamintojas ? $kdk->kdk_gamintojas->Gname : '' }}</td>
                            <td style="border: 1px solid black; padding: 5px;">{{ $kdk->kdk_tipas ? $kdk->kdk_tipas->tipas : '' }}</td>
                            <td style="border: 1px solid black; padding: 5px;">{{ $kdk->kiekis }}</td>
                            <td style="border: 1px solid black; padding: 5px;">{{ $kdk->aprasas }}</td>
                            <td style="border: 1px solid black; padding: 5px;">{{ $kdk->kaina }}</td>
                            <td style="border: 1px solid black; padding: 5px;"> 
                    <a href="{{ route('Katalogas.edit', $kdk->id) }}" style="color:blue;" class="btn btn-primary btn-sm">✐Redaguoti✐</a>
                        <form action="{{ route('Katalogas.destroy', $kdk->id) }}" method="POST" class="d-inline"> 
                            @csrf
                            @method('DELETE')
                            <button style="color:orange;" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Ar tikrai norite trinti?')">Ištrinti</button>
                        </form>
                    </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Nerasta rezultatų.</p>
        @endif
    @endif
</div>
@endauth
@endsection