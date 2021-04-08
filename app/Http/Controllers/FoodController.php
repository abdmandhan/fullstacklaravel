<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    //
    public function show($id)
    {
        $data = Food::findOrFail($id);

        return view('pages.detail-food', ['data' => $data]);
    }
}
