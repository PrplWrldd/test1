<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodMenu; // Import the FoodMenu model

class foodMenuController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->only(['table_number', 'food_type']);

        // Create a new record in the food_menus table
        FoodMenu::create($data);

        // Redirect to the show method
        return redirect()->action([foodMenuController::class, 'show']);
    }

    public function show()
    {
        // Retrieve all records from the food_menus table
        $data = FoodMenu::all();

        // Display the data
        return view('showkitchen', ['data' => $data]);
    }
}