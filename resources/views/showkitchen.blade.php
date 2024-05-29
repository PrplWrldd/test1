<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Table Number</th>
            <th>Food Type</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->table_number }}</td>
            <td>{{ $item->food_type }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>