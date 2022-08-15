@extends('layouts.app')

@section('title', 'Usuários')

@section('content')
    <h1>Listagem dos Usuários (<a href="{{ route('users.create') }}">+</a>)</h1>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} - {{ $user->email }} | <a href="{{ route('users.show', $user->id) }}">Detalhes</a></li>
        @endforeach
    </ul>
@endsection