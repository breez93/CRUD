<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <form action="api/pessoas_insert.php" method="POST">
    <p>
    <label for="email">Nome :</label>
    <input type="text" name="email" placeholder="Insert Email...">
    </p>
    <p>
    <label for="password">Idade :</label>
    <input type="password" name="password" placeholder="Insert Pasword...">
    </p>
    <p>
    <label for="sexo">Sexo :</label>
    <input type="option" option1="F" option2="M" name="password" placeholder="Insert Pasword...">
    </p>
    <label for="submit"><input type="submit" name="submit" value="Login"></label>
    </form>
</body>
</html>