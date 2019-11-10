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

        $sql= "UPDATE users SET nome='$nome', idade='$idade',genero='$genero',email='$email', password='$password'";
        $result = mysqli_query($con,$sql);


        if (!$result) {
        
            echo "Erro ao atualizar dados".mysqli_error_query();
        }
        else{
            echo "Dados atualizados";
        }
    }
}
?>