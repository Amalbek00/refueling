<?php

namespace App\Http\Controllers;

use App\Models\FuelType;
use App\Services\FuelTypeService;
use Illuminate\Http\Request;

class FuelTypeController extends Controller
{
    protected $fuelTypeService;

    public function __construct(FuelTypeService $fuelTypeService)
    {
        $this->fuelTypeService = $fuelTypeService;
    }

    public function index()
    {
        $fuelTypes = $this->fuelTypeService->getAllFuelTypes();
        return view('fuel-types.index', compact('fuelTypes'));
    }

    public function create()
    {
        return view('fuel-types.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->fuelTypeService->createFuelType($data);
        return redirect()->route('fuel-types.index');
    }

    public function edit(FuelType $fuelType)
    {
        return view('fuel-types.edit', compact('fuelType'));
    }

    public function update(Request $request, FuelType $fuelType)
    {
        $data = $request->all();
        $this->fuelTypeService->updateFuelType($fuelType, $data);
        return redirect()->route('fuel-types.index');
    }
}
