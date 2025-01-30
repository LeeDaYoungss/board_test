<?php

  // 없으면 안되는 파일 가져오기 (DB연결 파일)
  require_once('config.php');

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
    <li><a href="">글 제목1</a><a href="">수정</a><a href="">삭제</a></li>
    <li><a href="">글 제목1</a><a href="">수정</a><a href="">삭제</a></li>
    <li><a href="">글 제목1</a><a href="">수정</a><a href="">삭제</a></li>
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