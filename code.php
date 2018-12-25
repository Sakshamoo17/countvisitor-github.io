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
