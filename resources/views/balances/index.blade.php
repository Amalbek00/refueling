@extends('layouts.app')

@section('content')
    <h1>Управление литровым балансом</h1>
    <a href="{{ route('balances.create') }}" class="btn btn-primary">Добавить Баланс</a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th>Клиент</th>
            <th>Вид топлива</th>
            <th>Объем баланса</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($balances as $balance)
            <tr>
                <td>{{ $balance->client->name }}</td>
                <td>{{ $balance->fuelType->name }}</td>
                <td>{{ $balance->balance_volume }}</td>
                <td>
                    <a href="{{ route('balances.recharge', $balance->id) }}" class="btn btn-sm btn-primary">Пополнить</a> |
                    <a href="{{ route('balances.withdraw', $balance->id) }}" class="btn btn-sm btn-primary">Списать</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row justify-content-md-center p-5">
        <div class="col-md-auto">
            {{ $balances->links('pagination::bootstrap-4') }}
        </div>
    </div>@endsection
