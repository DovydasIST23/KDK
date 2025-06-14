<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompiuterinių detalių sąrašas</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Kompiuterinių detalių sąrašas</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Pavadinimas</th>
                <th>Gamintojas</th>
                <th>Tipas</th>
                <th>Kiekis</th>
                <th>Aprašas</th>
                <th>Kaina</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Katalogas as $kdk)
                <tr>
                    <td>{{ $kdk->id }}</td>
                    <td>{{ $kdk->name }}</td>
                    <td>{{ $kdk->kdk_gamintojas ? $kdk->kdk_gamintojas->Gname : '' }}</td>
                    <td>{{ $kdk->kdk_tipas ? $kdk->kdk_tipas->tipas : '' }}</td>
                    <td>{{ $kdk->kiekis }}</td>
                    <td>{{ $kdk->aprasas }}</td>
                    <td>{{ $kdk->kaina }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
