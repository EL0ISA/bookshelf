@extends('layouts.dashboard')
@section('aba')
    Bookshelf
@endsection
@section('conteudo')
<div class="card o-hidden border-0 shadow-lg my-3">
    <div class="card-body p-0">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4 d-inline-block">Editar</h1>
                    </div>
                    <form action="{{route('user.update', [$user = Auth::user()])}}" class="user text-center" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <div class="col-sm mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" placeholder="Nome" name="name" value="{{old('name', $user->name)}}">
                                @error('name')
                                <span>{{$errors->first('name')}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" placeholder="Email" name="email" value="{{old('email', $user->email)}}">
                                @error('email')
                                <span>{{$errors->first('email')}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm mb-3 mb-sm-0">
                                <input type="date" class="form-control form-control-user" id="exampleInputFormação" placeholder="Resenha" name="aniversario" value="{{$user->aniversario}}">
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <input type="submit" class="btn bg-success text-dark btn-user col-sm-5 -md-auto" value="Salvar">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection