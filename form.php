<form action="pessoas_insert.php" method="POST">
    <p>
    <label for="nome">Nome :</label>
    <input type="text" name="nome" placeholder="Insert Email...">
    </p>
    <p>
    <label for="idade">Idade :</label>
    <input type="int" name="idade" placeholder="Insert Age...">
    </p>
    <p>
    <label for="sexo">Sexo :</label>
    <input type="radio" name="genero" value="male">M 
    <input type="radio" name="genero" value="female">F 
    <input type="radio" name="genero" value="other">Outro 
    </p>
    <label for="submit"><input type="submit" name="submit" value="Inserir dados"></label>
    </form>