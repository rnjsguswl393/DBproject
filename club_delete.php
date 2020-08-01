<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");
   $sql ="SELECT * FROM club WHERE c_name='".$_GET['c_name']."'";

   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['c_name']." 동아리가 없음!!!"."<br>";
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
   $row = mysqli_fetch_array($ret);
   $c_name = $row['c_name'];
   $c_year = $row["c_year"];
   
?>


<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 동아리 삭제 </h1>
<FORM METHOD="post"  ACTION="club_delete_result.php">
	회원 정보 또한 목록에서 모두 삭제됩니다.<br>
	정말 아래 동아리를 삭제하겠습니까?	<br><br>
	동아리 이름 : <INPUT TYPE ="text" NAME="c_name" VALUE=<?php echo $c_name ?> READONLY> <br>
	개설    년도 : <INPUT TYPE ="text" NAME="c_year" VALUE=<?php echo $c_year ?> READONLY> <br> 
	<BR><BR>
	
	<INPUT TYPE="submit"  VALUE="동아리 삭제">
	<br> <a href='club.php'> <--아니요</a> 
</FORM>

</BODY>
</HTML>