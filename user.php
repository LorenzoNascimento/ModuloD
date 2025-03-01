<?php

class Usuario
{
    public $id;
    public $nome;
    public $email;
    public $senha;

    public function cadastrar($nome, $email, $senha, $usuarios, $count){

        if(email($email, $usuarios)){
            echo "Email ja cadastrado!";
            return $usuarios;
        }
        $u = new Usuario();
        $u->id = $count;
        $u->nome = $nome;
        $u->email = $email;
        $u->senha = $senha;
        $usuarios[] = $u;
    }

    public function email($email, $usuarios){
foreach($usuarios as $u){
    if($u->email == $email){
        return false;
    }else{
        return true;
    }
}
    }
    
} 