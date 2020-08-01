<HEAD> 
     <META http-equiv="content-type" content="text/html; charset=utf-8"> 
 </HEAD> 
 <BODY> 

     <H1>신규 회원 입력</H1> 
     <FORM METHOD="post" ACTION="member_insert_result.php"> 

	이름 : <INPUT TYPE ="text" NAME="name" > <br> 
	전공 : <INPUT TYPE ="text" NAME="major"> <br>
	동아리 : <INPUT TYPE ="text" NAME="club" > <br>
	학번 : <INPUT TYPE ="text" NAME="num" > <br>
	구분(아래  표 참고) : <INPUT TYPE ="text" NAME="exe" > <br>
      <INPUT TYPE="submit" VALUE="회원 입력"> <br>
<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");

   $sql ="SELECT * FROM executive order by exe_id";
 
   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
   }
   else {
	   echo "member 데이터 검색 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
	   exit();
   } 
   
   echo "<h3> 구분 참고 </h3>";
   echo "<TABLE border=1>";
   echo "<TR>";
   echo "<TH>입력 숫자</TH><TH>지위</TH>";
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

<br> <a href='main.html'> <--초기 화면</a> <br>
   </FORM> 

 </BODY> 
 </HTML>