@extends('layouts.app')

@section('content')
    <h1>Вид топлива</h1>
    <a href="{{ route('fuel-types.create') }}" class="btn btn-primary">Добавить топливо</a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Статус</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($fuelTypes as $fuelType)
            <tr>
                <td>{{ $fuelType->id }}</td>
                <td>{{ $fuelType->name }}</td>
                <td>{{ $fuelType->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('fuel-types.edit', $fuelType->id) }}"
                       class="btn btn-sm btn-primary">Редактировать</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row justify-content-md-center p-5">
        <div class="col-md-auto">
            {{ $fuelTypes->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
