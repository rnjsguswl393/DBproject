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
   
   echo "<h1> 직위 구분 설정(공통) </h1>";
   echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>구분 숫자</TH><TH>직위</TH>";
   echo "</TR>";

   while($row = mysqli_fetch_array($ret)) {
	  echo "<TR>";
	  echo "<TD>", $row['exe_id'], "</TD>";
	  echo "<TD>", $row['position'], "</TD>";

	  echo "<TD>", "<a href='exe_update.php?exe_id=", $row['exe_id'], "'>수정</a></TD>";
	  echo "<TD>", "<a href='exe_delete.php?position=", $row['position'], "'>삭제</a></TD>";

	  echo "</TR>";	  
   }   

   mysqli_close($con);
   echo "</TABLE>"; 
   echo "<a href='exe_insert.php'> 직위 추가하기</a> ";
   echo "<br><br> <a href='main.html'> <--초기 화면</a> ";
?>