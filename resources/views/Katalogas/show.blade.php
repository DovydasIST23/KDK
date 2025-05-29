<!-- resources/views/kdk/show.blade.php -->
@extends('layouts.LYkdk')

@section('title', 'KDK Details')

@section('content')
    <div class="container">
        <h1>{{ $kdk->name }}</h1>
        <p><strong>Gamintojas:</strong> {{ $kdk->gamintojas_id }}</p>
        <p><strong>Tipas:</strong> {{ $kdk->tipas_id }}</p>
        <p><strong>Kiekis:</strong> {{ $kdk->kiekis }}</p>
        <p><strong>Aprasas:</strong> {{ $kdk->aprasas }}</p>
        <p><strong>Kaina:</strong> {{ $kdk->kaina }}</p>
        <a href="{{ route('Katalogas.index') }}" class="btn btn-primary">Grįžti į sąrašą</a>
    </div>
@endsection