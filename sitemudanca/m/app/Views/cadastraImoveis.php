<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Web Mudança - Cadastro de Imóvel</title>
    <link rel="stylesheet" href="Css/cadImoveis.css">
    <style>
        body{background-image: url(img/preto-fosco.jpg); background-size: cover;
        background-position: center;}
    </style>
</head>
<body>

    <header>
        <nav id="nav">
        <a href="<?= base_url('/'); ?>"><img class="logo" src="img/logo.png" alt="WebMudança LOGO"></a>
        <ul>
            <li><a href="<?= base_url('/'); ?>">Home</a></li>
            <li><a href="">Suporte</a></li>
            <li><a href="">Sobre</a></li>
            <li><a href="">Contatos</a></li>
            <li id="logout"><a href="<?= base_url('logout') ?>">Sair</a></li>
        </ul>
        </nav>
    </header>

    <main>

        <section class="pagina-sistema">

            <div class="barraLateral">
                <div>
                <a href="<?= base_url('painelusuario'); ?>"><input type="button" value="Dashboard"></a>
                </div>
                <div>
                <a href="<?= base_url('cadastraImoveis'); ?>"><input type="button" value="Cadastrar Imovel"></a>
                </div>
                <div>
                <a href="<?= base_url('meusimoveis'); ?>"><input type="button" value="Meus Imóveis"></a>
                </div>
                <div>
                <a href="<?= base_url('editarmeusdados'); ?>"><input type="button" value="Editar meus dados"></a>
                </div>
            </div>
          

        <div  id="conteudo">
            <fieldset>
                <form  class="formulario-cadastro" action="<?= base_url('dadosimoveis'); ?>" method="post" enctype="multipart/form-data">
                    <h2>Cadastrar Imóvel</h2>
                    <div class="divForm-infosBasicas" >
                    <!-- Informações Básicas -->

                    <div>
                        <select name="tipo" id="tipo">
                        <option value="aluguel">Aluguel</option>
                        <option value="venda">Venda</option>
                        </select>
                    </div>
                    <br>
                    <div>
                        <label for="tipo_imovel">Tipo de imóvel:</label>
                        <input type="text" id="tipo_imovel" name="tipo_imovel" required>
                    </div>
                    <br />
                    <div>
                        <label for="preco">Preço:</label>
                        <input type="number" id="preco" name="preco" required>
                    </div>
                    <br />
                    <div>
                        <label for="area_total">Área total (m²):</label>
                        <input type="number" id="area_total" name="area_total" required>
                    </div>
                    <br />
                    <div>
                        <label for="num_quartos">Número de quartos:</label>
                        <input type="number" id="num_quartos" name="num_quartos" required>
                    </div>
                    <br />
                    <div>
                        <label for="num_banheiros">Número de banheiros:</label>
                        <input type="number" id="num_banheiros" name="num_banheiros" required>
                    </div>
                    <br />
                    <div>
                        <label for="num_vagas_garagem">Número de vagas de garagem:</label>
                        <input type="number" id="num_vagas_garagem" name="num_vagas_garagem" required>
                    </div>
                    </div>
                
                    <div class="divForm-addImgs">
                  
                    <label for="imagens">Adicionar imagens:</label>
                    <input type="file" id="imagens" name="arquivo" multiple accept="image/*" required>
                    </div>

                    <div class="divForm-Localizacao"  >
                
                    <label for="endereco">Rua:</label>
                    <input type="text" id="endereco" name="endereco" required>

                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" required>

                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" required>

                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado" required>

                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" required>
                    </div>


                    <div class="divForm-contato">
                    <br />
                    <br />
                    <br />
                
                    <label for="nome_contato">Nome do proprietário ou agente responsável:</label>
                    <input type="text" id="nome_contato" name="nome_contato" required>

                    <label for="email_contato">E-mail de contato:</label>
                    <input type="email" id="email_contato" name="email_contato" required>

                    <label for="telefone_contato">Número de telefone:</label>
                    <input type="tel" id="telefone_contato" name="telefone_contato" required>
                    </div>

                    <div class="divForm-termo">
                    <br />
                    <br />
                
                    <label for="termos_condicoes">Aceitar termos e condições:</label>
                    <input type="checkbox" id="termos_condicoes" name="termos_condicoes" required>
                    </div>
               
                    <div class="divForm-btnCadastrar">
                    <br />
                    <br />
                    <!-- Botão de Envio -->
                    <button name="submit" type="file">Cadastrar Imóvel</button>
                    </div>

                </form>
            </fieldset>
        </div>
  

      


     </section>
    </main>

    <script src="Js/script.js"></script>
</body>
</html>
