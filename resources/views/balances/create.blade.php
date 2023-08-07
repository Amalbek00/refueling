@extends('layouts.app')

@section('content')
    <h1>Add Balance</h1>
    <form action="{{ route('balances.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="client_id">Client</label>
            <select name="client_id" id="client_id" class="form-control" required>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fuel_type_id">Fuel Type</label>
            <select name="fuel_type_id" id="fuel_type_id" class="form-control">
                @if ($fuelTypes->isEmpty())
                    <option> Нет доступных видов топлива</option>
                @else
                    @foreach ($fuelTypes as $fuelType)
                        <option value="{{ $fuelType->id }}">{{ $fuelType->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="balance_volume">Balance Volume</label>
            <input type="number" name="balance_volume" id="balance_volume" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
@endsection
