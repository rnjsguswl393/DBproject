<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");

   $sql ="SELECT name,major,num,position FROM member,executive where exe=exe_id and num='".$_GET['num']."'order by exe";
 
   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo "해당 학번의 회원이 없음!!!";
		   echo "<br> <a href='main.html'> <--초기 화면</a> ";
		   exit();	
	   }		   
   }
   else {
	   echo "데이터 검색 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	   echo "<br> <a href='main.html'> <--초기 화면</a> ";
	   exit();
   }   
  


   echo "<h1> 회원 검색 결과 </h1>";
   echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>구분</TH><TH>이름</TH><TH>전공</TH><TH>학번</TH>";
   echo "</TR>";
   
   while($row = mysqli_fetch_array($ret)) {
	  echo "<TR>";
	  echo "<TD>", $row['position'], "</TD>";
	  echo "<TD>", $row['name'], "</TD>";
	  echo "<TD>", $row['major'], "</TD>";
	  echo "<TD>", $row['num'], "</TD>";

	  echo "<TD>", "<a href='member_update.php?num=", $row['num'], "'>수정</a></TD>";
	  echo "<TD>", "<a href='member_delete.php?num=", $row['num'], "'>삭제</a></TD>";
	  echo "</TR>";	  
   }   
   mysqli_close($con);
   echo "</TABLE>"; 
   echo "<br> <a href='main.html'> <--초기 화면</a> ";
?>
