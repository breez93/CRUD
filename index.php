<?php

include "webrequest.php";

if(isset($_POST["submit"]) And isset($_POST["email"]) And isset($_POST["password"])){
    echo "Entrou";
    session_abort();
    $option= array("email"=>$_POST["email"],"password"=>$_POST["password"]);
    $result=post(
         $option, 

         "http://localhost:8080/exercicios/CRUD/api/pessoas_select.php");
         var_dump($result);
        
        }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <form action="index.php" method="POST">
    <p>
    <label for="email">Email :</label>
    <input type="text" name="email" placeholder="Insert Email...">
    </p>
    <p>
    <label for="password">Password :</label>
    <input type="password" name="password" placeholder="Insert Pasword...">
    </p>
    <label for="submit"><input type="submit" name="submit" value="Login"></label>
    </form>
</body>
</html>