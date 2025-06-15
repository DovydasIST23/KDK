@extends('layouts.LYkdk')

@section('title', 'Kompiuteriniu detaliu katalogas')


@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3" style="text-align: center;">
        <h2 style="color:cyan; font-size:200%">Kompiuteriniu detaliu katalogas</h2><br>
        <a style="color:blue; border: 1px solid black; padding: 5px;" href="{{ route('Katalogas.create') }}" class="btn btn-success">Pridėti detale</a>&emsp;
        <a style="color:red; border: 1px solid black; padding: 5px;" href="{{ route('Katalogas.trashed') }}" class="btn btn-success">Rodyti pašalintus</a>&emsp;
        <a style="color:purple; border: 1px solid black; padding: 5px;" href="{{ route('Katalogas.search') }}" class="btn btn-success">Ieškoti</a>
     
    </div><br>


@auth
    @if(session('success'))
        <div style="color: green; padding: 5px;">{{ session('success') }}</div>
    @endif

    <table class="table table-striped" style="border-collapse: collapse; border: 2px solid black; margin-left: auto; margin-right: auto; width: 100%; text-align: center; background-color: #f9f9f9;">
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 5px;">ID</th>
                <th style="border: 1px solid black; padding: 5px;">Pavadinimas</th>
                <th style="border: 1px solid black; padding: 5px;">Gamintojas</th>
                <th style="border: 1px solid black; padding: 5px;">Tipas</th>
                <th style="border: 1px solid black; padding: 5px;">Kiekis</th>
                <th style="border: 1px solid black; padding: 5px;">Aprasas</th>
                <th style="border: 1px solid black; padding: 5px;">Kaina</th>
                <th style="border: 1px solid black; padding: 5px;">Redaguoti/Ištrinti</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Katalogas as $kdk)
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
@endauth

    {{ $Katalogas->links() }} <!-- Pagination -->
@endsection