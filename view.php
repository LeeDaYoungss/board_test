<?php
  require_once('config.php');

  // GET방식으로 넘어옴
  $num = $_GET['idx'];

  $sql = "SELECT * FROM board WHERE idx = {$num}";
  $result = mysqli_query($mysqli, $sql);

  // print_r(mysqli_fetch_object($result))
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View - boardTest</title>
</head>
<body>
  <?php
  if($row = mysqli_fetch_object($result)){
  ?>
  <h1>글 상세</h1>
  <h2>글쓴이 : <?= $row->username; ?></h2>
  <h3>글 내용</h3>
  <div>
  <?= $row->usermsg; ?>
  </div>
  <hr>
  <a href="update.php?idx=<?= $num; ?>">수정</a> / 
  <a href="delete.php?idx=<?= $num; ?>">삭제</a>
  <?php
  } else {
    echo "<script>alert('해당글이 없습니다'); location.href='index.php';</script>";
  }
  ?>
</body>
</html>