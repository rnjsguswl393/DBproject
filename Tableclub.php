<?php 
     $con = mysqli_connect("localhost", "root", "0309", "clubmember") or die("MySQL 접속 실패!!");
     $sql = "CREATE TABLE IF NOT EXISTS club
        ( club_id int NOT NULL PRIMARY KEY, 
          c_name CHAR(20), 
          c_year CHAR(20)
        )";
  
   $ret = mysqli_query($con, $sql);
  
   if($ret) { 
     echo "club 테이블이 성공적으로 생성됨..";
    } 
   else { 
     echo "club 테이블 생성 실패!!!"."<BR>";
     echo "실패 원인 :".mysqli_error($con);
    } 

   mysqli_close($con);
 ?>
