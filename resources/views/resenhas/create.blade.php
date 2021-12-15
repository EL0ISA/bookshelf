@extends('layouts.dashboard')
@section('aba')
    Bookshelf
@endsection
@section('conteudo')
<h1 class="h3 mb-4 text-gray-800"></h1>

<div class="card o-hidden border-0 shadow-lg my-3">
    <div class="card-body p-0">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4 d-inline-block">Nova Resenha</h1>
                    </div>
                    
                    <form action="{{route('resenhas.store')}}" class="user" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" placeholder="Titulo do Livro" name="livro" value="{{old('livro')}}">
                                @error('livro')
                                <span>{{$errors->first('livro')}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" placeholder="Nota" name="nota" value="{{old('nota')}}">
                                @error('nota')
                                <span>{{$errors->first('nota')}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleInputFormação" placeholder="Resenha" name="resenhafinal"  value="{{old('resenhafinal')}}">
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