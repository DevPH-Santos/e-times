@extends('layout')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-5">

            <!-- Central Card -->
            <div class="card shadow border-0 rounded-3">
                <div class="card-body p-4 p-md-5">

                    <!-- Card Header -->
                    <div class="text-center mb-4">
                        <h1 class="h3 fw-bold text-dark">Cadastrar Material</h1>
                        <p class="text-muted">
                            Compartilhe materiais com outros usuários da plataforma.
                        </p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form -->
                    <form 
                        action=""
                        method="POST"
                        enctype="multipart/form-data"
                        class="needs-validation"
                        novalidate
                    >

                        @isset($material)
                            @method('put')
                        @endisset

                        @csrf()

                        <!-- Nome -->
                        <div class="mb-3">
                            <label for="nome" class="form-label">
                                Nome do Material
                            </label>

                            <input
                                type="text"
                                id="nome"
                                name="name"
                                value="{{ $material->name ?? null }}"
                                class="form-control"
                                placeholder="Ex: Apostila de Matemática"
                                required
                            >

                            <div class="invalid-feedback">
                                Informe o nome do material.
                            </div>
                        </div>

                        <!-- Descrição -->
                        <div class="mb-3">
                            <label for="descricao" class="form-label">
                                Descrição
                            </label>

                            <textarea
                                id="descricao"
                                name="description"
                                class="form-control"
                                rows="3"
                                placeholder="Descreva o conteúdo do material"
                                required
                            >{{ $material->description ?? null }}</textarea>

                            <div class="invalid-feedback">
                                Informe uma descrição.
                            </div>
                        </div>

                        <!-- Arquivo -->
                        <div class="mb-4">
                            <label for="arquivo" class="form-label">
                                Arquivo
                            </label>

                            <input
                                type="file"
                                id="arquivo"
                                name="file_url"
                                value="{{ $material->file_url }}"
                                accept=".pdf, .doc, .docx, .pptx, .ppt, .jpg, .jpeg, .png"
                                class="form-control"
                                required
                            >

                            <div class="invalid-feedback">
                                Selecione um arquivo para envio.
                            </div>
                        </div>

                        <!-- Botão -->
                        <button
                            type="submit"
                            class="btn btn-primary w-100 py-2 fw-semibold mb-3"
                        >
                            Cadastrar Material
                        </button>

                    </form>

                    <!-- Voltar -->
                    <div class="text-center mt-3">
                        <a href="/" class="text-decoration-none">
                            ← Voltar
                        </a>
                    </div>

                </div>
            </div>
            <!-- End Card -->

        </div>
    </div>
</div>
@endsection