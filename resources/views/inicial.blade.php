<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicial</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 250px;
            margin: 0 auto;
            background-color: whitesmoke;
            padding: 10px;
            border-radius: 10px;
        }

        .campo {
            position: relative;
            margin: 20px 0;
        }

        .campo input {
            width: 100%;
            padding: 14px 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            outline: none;
        }

        .campo label {
            position: absolute;
            left: 10px;
            top: 14px;
            color: #777;
            font-size: 16px;
            transition: 0.2s ease;
            pointer-events: none;
            background: white;
            padding: 0 4px;
        }

        .campo input:focus+label {
            top: -8px;
            font-size: 12px;
            color: dodgerblue;
        }

        /* quando tem texto */
        .campo input:not(:placeholder-shown)+label {
            top: -8px;
            font-size: 12px;
        }

        /* From Uiverse.io by mi-series */
        .button {
            width: 150px;
            padding: 0;
            border: none;
            transform: rotate(5deg);
            transform-origin: center;
            font-family: "Gochi Hand", cursive;
            text-decoration: none;
            font-size: 15px;
            cursor: pointer;
            padding-bottom: 3px;
            border-radius: 5px;
            box-shadow: 0 2px 0 #494a4b;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background-color: #5cdb95;
        }

        .button span {
            background: #f1f5f8;
            display: block;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            border: 2px solid #494a4b;
        }

        .button:active {
            transform: translateY(5px);
            padding-bottom: 0px;
            outline: 0;
        }
    </style>

</head>

<body>

    

    <h1>Bem vindo {{ $nombre }} !</h1>

    <form action="" method="POST">

        @csrf()
        {{-- serve para proteger aplicações web contra ataques de falsificação de solicitação entre sites. Garante q as requisições nao vieram de site terceiros ou maliciosos --}}

        <div class="campo">

            <input type="text" name="nome" placeholder=" ">
            <label for="nome">Digite seu nome</label>

        </div>

        <button class="button" type="submit"><span>Enviar</span></button>

    </form>

    <a target="blank" href="http://127.0.0.1:8000/sobre">Sobre</a>
    <br>
    <br>
    <a target="blank" href="http://127.0.0.1:8000/sign-up">Cadastro</a>
    <br>
    <br>
    <a target="blank" href="http://127.0.0.1:8000/sign-in">Login</a>
    <br>
    <br>
    <a target="blank" href="http://127.0.0.1:8000/materials/new">Cadastrar material</a>
    <br>
    <br>
    <a target="blank" href="http://127.0.0.1:8000/materials">Ver Materiais</a>

</body>

</html>
