@extends('layouts.LYkdk')

@section('title', 'Ištrinti kontaktai')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 style="font-size:200%">Ištrinti kontaktai</h2>
            <a href="{{ route('Katalogas.index') }}" class="btn btn-primary">Grįžti į studentų sąrašą</a>
        </div>

        @if (session('success'))
            <div style="color: green">{{ session('success') }}</div>
        @endif

        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th style="border: 1px solid black; padding: 5px;">ID</th>
                    <th style="border: 1px solid black; padding: 5px;">Pavadinimas</th>
                    <th style="border: 1px solid black; padding: 5px;">Gamintojas</th>
                    <th style="border: 1px solid black; padding: 5px;">Tipas</th>
                    <th style="border: 1px solid black; padding: 5px;">Kiekis</th>
                    <th style="border: 1px solid black; padding: 5px;">Aprasas</th>
                    <th style="border: 1px solid black; padding: 5px;">Kaina</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kdks as $kdk)
                    <tr>
                        <td style="border: 1px solid black; padding: 5px;">{{ $kdk->id }}</td>
                        <td style="border: 1px solid black; padding: 5px;">{{ $kdk->name }}</td>
                        <td style="border: 1px solid black; padding: 5px;">{{ $kdk->gamintojas_id }}</td>
                        <td style="border: 1px solid black; padding: 5px;">{{ $kdk->tipas_id }}</td>
                        <td style="border: 1px solid black; padding: 5px;">{{ $kdk->kiekis }}</td>
                        <td style="border: 1px solid black; padding: 5px;">{{ $kdk->aprasas }}</td>
                        <td style="border: 1px solid black; padding: 5px;">{{ $kdk->kaina }}</td>
                        <td style="border: 1px solid black; padding: 5px;">
                            <form action="{{ route('Katalogas.restore', $kdk->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Atkurti</button>
                            </form>

                            <form action="{{ route('Katalogas.forceDelete', $kdk->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Ar tikrai norite visiškai ištrinti?')">Ištrinti visam laikui</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $kdks->links() }} <!-- Pagination -->
    </div>
@endsection