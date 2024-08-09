<?php

/**
 * @author Fabio Claret
 * data agosto/2024
 * Classe com conexao a banco de dados
 * @return boolean 
 */

class Contato{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    function getId(){
        return $this->id;
    }
    function getNome(){
        return $this->nome;
    }
    function getEmail(){
        return $this->email;
    }
    function getSenha(){
        return $this->senha;
    }


  function setNome($nome){
    $this->nome = $nome;
  }
  function setEmail($email){
    $this->email = $email;
  }
  function setSenha($senha){
    $this->senha = $senha;
  }
  

  function __construct(){
    #o PDO precisa de 3 parametros
    $dsn  ="mysql:dbname=etimcontato;host=localhost";
    $dbUser = "root";
    $dbPass = "";

    try {
        $this->pdo = new PDO($dsn,$dbUser, $dbPass);

        echo "<script>
                alert('Conectanto ao Banco')
            </script>";
    } catch (\Throwable $th) {
        echo "<script>
                  alert('Banco Indisponivel. Tente mais tarde.')
              </script>";
              echo $th;
    }

  }

    /**
     * @author Fabio Claret
     * data agosto/2024
     * Metodo de conexao ao banco de dados
     * testar se conectou
     * @return boolean 
     */

  
        
       






}