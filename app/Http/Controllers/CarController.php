<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function addCar(Request $request)
    {
        $car = new Car;
        $car->owner_id = $request->owner_id;
        $car->manufacturer = $request->manufacturer;
        $car->model = $request->model;
        $car->vin = $request->vin;
        $car->year = $request->year;
        $car->fuel = $request->fuel;
        $car->engine_name = $request->engineName;
        $car->engine_value = $request->engineValue;
        $car->transmission = $request->transmission;
        $car->type_transmission = $request->typeTransmission;
        $car->more_ingo = $request->moreInfo;
        $car->save();

        return redirect()->route('cabinet');

    }
}
