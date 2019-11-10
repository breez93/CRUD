<?php
if(isset($_POST["submit"]) And isset($_POST["nome"]) And isset($_POST["idade"]) And isset($_POST["genero"]) And isset($_POST["email"]) And isset($_POST["[password]"])){

    $server="localhost";
    $user="root";
    $password="";
    $db="crud";
    $con=mysqli_connect($server,$user,$password,$db);
    
    if(!$con){

        die("falha ao ligar ao servidor".mysqli_connect_error());
    }
    else{
        $email=$_POST["email"];
        $password=$_POST["password"];
        $nome=$_POST["nome"];
        $idade=$_POST["idade"];
        $sexo=$_POST["genero"];

        $sql= "DELETE FROM users Where IDuser='3'";
        $result = mysqli_query($con,$sql);
        if(!$result){
            echo "Erro ao apagar dados".mysqli_error_query($result);
        }
        else{
            echo "Dados apagados com sucesso";
        }
    }
}

?>