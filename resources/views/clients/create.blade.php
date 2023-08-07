@extends('layouts.app')

@section('content')
    <h1>Создать нового клиента</h1>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="bin">BIN</label>
            <input type="number" name="bin" id="bin" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
        <div class="form-check">
            <input type="radio" name="status" id="active" class="form-check-input" value="1">
            <label for="active" class="form-check-label">Active</label>
        </div>
        <div class="form-check">
            <input type="radio" name="status" id="inactive" class="form-check-input" value="0">
            <label for="inactive" class="form-check-label">Inactive</label>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Сохранить</button>
    </form>
@endsection
