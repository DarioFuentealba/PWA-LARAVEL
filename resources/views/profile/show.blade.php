@extends('layout')

@section('content')

    <h1 class="text-2xl font-bold mb-4">Mi Perfil</h1>
    <ul>
        <p><strong>Nombre:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
    </ul>

@endsection
