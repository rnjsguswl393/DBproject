<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");

   $club_id = $_POST["club_id"];
   $c_name = $_POST["c_name"];
   $c_year = $_POST["c_year"];

   
   $sql =" UPDATE club SET club_id='".$club_id."', c_name='".$c_name."', c_year='".$c_year."' WHERE c_name='".$c_name."' ";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 동아리 정보 수정 결과 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";
   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='club.php'> <--동아리 목록</a> ";
?>
