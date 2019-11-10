
<?php
    if(isset($_POST["submit"]) And isset($_POST["email"]) And isset($_POST["password"])){
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
        $sql= "SELECT * FROM users Where email='$email' and password='$password'";
        $result = mysqli_query($con,$sql);
        if (mysqli_num_rows($result) == 1) {
            
            while($row = mysqli_fetch_assoc($result)){
                echo  $row["nome"]. " - Name: " . $row["idade"]. " " . $row["sexo"]. "<br>";
            }
        }
        else{
        
           echo "Utilizador nao existe";
        
        }
    }

}
?>