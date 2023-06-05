<?php

namespace App\Services;

use App\Models\Car;
use Illuminate\Http\Request;


class CarService
{

    public function showCars()
    {
        $cars = Car::get();
        return $cars;
    }

    public function postCar(Request $request)
    {
        $car = new Car();

        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->max_speed = $request->max_speed;
        $car->is_automatic = $request->is_automatic;
        $car->engine = $request->engine;
        $car->number_of_doors = $request->number_of_doors;
        $car->save();

        return $car;
    }

    public function showCar($id)
    {
        $car = Car::find($id);
        return $car;
    }

    public function editCar(Request $request, string $id)
    {
        $car = Car::find($id);
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->max_speed = $request->max_speed;
        $car->is_automatic = $request->is_automatic;
        $car->engine = $request->engine;
        $car->number_of_doors = $request->number_of_doors;
        $car->save();

        return $car;
    }

    public function deleteCar($id)
    {
        Car::destroy($id);
    }
}
