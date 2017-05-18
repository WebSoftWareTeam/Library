<?php
   $dsn ='mysql:host=localhost;dbname = library';
   $user='root';
   $pass='';
   $options =array(
    PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
   );
   try{
   
  
   $book_title =$_POST['book_title'];
   $con = new PDO($dsn,$user,$pass,$options);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $Q= $con -> prepare("SELECT *  FROM `library`.`books` WHERE `book_title` LIKE '%{$book_title}%'");
   $Q->execute();
   $rows=$Q->fetchAll();
   
   
   }
   catch (PDOException $e)
   {
    echo 'Failed' . $e->getMessage();
   }
   ?>
   <!DOCTYPE html>
   <html>
   <head>
     <title>Library Member Login Form A Flat Responsive Widget Template :: W3layouts</title>

  <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- //Meta-Tags -->

  <!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

  <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <!-- //Fonts -->
     <link rel="stylesheet"  href="css_bs/bootstrap.css">
   </head>
   <body>
   <h1 style="color: white; font-family:Times;">Book Details</h1>
  <div class="container container w3layouts agileits">
    <div class="table-responsive register w3layouts agileits" style="color: white; font-family:Times;">
    <table class="table table-bordered">
      <tr>
          <td>BOOK ID</td>
          <td>BOOK TITLE</td>
          <td>BOOK AUTHOR</td>
          <td>BOOK EDITION</td>
          <td>Availability of book</td>
          <td>RATE</td>
          <td>publication_Date</td>
          <td>categories_Number</td>

      </tr>
      <?php
      foreach($rows as $row)
        echo "<tr>";
          echo"<td>".$row['book_id']."</td>";
          echo"<td>".$row['book_title']."</td>";
          echo"<td>".$row['Author']."</td>";
          echo"<td>".$row['Edition']."</td>";
          echo"<td>".$row['availability_of_book']."</td>";
          echo"<td>".$row['Rate']."</td>";
           echo"<td>".$row['publication_Date']."</td>";
          echo"<td>".$row['categories_number']."</td>";
         
          

        echo"</tr>";



      ?>
     
      </table>
    </div>

  </div>
<script src="js_bs/bootstrap.min.js"></script>
<script src="js_bs/jquery-3.2.1.min.js"></script>
   </body>
   </html>
   
  