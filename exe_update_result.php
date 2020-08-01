<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");

   $exe_id = $_POST["exe_id"];
   $position= $_POST["position"];
   
   $sql =" UPDATE executive SET exe_id='".$exe_id."', position='".$position."'  WHERE exe_id='".$exe_id."' ";

   $ret = mysqli_query($con, $sql);

    echo "<h1> 직위 정보 수정 결과 </h1>";
   if($ret) {
	   echo "데이터가 성공적으로 수정됨.";

   }
   else {
	   echo "데이터 수정 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='exe_set.php'> <--직위표 보기</a> ";
?>
