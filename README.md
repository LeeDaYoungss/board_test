#Board TEST
## Legacy PHP, Precedual Style

+ config.php : db 접속
+ index.php : 검색, 글 조회
+ write.php : 글쓰기 페이지
+ insert.php : DB에 글 입력
+ view.php : 글 상세페이지
+ modify.php : 글 수정페이지
+ delete.php - 글 삭제
<?php

$mysqli = mysqli_connect('localhost', 'boardtest', 'qwe12345', 'boardtest');

if (mysqli_connect_errno()) {
  echo "DB연결에 실패했습니다".mysqli_connect_error();
}else {
  echo "DB연결 성공";
}

?>
