@extends('layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')
    <div class="grid grid-cols-2 justify-center mt-4 mb-8">
        <div class="place-self-start">
            <span class="text-2xl font-semibold leading-tigh py-2">
                Listagem dos usuários
            </span>

            <a href="{{ route('users.create') }}"
                class="bg-blue-500 rounded-full text-white px-4 py-2 ml-4 font-semibold">Novo Usuário</a>

        </div>
        <div class="place-self-end">
            <form action="{{ route('users.index') }}" method="GET">
                <input type="text" name="search" placeholder="Pesquisar"
                    class="border-slate-200 placeholder-slate-400 px-4 py-2 align-middle rounded-lg border border-slate-200">
                <button type="submit"
                    class="bg-cyan-500 rounded-lg text-white px-4 py-2 align-middle font-semibold">Pesquisar</button>
            </form>
        </div>
    </div>
    <table class="table-auto w-full shadow-lg rounded-lg">
        <thead>
            <tr class="h-12 text-xs font-medium">
                <td class="bg-gray-100 text-left px-8 py-4">NOME</td>
                <td class="bg-gray-100 text-left px-8 py-4">E-MAIL</td>
                <td class="bg-gray-100 text-left px-8 py-4">EDITAR</td>
                <td class="bg-gray-100 text-left px-8 py-4">DETALHES</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="h-12 text-sm border-2 border-slate-100">
                    <td class="text-left px-8 py-4">{{ $user->name }}</td>
                    <td class="text-left px-8 py-4">{{ $user->email }}</td>
                    <td class="text-left px-8 py-4"><a
                            href="{{ route('users.edit', $user->id) }}"class="bg-green-300 text-black rounded-full py-1.5 px-4 align-middle ">Editar</a>
                    </td>
                    <td class="text-left px-8 py-4"><a
                            href="{{ route('users.show', $user->id) }}"class="bg-orange-300 text-black rounded-full py-1.5 px-4 align-middle">Detalhes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
