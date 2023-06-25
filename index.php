<?php
  $servername = "locslhost";
  $username = "Test";
  $password = "Test";
  $dbname = "data";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  if($conn->connection_error) {
    die("lol");
  }
  
  $nome = $_POST["username"];
  $senha = $_POST["password"];
  
  $sql = "SELECT * FROM server WHERE username = '$username' AND password = '$password'";
  
  if($conn->query($sql) === TRUE) {
    echo("lol1.0");
  } else {
    echo("lol2.0");
  }
  
  $conn->close();
?>