<?php  $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");
   
   $num = $_POST["num"];
     
   $sql ="DELETE FROM member WHERE num='".$num."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 회원 삭제 결과 </h1>";
   if($ret) {
	   echo $num." 회원이 성공적으로 삭제됨..";
   }
   else {
	   echo "데이터 삭제 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br><br> <a href='main.html'> <--초기 화면</a> ";
?>
