<?php
   $dsn ='mysql:host=localhost;dbname = library';
   $user='root';
   $pass='';
   $options =array(
    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
   );
   try{
   $book_id =$_POST['book_id'];
   $book_title =$_POST['book_title'];
   $Author =$_POST['Author'];
   $Edition =$_POST['Edition'];
   $availability_of_book =$_POST['availability_of_book'];
   $Rate =$_POST['Rate'];
   $publication_Date =$_POST['publication_Date'];
   $categories_number =$_POST['categories_number'];
   $con = new PDO($dsn,$user,$pass,$options);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $Q ="INSERT INTO `library`.`books` (`book_id`, `book_title`, `Author`, `Edition`, `availability_of_book`, `Rate`, `publication_Date`,
    `categories_number`) 
  VALUES ('$book_id','$book_title','$book_id','$Author','$Edition','$availability_of_book','$Rate','$categories_number')";
   $con->exec($Q);
   
   echo "operation completed successfully"; 
   }
   catch (PDOException $e)
   {
    echo 'Failed' . $e->getMessage();
   }