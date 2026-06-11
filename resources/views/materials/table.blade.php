@extends('layout')

@section('container')
<!-- Voltar -->
<div class="text-center mt-3">
    <a href="/" class="text-decoration-none">
        ← Voltar
    </a>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-5 w-100">

            <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Título</th>
                    <th scope="col" class="text-center">Descrição</th>
                    <th scope="col" class="text-center">Link</th>
                    <th scope="col" class="text-center">Ações</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($materials as $material)
                        <tr>

                            <th class="text-center" scope="row">{{ $material->id }}</th>

                            <td class="text-center">{{ $material->name }}</td>

                            <td class="text-center">{{ $material->description }}</td>

                            <td class="text-center"><a href={{ $material->file_url }} target="_blank" rel="noopener noreferrer">Link</a></td>

                            <td class="d-flex gap-4 align-items-center justify-content-center text-center">
                                <a href="materials/edit/{{ $material->id }}" class="btn btn-sm btn-primary">Editar</a>

                                <form action="/materials/delete/{{$material->id}}" method="post">

                                    @method('delete')
                                    @csrf()

                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Deletar</button>

                                </form>
                            </td>

                        </tr>
                    @endforeach
                  
                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">

        <form action="/materials/delete/{{$material->id}}" method="post">

            @method('delete')
            @csrf()

            <button type="button" class="btn btn-sm btn-danger">Deletar</button>

        </form>
        <button type="button" class="btn btn-sm" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection