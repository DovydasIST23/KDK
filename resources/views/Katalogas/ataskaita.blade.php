@extends('layouts.LYkdk')
@section('title', 'Ataskaita')

@section('content')
<div class="container" style="max-width:900px; margin:auto; text-align:center;">
    <h2 style="color:cyan; font-size:200%">Detalių ataskaita</h2>

    
    <div>
        <h4 style="color:blue; font-size:150%">Bendra detalių kaina: 
            <span style="color:green;">
                @php
                    $totalPrice = $Katalogas->sum('kaina');
                    echo number_format($totalPrice, 2, ',', ' ') . ' €';
                @endphp
            </span>
        </h4>
    </div>
    <div>
        <h4 style="color:blue; font-size:150%">Bendras detalių kiekis: 
            <span style="color:green;">
                @php
                    $totalAmount = $Katalogas->sum('kiekis');
                    echo number_format($totalAmount, 0, ',', ' ') . ' vnt.';
                @endphp
            </span>
        </h4>
    </div><br>
    <!-- PDF Generation Button -->
    <a href="{{ url('/Katalogas/generate-pdf') }}" class="btn btn-primary" style="margin-bottom: 30px; border: 1px solid black; padding: 5px;">
        Generuoti PDF
    </a>
<!-- Chart.js Graph -->
    <div style="background:#b48cee; border-radius:8px; padding:20px; box-shadow:0 2px 8px #0001; margin-bottom:30px; margin-top:30px;">
        <h4>Detalių kainos ir kiekiai</h4>
        <canvas id="partsChart" height="120"></canvas>
    </div>
</div>

@php
    $labels = [];
    $prices = [];
    $amounts = [];
    foreach ($Katalogas as $kdk) {
        $labels[] = $kdk->name;
        $prices[] = $kdk->kaina;
        $amounts[] = $kdk->kiekis;
    }
@endphp

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById('partsChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [
                    {
                        label: 'Kaina (€)',
                        data: {!! json_encode($prices) !!},
                        backgroundColor: 'rgba(36, 226, 77, 0.7)'
                    },
                    {
                        label: 'Kiekis',
                        data: {!! json_encode($amounts) !!},
                        backgroundColor: 'rgba(231, 228, 62, 0.93)'
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    x: { stacked: false },
                    y: { beginAtZero: true }
                }
            }
        });
    });
</script>

@endsection
