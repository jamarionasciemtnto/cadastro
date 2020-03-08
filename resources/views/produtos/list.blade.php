@extends('layout/app', ["current" => "produtos"])

@section('body')


<div class="row"><!-- begin row -->

<div class="col align-self-end pt-20">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="/produtos/new" class="btn btn-secondary">New</a>
      </div>
</div>

<div class=" col-12 pt-20">
    @if(count($produtos) > 0)
    <div class="card border">
      <div class="card-body">
       
        <h5 class="card-title">Produtos</h5>
        <table class="table table-bordered table-hover">
          <thead>
            <th>Código</th>
            <th>Nome do Produto</th>
            <th>Ações</th>
            </thead>
            <tbody>
              @foreach ($produtos as $row)
                  <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->nome }}</td>
                    <td>
                    <a href="/produtos/edit/{{ $row->id }}" class="btn btn-primary btn-sm">Edit</a>
                  <a href="/produtos/delete/{{ $row->id }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
              @endforeach
              <tbody>
        </table>
      </div>
    </div>
    @endif
</div><!-- end row -->
@endsection