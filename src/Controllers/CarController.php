<?php


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    
    public function store(Request $request)
    {
        // Validate the request...
        $car = new Car;
        $car->name = $request->name;
        $car->save();
    }
   
}
