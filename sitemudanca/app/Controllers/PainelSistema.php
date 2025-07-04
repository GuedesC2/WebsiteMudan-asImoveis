<?php

namespace App\Controllers;

class PainelSistema extends BaseController
{
    
    public function painelUsuario()
    {
        $session = session();

        $usuario = $session->get('usuario');

        if ($usuario == NULL){
             return redirect()->to(base_url('login'));
        }

        return view ('painelUsuario');
    }
    
    public function meusImoveis()
    {

        $session = session();

        $usuario = $session->get('usuario');

        $cadastros = new Cadastros();
        $imoveis = $cadastros->getImoveisByUsuario($usuario);

        $dadosView = [
            'imoveis' => $imoveis
        ];

        if ($usuario == NULL){
             return redirect()->to(base_url('login'));
        }
        
        return view('viewMeusImoveis', $dadosView);
    }



}

