@extends('layouts.app')

@section('title', 'Listagem do usuário')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2 mt-4 mb-8">
        Listagem do usuário
    </h1>

    <ul>
        <li>Nome: <span class="font-semibold">{{ $user->name }}</span></li>
        <li>E-mail: <span class="font-semibold">{{ $user->email }}</span></li>
        <li>Registrado em: <span class="font-semibold">{{ $user->created_at }}</span></li>
        <li>Última edição em: <span class="font-semibold">{{ $user->updated_at }}</span></li>
    </ul>

    <div class="flex justify-start">
        <a href="{{ route('users.edit', $user->id) }}">
            <button class="bg-green-500 rounded-lg text-white px-4 py-2 mt-4 font-semibold">Editar</button>
        </a>

        <form action="{{ route('users.delete', $user->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit"
                class="bg-red-500 rounded-lg text-white px-4 py-2 mt-4 ml-2 font-semibold">Deletar</button>
        </form>
    </div>
@endsection
