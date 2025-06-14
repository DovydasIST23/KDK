@extends('layouts.LYkdk')

@section('title', 'Ištrinti kontaktai')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3" style="text-align: center;">
            <h2 style="color:cyan; font-size:200%">Istrintu detaliu sarasas</h2><br>
            <a href="{{ route('Katalogas.index') }}" style="color:blue;" class="btn btn-primary">Grįžti į detaliu kataloga</a><br>
        </div>
@auth

        @if (session('success'))
            <div style="color: green; padding: 5px; text-align: center;">{{ session('success') }}</div>
        @endif

        <table class="table table-striped table-bordered table-hover" style="border-collapse: collapse; border: 2px solid black;  margin-left: auto; margin-right: auto; width: 100%; text-align: center; background-color: #f9f9f9;">
            <thead class="thead-dark">
                <tr>
                    <th style="border: 1px solid black; padding: 5px;">ID</th>
                    <th style="border: 1px solid black; padding: 5px;">Pavadinimas</th>
                    <th style="border: 1px solid black; padding: 5px;">Gamintojas</th>
                    <th style="border: 1px solid black; padding: 5px;">Tipas</th>
                    <th style="border: 1px solid black; padding: 5px;">Kiekis</th>
                    <th style="border: 1px solid black; padding: 5px;">Aprasas</th>
                    <th style="border: 1px solid black; padding: 5px;">Kaina</th>
                    <th style="border: 1px solid black; padding: 5px;">Veiksmai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kdks as $kdk)
                    <tr>
                        <td style="border: 1px solid black; padding: 5px;">{{ $kdk->id }}</td>
                        <td style="border: 1px solid black; padding: 5px;">{{ $kdk->name }}</td>
                        <td style="border: 1px solid black; padding: 5px;">{{ $kdk->kdk_gamintojas ? $kdk->kdk_gamintojas->Gname : '' }}</td>
                    <td style="border: 1px solid black; padding: 5px;">{{ $kdk->kdk_tipas ? $kdk->kdk_tipas->tipas : '' }}</td>
                        <td style="border: 1px solid black; padding: 5px;">{{ $kdk->kiekis }}</td>
                        <td style="border: 1px solid black; padding: 5px;">{{ $kdk->aprasas }}</td>
                        <td style="border: 1px solid black; padding: 5px;">{{ $kdk->kaina }}</td>
                        <td style="border: 1px solid black; padding: 5px;">
                            <form action="{{ route('Katalogas.restore', $kdk->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" style="color:lime" class="btn btn-success btn-sm">Atkurti</button>
                            </form>

                            <form action="{{ route('Katalogas.forceDelete', $kdk->id) }}"  style="color:red" method="POST" class="d-inline">
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
@endauth

@endsection