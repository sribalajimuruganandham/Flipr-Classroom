<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
   
    <div class="container" style="border: solid black 3px;background-color:#ff491c;height:200px;">
        <h1 style="color:white";>TABLE</h1>
    </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
</body>
</html>
<?php

include "config.php";

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
  
}






$q1=("select * from timetable");
$result = $conn->query($q1);


 if ($result !== false && $result->num_rows > 0) 
{
 while($result !== false && $row = $result->fetch_assoc()) 
 {    
       if($_POST['kk']==$row['code'])
       {


       echo "<img width='300px' height='300px' src='data:image;base64,{$row['time_table']}' alt=$row[code]>";
    
    
   }
 }}
  



  $conn->close();
  

  ?>