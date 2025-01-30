<?php

$mysqli = mysqli_connect('localhost', 'boardtest', 'qwe12345', 'boardtest');

if (mysqli_connect_errno()) {
  echo "DB연결에 실패했습니다".mysqli_connect_error();
} 
// else {
//   echo "DB연결 성공";
// }

?>
