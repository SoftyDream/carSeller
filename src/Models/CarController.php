<?php

namespace App;

use Eloquent;
use carDB;
//use App\Http\Controllers\Controller;

class CarController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate the request...
        $car = new Car;
        $car->name = $request->name;
        $car->save();
    }
}
