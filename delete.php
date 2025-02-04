<?php
  require_once('config.php');
  $num = $_GET['idx'];

  $username = $_POST['username'];
  $usermsg = $_POST['usermsg'];

  $sql = "DELETE FROM board WHERE idx={$num}";

  // 실행 문법
  $result = mysqli_query($mysqli, $sql);

  if($result == false){
    echo "<script>alert('삭제 실패'); history.back();</script>";
    error_log(mysqli_error($mysqli));
  }else{
    echo "<script>alert('삭제 성공'); location.href='./index.php';</script>";
  }
?>