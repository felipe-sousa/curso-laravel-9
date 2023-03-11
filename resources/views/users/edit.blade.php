@extends('layouts.app')

@section('title', 'Editar usuário')

@section('content')
    <h1>Editar Usuário {{ $user->name }}</h1>

   @include('includes.validations-form')

    <form action="{{ route('users.update', $user->id) }}" method="post">
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        @method('PUT')
        @include('users._partials.form')
    </form>
@endsection
