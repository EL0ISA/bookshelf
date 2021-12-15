@extends('layouts.auth')
@section('aba')
    Login
@endsection
@section('titulo')
    Login
@endsection
@section('form')
<form class="user" action="{{route('login')}}" method="POST">
    @csrf
    <div class="form-group">
        <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Digite seu email" name="email" value="{{old('email')}}">
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user"
            id="exampleInputPassword" placeholder="Digite sua senha" name="password">
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck">
            <label class="custom-control-label" for="customCheck">Lembre-se de mim</label>
        </div>
    </div>
    <button class="btn btn-user btn-block" style="background-color:#BF7463; color:white">
        Entrar
    </button>
</form>
@endsection
@section('links')
<div class="text-center">
    <a class="small" href="{{url('/register')}}" style="color:#BF7463">Criar Conta!</a>
</div>
@endsection