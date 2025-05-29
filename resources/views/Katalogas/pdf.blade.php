<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studentų sąrašas</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Kompiuteriniu detaliu sarasas</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>gamintojas_id</th>
                <th>tipas_id</th>
                <th>kiekis</th>
                <th>aprasas</th>
                <th>kaina</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->gamintojas_id->Gname }}</td>
                    <td>{{ $student->tipas_id->tipas }}</td>
                    <td>{{ $student->kiekis }}</td>
                    <td>{{ $student->aprasas }}</td>
                    <td>{{ $student->kaina}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
