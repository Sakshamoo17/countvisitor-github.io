# countvisitor-github.io
how to count visitors on website in php.

Code For php file

<?php
$host='localhost'; 
 $user='root';
 $pass='';
 $db='test';
 try{ 
      $DBH=new pdo ("mysql:host=$host; dbname=$db", $user, $pass);
      }catch(PDOException $e){ 
           echo"Not Connected..".$e->getMessage(); 
      } 
      // Get Ip
       $ip = $_SERVER['REMOTE_ADDR'];
       // Check if this ip exist in out data 
       $sql="SELECT ip FROM visitor WHERE ip='$ip'";
       $Check=$DBH ->prepare($sql); 
       $Check->execute();
       $CheckIp=$Check->rowCount();
if ($CheckIp==0) {
$query="INSERT INTO visitor(id, ip) VALUES(NULL, '$ip')"; 
$insertIp=$DBH ->prepare($query); 
$insertIp->execute();

}

