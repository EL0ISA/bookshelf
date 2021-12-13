@extends('layouts.dashboard')
@section('aba')
    Bookshelf
@endsection
@section('titulo')
<h1 class="h3 mb-0 text-gray-800">Resenhas</h1>
@endsection
@section('botao')
<a href="{{route('resenhas.create')}}" class="d-none d-sm-inline-block btn btn-sm shadow-sm" style="background-color:#BF7463; color:white"><i class="fas fa-plus fa-sm text-white-50"></i> Nova Resenha</a>
@endsection
@section('conteudo')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titulo do Livro</th>
                        <th>Nota</th>
                        <th>Resenha</th>
                        
                    </tr>
                </thead>
            @foreach($resenhas as $resenha)
                <tbody>
                    <tr>
                        <td>{{$resenha->id}}</td>
                        <td>{{$resenha->livro}}</td>
                        <td>{{$resenha->nota}}</td>
                        <td>
                            <a href="{{route('resenhas.show', ['resenha'=>$resenha->id])}}" class="btn-circle text-white"  style="background-color:#BF7463"><i class="fa fa-eye btn-lg"></i></a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection