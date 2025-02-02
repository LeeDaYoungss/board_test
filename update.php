<?php
  require_once('config.php');
  $num = $_GET['idx'];

  $sql = "SELECT * FROM board WHERE idx = {$num}";
  $result = mysqli_query($mysqli, $sql);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update - boardTest</title>
</head>
<body>
  <h1>글 수정</h1>
  <?php
  if($row = mysqli_fetch_object($result)){
  ?>
  <form action="update_insert.php" method="POST">
    <input type="hidden" name="idx" value="<?= $num; ?>">
    <p>
      <label for="username">이름 : </label>
      <input type="text" id="username" name="username" value="<?= $row->username; ?>" require>
    </p>
    <p>
      <label for="usermsg">메시지 : </label>
      <textarea name="usermsg" id="usermsg" cols="30" rows="usermsg"><?= $row->usermsg; ?></textarea>
    </p>
    <button>전송</button>
  </form>
  <?php
  } else {
    echo "<script>alert('해당글이 없습니다'); location.href='index.php';</script>";
  }
  ?>
  <hr>
  <p>
    <a href="index.php">홈으로</a>
  </p>
</body>
</html>