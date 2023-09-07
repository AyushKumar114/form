<?php
  $severname = "localhost";
  $username  = "root";
  $password  = "";
  $dbname    ="record";

  $connection = mysqli_connect($severname,$username,$password,$dbname);

  if($connection)
  {
    echo "connection ok";
  }
  else{
    echo "connection failed";
  }
?>