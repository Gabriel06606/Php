<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$Nome = mysqli_real_escape_string($conn, $_REQUEST['Nome']);
$Sobrenome = mysqli_real_escape_string($conn, $_REQUEST['Sobrenome']);
$Usuario = mysqli_real_escape_string($conn, $_REQUEST['Usuario']);


$sql = "INSERT INTO usuarios (nome, sobrenome, usuario)
VALUES ($Nome, '$Sobrenome', '$Usuario')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

/*
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
*/


?>