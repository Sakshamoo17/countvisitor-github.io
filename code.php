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
