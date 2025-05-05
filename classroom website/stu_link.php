<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" style="border: solid black 3px;background-color:#ff491c;height:200px;">
        <h1 style="color:white";>MEET</h1>
    </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
</body>
</html>
      
      <?php
include 'config.php';

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
  
}






$q1=("select * from link");
$result = $conn->query($q1);


if ($result !== false && $result->num_rows > 0) 

while($result !== false && $row = $result->fetch_assoc()) 
{
    {
      if($_POST['kk']==$row['subject_name'])
      {
    echo "
    <div class='container' style='border: solid black 1px;margin-top: 2%;'>
    <a href='$row[link]'target='_blank' ><button class='btn btn-primary btn-block btn-index'>join</button></a>
    <p>Date :$row[date]  &nbsp;&nbsp;&nbsp; $row[start_time] - $row[end_time]  </p>
    
  </div>";
    
    
  }
}}
  
  $conn->close();
  
  ?>