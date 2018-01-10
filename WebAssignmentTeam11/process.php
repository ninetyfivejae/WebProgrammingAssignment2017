<?php
$conn = mysqli_connect("localhost", "root", "000000");
mysqli_select_db($conn, "webprogramming");
$result  = mysqli_query($conn, $sql);
$sql = "INSERT INTO comment (username, comment, commenttime) VALUES('".$_POST['username']."', '".$_POST['comment']."', now())";
$result = mysqli_query($conn, $sql);

//WRITE작업 완료 후, 다시 홈페이지로 이동
header('Location: WriteComments.php');
?>
