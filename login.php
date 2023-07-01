<?php
  $servername = "localhost";
  $username = "Test";
  $password = "Test";
  $dbname = "data";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  if($conn->connection_error) {
    die("lol");
  }
  
  $nome = $_GET["nome"];
  $senha = $_GET["senha"];
  
  $sql = "SELECT * FROM server WHERE nome = '$nome' AND senha = '$senha'";
  
  if($conn->query($sql) === TRUE) {
    echo("lol1.0");
  } else {
    echo("lol2.0");
  }
  
  $conn->close();
?>