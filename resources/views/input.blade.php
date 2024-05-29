<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/store">
        @csrf
        <div class="form-group">
            <label for="table_number">Table Number:</label>
            <input type="number" id="table_number" name="table_number" required>
        </div>
        <div class="form-group">
            <label for="food_type">Food Type:</label>
            <select id="food_type" name="food_type" required>
                <option value="">Select...</option>
                <option value="pizza">Pizza</option>
                <option value="pasta">Pasta</option>
                <option value="salad">Salad</option>
                <option value="air">air</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>