<?php

namespace App\Controllers;

class Cadastros extends BaseController
{
  
    public function cadastroUsuario()
    {
        $session = session();

        $msgConfirmaCadastro = $session->getFlashdata('msgConfirmaCadastro');
        $msgSenhaDiferente = $session->getFlashdata('msgSenhaDiferente');
        $msgEmailjaCadastrado = $session->getFlashdata('msgEmailjaCadastrado');
        $msgUsuariojaCadastrado = $session->getFlashdata('msgUsuariojaCadastrado');
       
        $dadosView = [
            'msgConfirmaCadastro' => $msgConfirmaCadastro,
            'msgSenhaDiferente' => $msgSenhaDiferente,
            'msgEmailjaCadastrado' => $msgEmailjaCadastrado,
            'msgUsuariojaCadastrado' => $msgUsuariojaCadastrado
        ];
        
        return view ('cadastrousuario', $dadosView);
    }

    public function dadosCadastro()
    {
        $nome = $this->request->getPost('nome');
        $usuario = $this->request->getPost('usuario');
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');
        $Confirmasenha = $this->request->getPost('confirma_senha');
        $dataNasc = $this->request->getPost('data_nascimento');
        $genero = $this->request->getPost('genero');
        $imagem = $this->request->getPost('imagem');


        $dados = [
            'nomecompleto' => $nome,
            'usuario' => $usuario,
            'email' => $email,
            'senha' => $senha,
            'dataNascimento' => $dataNasc,
            'genero' => $genero,
            'imagem' => $imagem
        ];

        $usuarioModel = new \App\Models\UsuarioModel();

        // $verificaEmail = $usuarioModel->VerificaEmail($email);
        // $verificaUsuario = $usuarioModel->VerificaUsuario($usuario);
        
        if($senha != $Confirmasenha){
            $session = session();
            $session->setFlashdata('msgSenhaDiferente', 'As senhas não combinam.');
        }
        // else if($verificaEmail == 1 && "1"){
        //     $session = session();
        //     $session->setFlashdata('msgEmailjaCadastrado', 'Email já cadastrado.');
        //     return redirect()->to(base_url('cadastrousuario'));
        // }else if($verificaUsuario == 1 && "1"){
        //     $session = session();
        //     $session->setFlashdata('msgUsuariojaCadastrado', 'Usuário já cadastrado.');
        //     return redirect()->to(base_url('cadastrousuario'));
        // }
        $imagem = $this->request->getFile('imagem');
        if ($imagem->isValid() && !$imagem->hasMoved()) {
            $novoNomeImagem = $imagem->getRandomName();
            $imagem->move(ROOTPATH . 'public/img-usuario', $novoNomeImagem);
    
            // Adicione o nome da imagem ao array de dados
            $dados['imagem'] = $novoNomeImagem;
        }
            
        
        $usuarioModel->insert($dados);
        
        $session = session();
        $session->setFlashdata('msgConfirmaCadastro', 'Cadastrado com sucesso!');

        return redirect()->to(base_url('cadastrousuario'));
     
    }

    public function cadastraImoveis()
    {
        return view ('cadastraImoveis');
    }

    public function DadosImoveis()
    {
        $tipo = $this->request->getPost('tipo_imovel');
        $preco = $this->request->getPost('preco');
        $area = $this->request->getPost('area_total');
        $numeroQuartos = $this->request->getPost('num_quartos');
        $numeroBanheiros = $this->request->getPost('num_banheiros');
        $numeroVagasGaragem = $this->request->getPost('num_vagas_garagem');
        $imagens = $this->request->getPost('Imagens');
        $idProprietario = $this->request->getPost('ID_proprietario');
        $idEndereco = $this->request->getPost('ID_endereco');

        $imovelData = [
            'Tipo' => $tipo,
            'Preco' => $preco,
            'Area' => $area,
            'NumeroQuartos' => $numeroQuartos,
            'NumeroBanheiros' => $numeroBanheiros,
            'NumeroVagasGaragem' => $numeroVagasGaragem,
            'Imagens' => $imagens,
            'ID_Proprietario' => $idProprietario,
            'ID_Endereco' => $idEndereco
        ];
        $imovelModel = new \App\Models\ImovelModel();
        $imovelModel->insert($imovelData);
    

     

        $nomeProprietario = $this->request->getPost('nome_contato');
        $emailProprietario = $this->request->getPost('email_contato');
        $telefoneProprietario = $this->request->getPost('telefone_contato');

        
         $proprietarioData = [
            'Nome' => $nomeProprietario,
            'Email' => $emailProprietario,
            'Telefone' => $telefoneProprietario
            ];
        $proprietarioModel = new \App\Models\proprietarioModel();
        $idProprietario = $proprietarioModel->insert($proprietarioData);

        

       
        $Rua = $this->request->getPost('endereco');
        $Bairro = $this->request->getPost('bairro');
        $Cidade = $this->request->getPost('cidade');
        $Estado = $this->request->getPost('estado');
        $Cep = $this->request->getPost('cep');

         
          $enderecoData = [
            'Rua' => $Rua,
            'Bairro' => $Bairro,
            'Cidade' => $Cidade,
            'Estado' => $Estado,
            'CEP' => $Cep
            ];
        $enderecoModel = new \App\Models\enderecoModel();
        $idEndereco = $enderecoModel->insert($enderecoData);

     
    }


}

