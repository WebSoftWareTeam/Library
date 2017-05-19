<?php
   $dsn ='mysql:host=localhost;dbname = databs';
   $user='root';
   $pass='';
   $options =array(
    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
   );
   try {
   $borrower_id =$_POST['Borrower_id'];
   $librarian_id =$_POST['Librarian_id'];
   $book_id =$_POST['Book_id'];
   $borrow_transaction =$_POST['Borrow_transaction'];
   $borrowed_datetime =$_POST['Borrowed_datetime'];
   $returned_datetime =$_POST['Returned_datetime'];
   $contact_data_id =$_POST['Contact_data_id'];
   $con = new PDO($dsn,$user,$pass,$options);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $Q1 = " UPDATE `databs`.`borrow_transaction` SET `borrower_id`='$borrower_id',`librarian_id`='$librarian_id',`book_id`='$book_id',
   `borrow_transaction`='$borrow_transaction',`borrowed_datetime`='$borrowed_datetime',`returned_datetime`='$returned_datetime',
   `contact_data_id`='$contact_data_id'";
   $con->exec($Q1);
   echo "Successfully updated";  
   }
   catch (PDOException $e)
   {
    echo 'Failed' . $e->getMessage();
   }
?>   