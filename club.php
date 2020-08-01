<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");

   $sql ="SELECT * FROM club order by c_year";
 
   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
   }
   else {
	   echo "데이터 검색 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	   exit();
   } 
   
   echo "<h1> 현재 활동 중인 동아리 입니다 </h1>";
   echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>동아리명</TH><TH>개설 년도</TH>";
   echo "</TR>";
   
   while($row = mysqli_fetch_array($ret)) {
	  echo "<TR>";
	  echo "<TD>", $row['c_name'], "</TD>";
	  echo "<TD>", $row['c_year'], "</TD>";

	  echo "<TD>", "<a href='update.php?c_name=", $row['c_name'], "'>수정</a></TD>";
	  echo "<TD>", "<a href='club_delete.php?c_name=", $row['c_name'], "'>삭제</a></TD>";
	  echo "<TD>", "<a href='select.php?club=", $row['c_name'], "'>회원보기</a></TD>";
	  echo "</TR>";	  
   }   
   mysqli_close($con);
   echo "</TABLE>"; 
   echo "<br> <a href='main.html'> <--초기 화면</a> ";
?>