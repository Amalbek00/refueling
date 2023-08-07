@extends('layouts.app')

@section('content')
    <h1>Списать баланс</h1>
    <form action="{{ route('balances.withdraw', $balance->id) }}" method="POST">
        @csrf
        <h1>{{$client->name}}</h1>
        <h4>BIN: {{$client->bin}}</h4>
        <h4>Phone number: {{$client->phone}}</h4>
        <div class="form-group">
            <label for="fuel_type">Доступный вид топлива</label>
            <select name="fuel_type" id="fuel_type" class="form-control" required>
                @if ($fuelTypes->isEmpty())
                    <option disabled> Нет доступных видов топлива</option>
                @else
                    @foreach ($fuelTypes as $fuelType)
                        <option value="{{ $fuelType->id }}">{{ $fuelType->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="withdraw_amount">Снять баланс</label>
            <input type="text" name="withdraw_amount" id="withdraw_amount" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Списать</button>
    </form>
@endsection
