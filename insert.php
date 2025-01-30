<?php
  require_once('config.php');

  $username = $_POST['username'];
  $usermsg = $_POST['usermsg'];

  $sql = "INSERT INTO board (username,usermsg) VALUES('$username', '$usermsg')";

  mysqli_query($mysqli, $sql);
?>