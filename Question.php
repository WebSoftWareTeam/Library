<?php
   $dsn ='mysql:host=localhost;dbname = databs';
   $user='root';
   $pass='';
   $options =array(
    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
   );
   try{
   $borrower_id =$_POST['borrower_id'];
   $borrower_name =$_POST['borrower_name'];
   $borrower_Email =$_POST['borrower_Email'];
   $borrower_problem =$_POST['borrower_problem'];
   $con = new PDO($dsn,$user,$pass,$options);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $Q ="INSERT INTO `databs`.`problems` (`borrower_id`, `borrower_name`, `borrower_Email`, `borrower_problem`)  
  VALUES ('$borrower_id','$borrower_name','$borrower_Email','$borrower_problem')";
   $con->exec($Q);
   
   echo "question sent successfully"; 
   }
   catch (PDOException $e)
   {
    echo 'Failed' . $e->getMessage();
   }