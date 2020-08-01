<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");
   
   $c_name = $_POST["c_name"];
     
   $sql ="DELETE FROM member WHERE club in (select c_name from club where c_name='".$c_name."');";
   $sql.="DELETE FROM club WHERE c_name='".$c_name."' ";
   $ret = mysqli_multi_query($con, $sql);
 
    echo "<h1> 동아리 삭제 결과 </h1>";
   if($ret) {
	   echo $c_name." 동아리가 성공적으로 삭제됨..";
   }
   else {
	   echo "동아리 삭제 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br><br> <a href='club.php'> <--동아리 목록</a> ";
?>
