@extends('layouts.app')

@section('content')
    <h1>Редактировать клиента</h1>
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $client->name }}" required>
        </div>
        <div class="form-group">
            <label for="bin">BIN</label>
            <input type="text" name="bin" id="bin" class="form-control" value="{{ $client->bin }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $client->phone }}" required>
        </div>
        <div class="form-check">
            <input type="radio" name="status" id="active" class="form-check-input" value="1" {{ $client->status ? 'checked' : '' }}>
            <label for="active" class="form-check-label">Active</label>
        </div>
        <div class="form-check">
            <input type="radio" name="status" id="inactive" class="form-check-input" value="0" {{ !$client->status ? 'checked' : '' }}>
            <label for="inactive" class="form-check-label">Inactive</label>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Сохранить</button>
    </form>
@endsection
