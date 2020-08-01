<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");
   $sql ="SELECT * FROM executive order by exe_id";
 
   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
   }
   else {
	   echo "데이터 검색 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	   exit();
   } 
   
   echo "<h1> 직위 구분 (공통) </h1>";
   echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>구분 숫자</TH><TH>직위</TH>";
   echo "</TR>";
   
   while($row = mysqli_fetch_array($ret)) {
	  echo "<TR>";
	  echo "<TD>", $row['exe_id'], "</TD>";
	  echo "<TD>", $row['position'], "</TD>";
	  echo "</TR>";	  
   }   
   mysqli_close($con);
   echo "</TABLE>"; 
?>