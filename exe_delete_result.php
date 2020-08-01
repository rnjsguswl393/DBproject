<?php  $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");
   
   $position = $_POST["position"];
     
   $sql ="DELETE FROM executive WHERE position='".$position."'";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 직위 삭제 결과 </h1>";
   if($ret) {
	   echo $position." 직위가 성공적으로 삭제됨..";
   }
   else {
	   echo "데이터 삭제 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br><br> <a href='exe_set.php'> <--직위표 보기</a> ";
?>
