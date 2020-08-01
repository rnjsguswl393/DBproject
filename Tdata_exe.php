<?php 
     $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");

     echo "MySQL 접속 완전히 성공!!<br><br>";
   
    $sql ="
      INSERT INTO executive VALUES 
        (0, '일반회원'), 
        (1, '회장'),
        (2, '부회장'),
        (3, '총무'),
        (4, '서기') ";
  
   $ret = mysqli_query($con, $sql);
  
    if($ret) {
     echo "executive 테이블에  성공적으로 입력됨.";
    } 
    else { 
    echo "executive 테이블 데이터 입력 실패!!!"."<BR>";
    echo "실패 원인 :".mysqli_error($con);
    } 


   mysqli_close($con);
 ?>
