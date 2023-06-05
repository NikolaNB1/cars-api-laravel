<?php

namespace App\Http\Controllers;

use App\Services\CarService;
use Illuminate\Http\Request;

class CarsController extends Controller
{

    public CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car = $this->carService->showCars();

        return $car;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = $this->carService->postCar($request);

        return $car;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = $this->carService->showCar($id);
        return $car;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = $this->carService->editCar($request, $id);
        return $car;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = $this->carService->deleteCar($id);
        return $car;
    }
}
