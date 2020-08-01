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
   $num = $row['num'];
   $name = $row["name"];
   
?>


<HTML>
<HEAD>
<META http-equiv="content-type" content="text/html; charset=utf-8">
</HEAD>
<BODY>

<h1> 회원 삭제 </h1>
<FORM METHOD="post"  ACTION="member_delete_result.php">
	학번 : <INPUT TYPE ="text" NAME="num" VALUE=<?php echo $num ?> READONLY> <br>
이름 : <INPUT TYPE ="text" NAME="name" VALUE=<?php echo $name ?> READONLY> <br> 
	<BR><BR>
	위 회원을 삭제하겠습니까?	
	<INPUT TYPE="submit"  VALUE="회원 삭제">
</FORM>

</BODY>
</HTML>