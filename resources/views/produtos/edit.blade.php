@extends('layout/app', ["current" => "produtos"])

@section('body')

            <div class="card border">
                <div class="card-body">
                    
                <form action="/produtos/{{ $produto->id}}" method="POST">
                        @csrf
                        <div class="form-row">
                        <div class="form-group col-12">
                          <label for="nome">Nome do Produto</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="{{ $produto->nome }}" placeholder="Produto">
                        </div>

                        <div class="form-group col-4">
                            <label for="nome">Quantidade em estoque</label>
                            <input type="number" class="form-control" name="estoque" id="estoque" value="{{ $produto->estoque }}" placeholder="Qtd">
                        </div>

                        <div class="form-group col-4">
                            <label for="nome">Preço</label>
                            <input type="text" class="form-control" name="preco" id="preco" value="{{ $produto->preco }}" placeholder="Preço">
                        </div>
        
                        <div class="form-group col-4">
                            <label for="categoria_id">Categoria do Produto</label>
                            <select class="form-control" name="categoria_id" id="categoria_id">
                                @foreach ($categorias as $row)
                                <option value="{{ $row->id }}"  {{ ($row->id == $produto->categoria_id )  ? 'selected' : '' }} >{{ $row->nome }}</option>                  
                                @endforeach
                            </select>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
                      </form>

                </div>
            </div>

@endsection