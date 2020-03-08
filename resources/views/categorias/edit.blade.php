@extends('layout/app', ["current" => "categorias"])

@section('body')

            <div class="card border">
                <div class="card-body">
                    
                    <form action="/categorias/{{$cat->id }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="nomeCategoria">Nome da categoria</label>
                        <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" value="{{$cat->nome }}" aria-describedby="nomeCategoria" placeholder="Categoria">
                          <small id="nomeCategoria" class="form-text text-muted">Informe o nome da categoria</small>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
                      </form>

                </div>
            </div>

@endsection