<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Web Mudança - Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/cadUsuario.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Times New Roman', Times, serif;
        }

        .alert {
            width: 300px;
            position: absolute;
            top: 590px;
            left: 529px;
        }

        #nav ul {
            list-style: none;

        }

        #login {
            border: 2px solid rgb(255, 140, 0);
            border-radius: 8px;
            background-color: rgb(255, 140, 0);
            padding-left: 8px;
            padding-right: 8px;

        }

        #login:hover {
            background-color: black;
            color: rgb(255, 140, 0);
            cursor: pointer;
        }
        
        body{background-image: url(img/preto-fosco.jpg); background-size: cover;
        background-position: center;}

    </style>

</head>

<body>

    <header>
        <nav id="nav" class="navbar *navbar-expand-lg">
            <a href="<?= base_url('/'); ?>"><img class="logo" src="img/logo.png" alt="WebMudança LOGO"></a>
            <ul>
                <li><a href="<?= base_url('/'); ?>">Home</a></li>
                <li><a href="">Suporte</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contatos</a></li>
                <li id="login"><a href="<?= base_url('login'); ?>">Entrar</a></li>
            </ul>
        </nav>

    </header>

    <main>

        <section class="conteudo">
            <fieldset>
            <legend> Cadastro </legend>
            <form action="<?= base_url('dadoscadastro'); ?>" method="post" enctype="multipart/form-data" class="form-cadusuario">

                    <label for="imagem">Imagem de Perfil:</label>
                    <input type="file" id="imagem" name="imagem">

                <div class="inputBox">
                    <label class="labelInput" for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>

                <div class="inputBox">
                <label class="labelInput" class="mt-1 mb-1" for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required>
                </div>

                <div class="inputBox">
                <label class="labelInput" for="email">Endereço de e-mail:</label>
                <input type="email" id="email" name="email" required>
                </div>


                <div class="inputBox">
                <label class="labelInput" for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
                </div>

                <div class="inputBox">
                <label class="labelInput" for="confirma_senha">Confirme a senha:</label>
                <input type="password" id="confirma_senha" name="confirma_senha" required>
                </div>

                <div class="inputBox">
                <label class="labelInput" for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" required>
                </div>

                <div class="inputBox">
                <label class="labelInput" for="genero">Gênero:</label>
                <select id="genero" name="genero">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
                </div>


                <br>

                <input type="submit" value="Cadastrar">
            </form>
            </fieldset>
        </section>

        <?php

        if ($msgConfirmaCadastro != null) {
        ?>
            <div class="alert alert-success" role="alert">
                <?= $msgConfirmaCadastro ?>
            </div>
        <?php
        }
        ?>

        <?php

        if ($msgSenhaDiferente != null) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?= $msgSenhaDiferente ?>
            </div>
        <?php
        }
        ?>

        <?php

        if ($msgEmailjaCadastrado != null) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?= $msgEmailjaCadastrado ?>
            </div>
        <?php
        }
        ?>

        <?php

        if ($msgUsuariojaCadastrado != null) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?= $msgUsuariojaCadastrado ?>
            </div>
        <?php
        }
        ?>
    </main>

</body>

</html>

</body>

</html>