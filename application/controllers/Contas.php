<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contas extends CI_Controller {

	public function validarLogin()
	{
        $email = $this->input->post("email");
        $senha = $this->input->post("senha");
        if(empty($email)){
            echo "ErroEmail";
            die();
        }
        if(empty($senha)){
            echo "ErroSenha";
            die();
        }
	}
	public function ValidarCadastro()
	{
        $nome = $this->input->post("nome");
        $email = $this->input->post("email");
        $senha = $this->input->post("senha");
        $confSenha = $this->input->post("confirmarSenha");

        if(empty($nome)){
            echo "ErroNome";
            die();
        }

        if(empty($email)){
            echo "ErroEmail";
            die();
        }

        if(empty($senha)){
            echo "ErroSenha";
            die();
        }

        if(empty($confSenha)){
            echo "ErroConfSenha";
            die();
        }

        if($senha != $confSenha){
            echo "ErroSenhasDiferentes";
            die();
        }

	}
}
