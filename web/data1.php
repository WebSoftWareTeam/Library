<?php
   $dsn ='mysql:host=localhost;dbname = library';
   $user='root';
   $pass='';
   $options =array(
    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
   );
   try{
   $borrower_id =$_POST['Borrower_id'];
   $librarian_id =$_POST['Librarian_id'];
   $book_id =$_POST['Book_id'];
   $borrow_transaction =$_POST['Borrow_transaction'];
   $borrowed_datetime =$_POST['Borrowed_datetime'];
   $returned_datetime =$_POST['Returned_datetime'];
   $contact_data_id =$_POST['Contact_data_id'];
   $con = new PDO($dsn,$user,$pass,$options);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $Q ="INSERT INTO `library`.`borrow_transaction` (`borrower_id`, `librarian_id`, `book_id`, `borrow_transaction`, `borrowed_datetime`, `returned_datetime`, `contact_data_id`) 
   VALUES ('$borrower_id','$librarian_id','$book_id','$borrow_transaction','$borrowed_datetime','$returned_datetime','$contact_data_id')";
   $con->exec($Q);
   
   echo "operation completed successfully"; 
   }
   catch (PDOException $e)
   {
    echo 'Failed' . $e->getMessage();
   }
?>   