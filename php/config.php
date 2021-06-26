<?php
  $conn = mysqli_connect("localhost", "root", "", "chat");
  if(!$conn){
    echo "Database connected error".mysqli_connect_error();
  }
?>