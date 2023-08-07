@extends('layouts.app')

@section('content')
    <h1>Редактировать вид топлива</h1>
    <form action="{{ route('fuel-types.update', $fuelType->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $fuelType->name }}" required>
        </div>
        <div class="form-check">
            <input type="radio" name="status" id="active" class="form-check-input"
                   value="1" {{ $fuelType->status ? 'checked' : '' }}>
            <label for="active" class="form-check-label">Active</label>
        </div>
        <div class="form-check">
            <input type="radio" name="status" id="inactive" class="form-check-input"
                   value="0" {{ !$fuelType->status ? 'checked' : '' }}>
            <label for="inactive" class="form-check-label">Inactive</label>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Сохранить</button>
    </form>
@endsection
