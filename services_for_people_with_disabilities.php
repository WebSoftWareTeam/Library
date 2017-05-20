  <?php

    //make connection
    mysql_connect('localhost','root','');
    
    //select db
    mysql_select_db('databs');
    $sql = "SELECT * FROM audios";

    $records=mysql_query( $sql);

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
   <h1 style="color: white; font-family:Times;">Available audio books</h1>
  <div class="container container w3layouts agileits">
    <div class="table-responsive register w3layouts agileits" style="color: white; font-family:Times;">
    <table class="table table-bordered">
        <tr>
          <th>BOOK ID</th>
          <th>BOOK Name</th>
        </tr>
        
      <?php
       
       while ($audio=mysql_fetch_assoc($records)) {
         
         echo"<tr>";

         echo"<td>".$audio['id']."</td>";
         echo"<td>".$audio['filename']."</td>";

         echo"</tr>";

       }


      ?>
     
      </table>
    </div>

  </div>
<script src="js_bs/bootstrap.min.js"></script>
<script src="js_bs/jquery-3.2.1.min.js"></script>
   </body>
   </html>
   
  