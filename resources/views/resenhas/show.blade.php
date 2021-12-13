@extends('layouts.dashboard')
@section('aba')
    Bookshelf
@endsection
@section('titulo')
<h1 class="h1 mb-0 text-gray-800">{{$resenha->livro}}</h1>
@endsection
@section('botao')
<div class="text-right mr-4">
    <h5>Nota<h5>
    <a class="d-none d-sm-inline-block btn btn-circle btn-lg shadow-sm" style="background-color:#BF7463; color:white">{{$resenha->nota}}</a>
</div>
@endsection
@section('conteudo')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="p-5">
                    <div>
                        <div>
                        <h3 class="text-left">
                            {{$resenha->resenhafinal}}
                        </h3>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
<div class="text-right mr-5">
    <a href="{{route('resenhas.edit', ['resenha'=>$resenha->id])}}" class="d-none d-sm-inline-block btn btn-lg shadow-sm" style="background-color:#BF7463; color:white">Editar</a>
</div>
@endsection