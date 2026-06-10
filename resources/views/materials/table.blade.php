@extends('layout')

@section('container')
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
                                <a href="materials/delete/{{ $material->id }}" class="btn btn-sm btn-danger">Deletar</a>
                            </td>

                        </tr>
                    @endforeach
                  
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection