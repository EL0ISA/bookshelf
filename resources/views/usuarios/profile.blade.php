@extends('layouts.dashboard')
@section('aba')
    Bookshelf
@endsection
@section('conteudo')
<div class="card o-hidden border-0 shadow-lg my-3">
    <div class="card-body p-0">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4 d-inline-block">{{$user->name}}</h1>
                        <div class="form-group row">
                            <div class="col-sm mb-5 mb-sm-0">
                                <h1 class="h4 text-gray-900 mb-6 d-inline-block">{{$user->email}}</h1>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm mb-5 mb-sm-0">
                                <h1 class="h4 text-gray-900 mb-6 d-inline-block">{{$user->aniversario}}</h1>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm mb-3 mb-sm-0">
                                <a href="{{route('user.edit', [$user = Auth::user()])}}" class="btn btn-user col-sm-5 -md-auto" style="background-color:#BF7463; color:white">Editar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection