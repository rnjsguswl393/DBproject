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
   $club_id = $row['club_id'];
   $c_name = $row["c_name"];
   $c_year = $row["c_year"];
   
?>
<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>
<h1> 동아리 정보 수정 </h1>
<FORM METHOD="post"  ACTION="club_update_result.php">
	아이디 : <INPUT TYPE ="text" NAME="club_id" VALUE=<?php echo $club_id ?> > <br>
	이름 : <INPUT TYPE ="text" NAME="c_name" VALUE=<?php echo $c_name ?>> <br> 
	개설 년도 : <INPUT TYPE ="text" NAME="c_year" VALUE=<?php echo $c_year ?>><br>
	<BR><BR>
	<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>
