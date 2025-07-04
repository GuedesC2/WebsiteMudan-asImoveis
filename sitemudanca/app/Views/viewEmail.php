<section class="box-form-novasenha">
    
    <br/>

    <h1>Olá, <?= $usuario[0]['NomeCompleto']?></h1>

    <p>Recebemos um pedido para alteração de senha na sua conta WebMudança.
    
    <br/>
    <br/>
    <a href="<?=base_url('editarsenha')?>">Criar nova senha.</a>
    
    <br/>
    <br/>   
    Se você ignorar essa mensagem sua senha não será alterada.
    <br/>
    Deixe-nos saber se não foi você que solicitou alterações de senha.
    <br/>    
    <br/>
    Att., Suporte <a href="<?= base_url('/')?>">WebMudança.</a></p>

</section>