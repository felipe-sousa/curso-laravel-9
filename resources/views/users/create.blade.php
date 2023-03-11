@extends('layouts.app')

@section('title', 'Novo usuário')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2 mt-4 mb-8">Novo Usuário</h1>

    @include('includes.validations-form')

    <form action="{{ route('users.store') }}" method="POST">
        @include('users._partials.form')
    </form>
@endsection
