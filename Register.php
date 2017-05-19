<?php
   $dsn ='mysql:host=localhost;dbname = library';
   $user='root';
   $pass='';
   $options =array(
    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
   );
   try{
   
   $UserName =$_POST['UserName'];
   $passward =$_POST['Password'];
   $Email =$_POST['Email'];
   $FullName =$_POST['FullName'];
   $hashedPass = sha1($passward);
   
   $con = new PDO($dsn,$user,$pass,$options);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $Q ="INSERT INTO `library`.`users` (`UserName`, `passward`, `Email`, `FullName`) 
   VALUES ('$UserName','$hashedPass','$Email','$FullName')";
   $con->exec($Q);
   echo "operation completed successfully";
   
   }
   catch (PDOException $e)
   {
    echo 'Failed' . $e->getMessage();
   }