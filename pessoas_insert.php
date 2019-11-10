<?php
if(isset($_POST["submit"]) And isset($_POST["nome"]) And isset($_POST["idade"]) And isset($_POST["genero"])){
    $server="localhost";
    $user="root";
    $password="";
    $db="crud";
    $con=mysqli_connect($server,$user,$password,$db);
    
    if(!$con){

        die("falha ao ligar ao servidor".mysqli_connect_error());
    }
    else{
        $nome=$_POST["nome"];
        $idade=$_POST["idade"];
        $genero=$_POST["genero"];
        $sql = "INSERT INTO users (nome,idade,sexo)
        VALUES ('$nome', '$idade','$genero')";        
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        if (!$result){
            
            echo"Dados inseridos falhados";
            
        }
        else{
        
           echo "Novos dados inseridos";
        
        }
    }

}

?>