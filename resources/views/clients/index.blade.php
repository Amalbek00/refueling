@extends('layouts.app')

@section('content')
    <h1>Корпоративные клиенты</h1>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">Добавить клиента</a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>BIN</th>
            <th>Телефон</th>
            <th>Статус</th>
            <th>Дата</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->bin }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->status ? 'Active' : 'Inactive' }}</td>
                <td>{{ $client->created_at}}</td>
                <td>
                    <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-primary">Редактировать</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row justify-content-md-center p-5">
        <div class="col-md-auto">
            {{ $clients->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
