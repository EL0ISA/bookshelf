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
                        <h1 class="h4 text-gray-900 mb-4 d-inline-block">Editar Resenha</h1>
                    </div>
                    
                    <form action="{{route('resenhas.update', ['resenha'=>$resenha->id])}}" class="user text-center" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <div class="col-sm mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" placeholder="Titulo do Livro" name="livro" value="{{old('livro', $resenha->livro)}}">
                                @error('livro')
                                <span>{{$errors->first('livro')}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" placeholder="Nota" name="nota" value="{{old('nota', $resenha->nota)}}">
                                @error('nota')
                                <span>{{$errors->first('nota')}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleInputFormação" placeholder="Resenha" name="resenhafinal" value="{{old('resenhafinal', $resenha->resenhafinal)}}">
                                    @error('resenhafinal')
                                    <span>{{$errors->first('resenhafinal')}}</span>
                                    @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <input type="submit" class="btn bg-success text-dark btn-user col-sm-5 -md-auto" value="Salvar Resenha">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection