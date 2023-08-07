<?php

namespace App\Services;

use App\Models\Client;
use App\Models\FuelType;
use App\Models\LiterBalance;

class LiterBalanceService
{
    public function getAllBalances()
    {
        return LiterBalance::with(['client', 'fuelType'])->paginate(10);
    }

    public function getAllClients()
    {
        return Client::all();
    }

    public function getActiveFuelTypes()
    {
        return FuelType::where('status', true)->get();
    }


    public function addBalance(array $data)
    {
        return LiterBalance::create($data);
    }

    public function findBalanceById($id)
    {
        return LiterBalance::findOrFail($id);
    }

    public function rechargeBalance(LiterBalance $balance, $selectedFuelType, $rechargeAmount)
    {
        $balance->fuel_type_id = $selectedFuelType;
        $balance->balance_volume += $rechargeAmount;
        $balance->save();
    }

    public function withdrawBalance(LiterBalance $balance, $selectedFuelType, $withdrawAmount)
    {
        $balance->fuel_type_id = $selectedFuelType;
        $balance->balance_volume -= $withdrawAmount;
        if ($balance->balance_volume <= 0) {
            $balance->balance_volume = 0;
        }
        $balance->save();
    }
}
