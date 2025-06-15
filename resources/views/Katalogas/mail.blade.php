@extends('layouts.LYkdk')

@section('content')
<div class="container" style="text-align: center;">
    <h2 style="color:cyan; font-size:200%">Siųsti ataskaitą el. paštu</h2><br>
    <form action="{{ route('Katalogas.mail') }}" method="POST" style="display: inline-block; text-align: left; margin: 0 auto;">
        @csrf
        <div style="margin-bottom: 10px;">
            <label style="display: inline-block; width: 120px;">Vardas:</label>
            <input type="text" name="name" required placeholder="Įveskite vardą" size="30">
        </div>
        <div style="margin-bottom: 10px;">
            <label style="display: inline-block; width: 120px;">El. paštas:</label>
            <input type="email" name="email" required placeholder="Įveskite el. paštą" size="30">
        </div>
        <div style="margin-bottom: 10px;">
            <label style="display: inline-block; width: 120px;">Žinutė:</label>
            <textarea name="message" required placeholder="Įveskite žinutę" style="width: 298px; height: 80px;"></textarea>
        </div>
        <div style="text-align: center;">
            <button type="submit" style="color:lime; border: 1px solid black; padding: 5px; margin-top:10px;">Siųsti</button>
        </div>
    </form>
</div>
@endsection
