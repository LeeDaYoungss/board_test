<?php
  require_once('config.php');

  $keyword = $_GET['keyword'];

  $sql = "SELECT * FROM board WHERE 1=1 and (username like '%$keyword%' or usermsg like '%$keyword%')";
  $result = mysqli_query($mysqli, $sql);

  $list = '';

  while ($row = mysqli_fetch_object($result)) {
    $list = $list."<li><a href='view.php?idx={$row->idx}'>{$row->username}</a></li>";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>검색 결과 - boardTest</title>
</head>
<body>
  <h1>검색결과</h1>
  <ul>
    <?php
      if($list != ''){
        echo $list;
      }else{
        echo "검색결과가 없습니다";
      }
    ?>
    <?= $list; ?>
  </ul>
  <hr>
  <a href="index.php">홈</a>
</body>
</html>