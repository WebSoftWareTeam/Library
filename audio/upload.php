<?php

if(isset($_POST['save_audio']) && $_POST['save_audio']=="Upload Audio")

{

	$dir='uploads/';
	$audio_path=$dir.basename($_FILES['audioFile']['name']);
   if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path))

   {

   	  echo'uploaded successfully.';
   	  saveAudio($audio_path);
   	  displayAudios();
   }

}


function displayAudios()
{

   $conn=mysql_connect('localhost','root','','databs');
  if(!$conn)
  {
  	die('server not connected');
  }
   
   $query=" select * from audios";
   $r=mysqli_query($conn,$query);
   while ($row=mysqli_fetch_array($r)) {

       echo $row['filename'];
       echo "<br/>";
  
   }
    
    mysql_close($conn);

}

function saveAudio($fileName)
{

  $conn=mysql_connect('localhost','root','','databs');
  if(!$conn)
  {
  	die('server not connected');
  }
   
   $query="insert into audios(filename)values('{$filename}')";

    mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn)>0)

    {
    	echo"audio file path saved in database.";
    }

      mysql_close($conn);
}


?>