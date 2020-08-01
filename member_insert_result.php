<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");

   $name = $_POST["name"];
   $major = $_POST["major"];
   $club = $_POST["club"];
   $num= $_POST["num"];
   $exe = $_POST["exe"];
   
   $sql =" INSERT INTO member VALUES('".$name."','".$major."','".$club."','".$num."','".$exe."')";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 신규 회원 입력 결과 </h1>";
   if($ret) {
	   echo $name."회원이 성공적으로 등록됨.";
   }
   else {
	   echo "데이터 입력 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='main.html'> <--초기 화면</a> ";
?>
