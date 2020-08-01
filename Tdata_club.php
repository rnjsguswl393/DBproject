<?php 
     $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");

     echo "MySQL 접속 완전히 성공!!<br><br>";
   
    $sql ="
      INSERT INTO club VALUES 
        (1, '멋쟁이사자처럼', '2013'), 
        (2, '이니샤', '2008'), 
        (3, '벨벳시대', '2014'), 
        (4, '소녀레드',2007),  
        (5, '주슈퍼니', '2005') ";
  
   $ret = mysqli_query($con, $sql);
  
    if($ret) {
     echo "club 테이블에  성공적으로 입력됨.";
    } 
    else { 
    echo "club 테이블 데이터 입력 실패!!!"."<BR>";
    echo "실패 원인 :".mysqli_error($con);
    } 


   mysqli_close($con);
 ?>
