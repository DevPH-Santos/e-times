@extends('layout')

@section('container')

<!-- Voltar -->
<div class="text-center mt-3">
    <a href="/" class="text-decoration-none">
        ← Voltar
    </a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-5">

            <!-- Central Registration Card -->
            <div class="card shadow border-0 rounded-3" data-purpose="registration-card">
                <div class="card-body p-4 p-md-5">

                    <!-- Card Header -->
                    <div class="text-center mb-4">
                        <h1 class="h3 fw-bold text-dark">Criar Conta</h1>
                        <p class="text-muted">
                            Junte-se à nossa comunidade de educadores e estudantes.
                        </p>
                    </div>

                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul>

                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <!-- Registration Form -->
                    <form 
                        action=""
                        method="POST"
                        id="registration-form"
                        class="needs-validation"
                        novalidate
                    >

                        @csrf()

                        <!-- Name Field -->
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Nome Completo
                            </label>

                            <input
                                type="text"
                                id="userName"
                                name="name"
                                class="form-control"
                                placeholder="Seu nome"
                                required
                            >

                            <div class="invalid-feedback">
                                Por favor, insira seu nome.
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                E-mail
                            </label>

                            <input
                                type="email"
                                id="userEmail"
                                name="email"
                                class="form-control"
                                placeholder="exemplo@edu.com"
                                required
                            >

                            <div class="invalid-feedback">
                                Por favor, insira um e-mail válido.
                            </div>
                        </div>

                        <!-- Password Field -->
                        <div class="mb-3">
                            <label for="password" class="form-label">
                                Senha
                            </label>

                            <input
                                type="password"
                                id="userPassword"
                                name="password"
                                class="form-control"
                                placeholder="********"
                                minlength="6"
                                required
                            >

                            <div class="invalid-feedback">
                                A senha deve ter pelo menos 6 caracteres.
                            </div>
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mb-4">
                            <label for="password" class="form-label">
                                Confirmar Senha
                            </label>

                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                class="form-control"
                                placeholder="********"
                                required
                            >

                            <div class="invalid-feedback">
                                As senhas devem coincidir.
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button
                            type="submit"
                            class="btn btn-primary w-100 py-2 fw-semibold mb-3"
                            data-purpose="submit-button"
                        >
                            Criar Conta
                        </button>

                    </form>

                    <!-- Login Link -->
                    <div class="text-center mt-3">
                        <p class="mb-0">
                            Já possui uma conta?
                            <a href="sign-in" class="text-primary text-decoration-none fw-medium">
                                Entrar
                            </a>
                        </p>
                    </div>

                </div>
            </div>
            <!-- End Central Registration Card -->

        </div>
    </div>
</div>
@endsection