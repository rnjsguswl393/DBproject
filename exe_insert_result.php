<?php
   $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");
   $exe_id = $_POST["exe_id"];
   $position = $_POST["position"];
   
   $sql =" INSERT INTO executive VALUES('".$exe_id."','".$position."')";
   
   $ret = mysqli_query($con, $sql);
 
    echo "<h1> 신규 직위 입력 결과 </h1>";
   if($ret) {
	   echo  $position."직위가 성공적으로 입력됨.";
   }
   else {
	   echo "데이터 입력 실패!!!"."<br>";
	   echo "실패 원인 :".mysqli_error($con);
   } 
   mysqli_close($con);
   
   echo "<br> <a href='exe_set.php'> <--직위표 보기</a> ";
?>
