@extends('layout/app', ["current" => "categorias"])

@section('body')


<div class="row"><!-- begin row -->

<div class="col align-self-end pt-20">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="/categorias/new" class="btn btn-secondary">New</a>
      </div>
</div>

<div class=" col-12 pt-20">
    <div class="card border">
      <div class="card-body">
        <h5 class="card-title">Categorias</h5>
        @if(count($categorias) > 0)
        <table class="table table-bordered table-hover">
          <thead>
            <th>Código</th>
            <th>Nome da categoria</th>
            <th>Ações</th>
            </thead>
            <tbody>
              @foreach ($categorias as $row)
                  <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->nome }}</td>
                    <td>
                    <a href="/categorias/edit/{{ $row->id }}" class="btn btn-primary btn-sm">Edit</a>
                  <a href="/categorias/delete/{{ $row->id }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
              @endforeach
              <tbody>
        </table>
        @endif
      </div>
    </div>

</div><!-- end row -->
@endsection