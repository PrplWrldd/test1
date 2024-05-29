<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 py-8 px-4">
    <table class="w-full text-left bg-white rounded-lg overflow-hidden shadow-lg">
        <thead class="bg-gray-200">
        <tr>
            <th class="py-4 px-6">Table Number</th>
            <th class="py-4 px-6">Food Type</th>
            <th class="py-4 px-6">Amount</th> <!-- New column -->
        </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr class="{{ $loop->iteration % 2 === 0 ? 'bg-gray-100' : '' }}">
                <td class="py-4 px-6">{{ $item->table_number }}</td>
                <td class="py-4 px-6">{{ implode(', ', $item->food_type) }}</td> <!-- Display food_type as a comma-separated string -->
                <td class="py-4 px-6">{{ $item->amount }}</td> <!-- Display amount -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>