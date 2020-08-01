<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");
   $sql ="SELECT * FROM executive WHERE exe_id='".$_GET['exe_id']."'";
 
   $ret = mysqli_query($con, $sql);   
   if($ret) {
	   $count = mysqli_num_rows($ret);
	   if ($count==0) {
		   echo $_GET['exe_id']." 해당 번호가 없음!!!"."<br>";
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

   $exe_id = $row["exe_id"];
   $position = $row["position"];
   
?>
<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>
<h1> 직위 정보 수정 </h1>
<FORM METHOD="post"  ACTION="exe_update_result.php">
	
	구분 숫자 : <INPUT TYPE ="text" NAME="exe_id" VALUE=<?php echo $exe_id ?>> <br> 
	직위 : <INPUT TYPE ="text" NAME="position" VALUE=<?php echo $position ?>> <br>
	<br> <a href='exe_set.php'> <--이전 화면</a>
<BR><BR>	
<INPUT TYPE="submit"  VALUE="정보 수정">
</FORM>
