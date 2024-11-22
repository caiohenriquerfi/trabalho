<?php

class Usuario{


    public function login($nome, $senha){
        global $pdo;

        $sql = "SELECT * FROM usuario WHERE nome = :nome AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();   
        
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

           $_SESSION['idUser'] = $dado['idusuario'];

           return true;
        }else{
            return false;   
        }
        
    }
}

?>
