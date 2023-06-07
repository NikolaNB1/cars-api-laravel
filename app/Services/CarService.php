<?php

namespace App\Services;

use App\Models\Car;
use Illuminate\Http\Request;


class CarService
{

    public function showCars()
    {
        $cars = Car::paginate(5);
        return $cars;
    }

    public function postCar(Request $request)
    {
        $request->validate([
            'brand' => 'required|min:2',
            'model' => 'required|min:2',
            'year' => 'required',
            'max_speed' => 'between:20,300',
            'is_automatic' => 'required',
            'engine' => 'required',
            'number_of_doors' => 'required|between:2,5'
        ]);

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

        $request->validate([
            'brand' => 'required|min:2',
            'model' => 'required|min:2',
            'year' => 'required',
            'max_speed' => 'between:20,300',
            'is_automatic' => 'required',
            'engine' => 'required',
            'number_of_doors' => 'required|between:2,5'
        ]);


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
