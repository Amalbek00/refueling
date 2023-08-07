<?php

namespace App\Services;

use App\Models\FuelType;

class FuelTypeService
{
    public function getAllFuelTypes()
    {
        return FuelType::paginate(10);
    }
    public function createFuelType(array $data)
    {
        return FuelType::create($data);
    }

    public function updateFuelType(FuelType $fuelType, array $data)
    {
        $fuelType->update($data);
    }

}
