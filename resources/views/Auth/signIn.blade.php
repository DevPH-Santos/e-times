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

        <div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4">

            <!-- Login Card -->
            <div class="card shadow border-0">
                <div class="card-body p-4 p-md-5">

                    <!-- Header -->
                    <div class="text-center mb-4">
                        <h2 class="fw-bold">Entrar</h2>
                        <p class="text-muted small">
                            Acesse sua conta para compartilhar e acessar materiais.
                        </p>
                    </div>

                    <!-- Form -->
                    <form action="" method="POST">

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-medium">
                                E-mail
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="seu@email.com"
                                required
                                class="form-control form-control-lg"
                            >
                        </div>

                        <!-- Password -->
                        <div class="mb-3">

                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="password" class="form-label fw-medium mb-0">
                                    Senha
                                </label>
                            </div>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="••••••••"
                                required
                                class="form-control form-control-lg"
                            >

                                <a href="#" class="text-decoration-none small">
                                    Esqueci minha senha
                                </a>
                                
                        </div>

                        <!-- Remember -->
                        <div class="mb-4 form-check">
                            <input
                                type="checkbox"
                                id="remember"
                                name="remember"
                                class="form-check-input"
                            >

                            <label for="remember" class="form-check-label text-muted small">
                                Lembrar de mim
                            </label>
                        </div>

                        <!-- Submit -->
                        <button
                            type="submit"
                            class="btn btn-primary btn-lg w-100 fw-bold"
                        >
                            Entrar
                        </button>

                    </form>

                    <!-- Register -->
                    <div class="mt-4 pt-3 border-top text-center">
                        <p class="text-muted small mb-0">
                            Ainda não possui uma conta?
                            <a href="sign-up" class="fw-bold text-decoration-none">
                                Criar conta
                            </a>
                        </p>
                    </div>

                </div>
                
            </div>

        </div>
    </div>
</div>
    
@endsection