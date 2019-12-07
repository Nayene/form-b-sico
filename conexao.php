<?php
    function conexaoBD(){
        $host = "localhost";
        $database = "form";
        $user ="root";
        $password = "bcd127";
        

        if(!$conexao = mysqli_connect($host,$user,$password,$database))
            echo('ERRO NA CONEXAO COM O BANCO DE DADOS');
            return $conexao;

    }
   
?>