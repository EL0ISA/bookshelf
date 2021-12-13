@extends('layouts.auth')

@section('aba')
    Registro
@endsection

@section('titulo')
    Crie uma conta
@endsection

@section('form')
<form class="user" action="{{url('/register')}}" method="POST">
    @csrf
    <div class="form-group">
            <input type="text" class="form-control form-control-user" name="name" placeholder="Digite seu nome">
            @error('name')
                <span>{{$message}}</span>
            @enderror
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-control-user" name="email" placeholder="Digite seu email">
            @error('email')
                <span>{{$message}}</span>
            @enderror
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" class="form-control form-control-user" name="password" placeholder="Defina sua senha">
                @error('password')
                <span>{{$message}}</span>
                @enderror
        </div>
        <div class="col-sm-6">
            <input type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Repita a senha">
                @error('password_confirmation')
                <span>{{$message}}</span>
                @enderror
            </div>
    </div>
    <button class="btn btn-user btn-block" style="background-color:#BF7463; color:white">
        Criar Conta
    </button>
</form>
@endsection
@section('links')
<div class="text-center">
    <a class="small" href="{{route('login')}}" style="color:#BF7463">Já tem uma conta? Entre!</a>
</div>
@endsection