<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");
   $club_id = $_POST["club_id"];
   $c_name = $_POST["c_name"];
   $c_year = $_POST["c_year"];
   
   $sql =" INSERT INTO club VALUES('".$club_id."','".$c_name."','".$c_year."')";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 신규 동아리 입력 결과 </h1>";
   if($ret) {
	   echo $c_name."동아리가 성공적으로 입력됨.";
   }
   else {
	   echo "데이터 입력 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='club.php'> <--동아리 목록 보기</a> ";
?>
