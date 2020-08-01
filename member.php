 <HTML> 
 <HEAD> 
    <META http-equiv="content-type" content="text/html; charset=utf-8"> 
 </HEAD> 
 <BODY> 
   
 <h1> 총동아리 전체 회원 목록 </h1>
<FORM METHOD="get" ACTION="member_update.php"> 
         빠른 수정 - 회원 학번 : <INPUT TYPE ="text" NAME="num"> 
       <INPUT TYPE="submit" VALUE="수정"> 
    </FORM>
    <FORM METHOD="get" ACTION="member_delete.php"> 
        빠른 삭제 - 회원 학번 : <INPUT TYPE ="text" NAME="num"> 
        <INPUT TYPE="submit" VALUE="삭제"> 
    </FORM> 
    
 </BODY> 
 </HTML>

<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");

   $sql ="SELECT * FROM member order by num";
 
   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
   }
   else {
	   echo "member 데이터 검색 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	   exit();
   } 

   
   echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>소속</TH><TH>이름</TH><TH>전공</TH><TH>학번</TH>";
   echo "</TR>";
   
   while($row = mysqli_fetch_array($ret)) {
	  echo "<TR>";
	  echo "<TD>", $row['club'], "</TD>";
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
