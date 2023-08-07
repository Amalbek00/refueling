<?php

namespace App\Http\Controllers;

use App\Services\LiterBalanceService;
use Illuminate\Http\Request;

class LiterBalanceController extends Controller
{
    protected $balanceService;

    public function __construct(LiterBalanceService $balanceService)
    {
        $this->balanceService = $balanceService;
    }

    public function index()
    {
        $balances = $this->balanceService->getAllBalances();
        return view('balances.index', compact('balances'));
    }

    public function create()
    {
        $clients = $this->balanceService->getAllClients();
        $fuelTypes = $this->balanceService->getActiveFuelTypes();
        return view('balances.create', compact('clients', 'fuelTypes'));
    }

    public function store(Request $request)
    {
        $this->balanceService->addBalance($request->all());
        return redirect()->route('balances.index');
    }


    public function recharge($id)
    {
        $balance = $this->balanceService->findBalanceById($id);
        $client = $balance->client;
        $fuelTypes = $this->balanceService->getActiveFuelTypes();

        if (request()->isMethod('post')) {
            $selectedFuelType = request('fuel_type');
            $rechargeAmount = request('recharge_amount');

            $this->balanceService->rechargeBalance($balance, $selectedFuelType, $rechargeAmount);

            return redirect()->route('balances.index')->with('success', 'Balance recharged successfully.');
        }

        return view('balances.recharge', compact('client', 'fuelTypes', 'balance'));
    }


    public function withdraw($id)
    {
        $balance = $this->balanceService->findBalanceById($id);
        $client = $balance->client;
        $fuelTypes = $this->balanceService->getActiveFuelTypes();

        if (request()->isMethod('post')) {
            $selectedFuelType = request('fuel_type');
            $withdrawAmount = request('withdraw_amount');

            $this->balanceService->withdrawBalance($balance, $selectedFuelType, $withdrawAmount);

            return redirect()->route('balances.index')->with('success', 'Balance withdrawn successfully.');
        }

        return view('balances.withdraw', compact('client', 'fuelTypes', 'balance'));
    }

}

