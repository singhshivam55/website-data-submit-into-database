<!-- php form or any data submit code in mysql databse using mysqli RDBMS with phpmyadmin -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    
  
  // Connecting to the Database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "databasename";

  // Create a connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Die if connection was not successful
  if (!$conn){
      die("Sorry we failed to connect: ". mysqli_connect_error());
  }
//   else{ 
//       echo "jay shree ram";
//   }


// making sql inser connection
  $sql="INSERT INTO `inert table name` ( `email`, `pass`) VALUES (''$name',  '$email', '$pass')";

  $result = mysqli_query($conn, $sql);
  if($result){
      echo "you data has been submited into data base";
  }
  else{
    die("Sorry we failed to sumbmit data: ". mysqli_connect_error());
  }
}
?>