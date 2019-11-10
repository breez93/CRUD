<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<form action="POST" method="pessoas.insert.php">
<p>
<label for="nome">Nome :</label>
<input type="text" name="nome" placeholder="Introduza Utilizador">
</p>
<p>
<label for="idade">Birthdate :</label>
<input type="yy/mm/dd" name="datadenascimento" placeholder="Data de nascimento">
</p>
<p>
<label for="sexo">Sexo :</label>
<input type="" name="hobbies" placeholder="Introduza hobbies">
</p>
<p>
<label for="cartaocc">C.C:</label>
<input type="numbers" name="cartaocc" placeholder="Introduza C.C">
</p>
<p>
<label for="nif">NIF :</label>
<input type="numbers" name="nif" placeholder="Introduza NIF">
</p>
<input type="submit" name="submit" value="Gravar Dados">

<?php
$username=$_POST["username"];
$datadenascimento=$_POST["datadenascimento"];
$hobbies=$_POST["hobbies"];
$cc=$_POST["cartaocc"];
$nif=$_POST["nif"];
$sql="INSERT into users(username,birthdate,hobbies,cartaocc,nif) VALUES('$username','$datadenascimento','$hobbies','$cc','$nif')";
$sqlselect = "SELECT * FROM users";

if(!mysqli_query($con,$sql)){

    echo " Erro ao inserir dados".mysqli_query_error();
}
else{

}

?>
</form>
</body>
</html>