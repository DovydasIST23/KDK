@extends('layouts.LYkdk')

@section('title', 'Ištrinti kontaktai')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Ištrinti kontaktai</h2>
            <a href="{{ route('Katalogas.index') }}" class="btn btn-primary">Grįžti į studentų sąrašą</a>
        </div>

        @if (session('success'))
            <div style="color: green">{{ session('success') }}</div>
        @endif

        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Pavadinimas</th>
                    <th>Gamintojas</th>
                    <th>Tipas</th>
                    <th>Kiekis</th>
                    <th>Aprasas</th>
                    <th>Kaina</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kdks as $kdk)
                    <tr>
                        <td>{{ $kdk->id }}</td>
                        <td>{{ $kdk->name }}</td>
                        <td>{{ $kdk->gamintojas_id }}</td>
                        <td>{{ $kdk->tipas_id }}</td>
                        <td>{{ $kdk->kiekis }}</td>
                        <td>{{ $kdk->aprasas }}</td>
                        <td>{{ $kdk->kaina }}</td>
                        <td>
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