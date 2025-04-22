<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Setup</title>
</head>
<body>
    <h1>Tabel Database wadweek7</h1>

    @foreach($data as $tableName => $rows)
        <h2>Tabel {{ $tableName }}</h2>
        
        @if($rows->count() > 0)
            <table border="1">
                <thead>
                    <tr>
                        @foreach($rows[0] as $column => $value)
                            <th>{{ $column }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($rows as $row)
                        <tr>
                            @foreach($row as $column => $value)
                                <td>{{ $value }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak ada data di tabel ini.</p>
        @endif
    @endforeach
</body>
</html>
