<?php

if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'conexao2.php';
    require 'Usuario.class.php';

    $u = new Usuario();
    

 $nome = addslashes($_POST['nome']);    
 $senha = addslashes($_POST['senha']); 

 if($u->login($nome, $senha) == true){
    if(isset($_SESSION['idUser'])){
        header("Location:admin.php");
    }else{
        header("Location: login.php");  
    }
 }else{
    header("Location: login.php");
 }

}else{

    header("Location: login.php");

}

?>