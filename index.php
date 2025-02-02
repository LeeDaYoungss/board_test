<?php

  // 없으면 안되는 파일 가져오기 (DB연결 파일)
  require_once('config.php');

  $sql = "SELECT * FROM board";
  $result = mysqli_query($mysqli, $sql);

  /*
  print_r(mysqli_fetch_row($result));
  // Array ( [0] => 9 [1] => 홍길동 [2] => 안녕하세요 )
  */

  /* fetch associative array 
  while ($row = mysqli_fetch_row($result)) {
    printf($row[1]);
  }
  // 홍길동홍길동hong이도령hong
  */


  /*
  while ($row = mysqli_fetch_assoc($result)) {
    printf($row["username"]);
  }
  */

  /*
  while ($row = mysqli_fetch_array($result)) {
    printf($row[0]);
    printf($row["username"]);
  }
  */

  // 리스트가 나와야 함

  $list = '';

  while ($row = mysqli_fetch_object($result)) {
    // printf($row->username);
    $list = $list."<li><a href='view.php?idx={$row->idx}'>{$row->username}</a></li>";
  }
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - boardTest</title>
</head>
<body>
  <h1>BoardTest</h1>
  <ul>
    <?= $list; ?>
<!--     
    <li><a href="">글 제목1</a><a href="">수정</a><a href="">삭제</a></li> 
    -->

  </ul>
  <p>
    <a href="write.php">글쓰기</a>
  </p>
  <hr>
  <form action="">
    <input type="search">
    <button>검색</button>
  </form>
</body>
</html>