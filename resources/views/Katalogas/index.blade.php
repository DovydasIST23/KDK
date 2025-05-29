@extends('layouts.LYkdk')

@section('title', 'Kontaktu sąrašas')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 style="color:cyan; font-size:200%">Kontaktu sąrašas</h2>
        <a style="color:blue;" href="{{ route('Katalogas.create') }}" class="btn btn-success">Pridėti kontakta</a><br>
        <a style="color:red;" href="{{ route('Katalogas.trashed') }}" class="btn btn-success">Rodyti pašalintus</a><br>
     
    </div><br>

    @if(session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @endif

    <table class="table table-striped" style="border-collapse: collapse; border: 2px solid black;">
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
                    <td style="border: 1px solid black; padding: 5px;">{{ $kdk->gamintojas_id}}</td> <!--{{ $kdk->gamintojas_id->Gname ?? '' }}-->
                    <td style="border: 1px solid black; padding: 5px;">{{ $kdk->tipas_id}}</td> <!--{{ $kdk->tipas_id->tipas ?? '' }}-->
                    <td style="border: 1px solid black; padding: 5px;">{{ $kdk->kiekis }}</td>
                    <td style="border: 1px solid black; padding: 5px;">{{ $kdk->aprasas }}</td>
                    <td style="border: 1px solid black; padding: 5px;">{{ $kdk->kaina }}</td>
                    <td> 
                    <a href="{{ route('Katalogas.edit', $kdk->id) }}" style="color:blue;" class="btn btn-primary btn-sm">✐Redaguoti✐</a>
                        <form action="{{ route('Katalogas.destroy', $kdk->id) }}" method="POST" class="d-inline"> 
                            @csrf
                            @method('DELETE')
                            <button style="color:orange;" type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Ištrinti</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $Katalogas->links() }} <!-- Pagination -->
@endsection