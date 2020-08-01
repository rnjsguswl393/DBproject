<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");

   $name = $_POST["name"];
   $major = $_POST["major"];
   $club = $_POST["club"];
   $num= $_POST["num"];
   $exe = $_POST["exe"];
   
   $sql =" UPDATE member SET  name='".$name."', major='".$major."', club='".$club."', exe='".$exe."' WHERE num='".$num."' ";

   $ret = mysqli_query($con, $sql);

    echo "<h1> 회원 정보 수정 결과 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";

   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='member.php'> <--목록 보기</a> ";
?>
