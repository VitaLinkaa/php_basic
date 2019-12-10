<?php
$name = $_POST['fname'];
$rno = $_POST['id'];

$con = mysqli_connect("localhost","root","", $db);
$db= mysqli_select_db("school", $con);
$sql = "SELECT address from students where name='".$name."' AND rno=".$rno;
$result = mysqli_query($sql,$con);
$row=mysqli_fetch_array($result);
echo $row['address'];
?>