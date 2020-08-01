<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");
   $sql ="SELECT * FROM member WHERE num='".$_GET['num']."'";
 
   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['num']." 학번의 회원이 없음!!!"."<br>";
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

   $name = $row["name"];
   $major = $row["major"];
   $club = $row["club"];
   $num= $row["num"];
   $exe = $row["exe"];
?>
<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>
<h1> 회원 정보 수정 </h1>
<FORM METHOD="post"  ACTION="member_update_result.php">
	
	이름 : <INPUT TYPE ="text" NAME="name" VALUE=<?php echo $name ?>> <br> 
	전공 : <INPUT TYPE ="text" NAME="major" VALUE=<?php echo $major ?>> <br>
	동아리 : <INPUT TYPE ="text" NAME="club" VALUE=<?php echo $club ?>> <br>
	학번 : <INPUT TYPE ="text" NAME="num" VALUE=<?php echo $num ?>> <br>
	구분 <a href='exe_show.php'> (표 참고) </a> : <INPUT TYPE ="text" NAME="exe" VALUE=<?php echo $exe ?>> <br>
	<br> <a href='member.php'> <--전체회원 목록</a>
<BR><BR>	
<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>
