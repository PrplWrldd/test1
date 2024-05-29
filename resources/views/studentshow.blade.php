<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Matric No</th>
            <th>Address</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->matric_no}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>