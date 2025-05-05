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

  <div class="container" style="border: solid black 3px;background-color:#ff491c;margin-top: 3% ;padding:3% 2%;height:200px;background-size: cover;">
    <h1 style="color:white">ASSIGNMENT</h1>
  </div>
  
  
  <button style='visibility:hidden'; onclick="sam_click()"></button>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
</body>


       
   
  <?php
include 'config.php';
              
              if ($conn->connect_error) 
              {
                die("Connection failed: " . $conn->connect_error);
                
              }
              
              
              
              
              
              
              $q1=("select * from assignment");
              $result = $conn->query($q1);
              
              $date1=date("d-m-y");
              if ($result !== false && $result->num_rows > 0) 
{
  
  
  while($result !== false && $row = $result->fetch_assoc()) 
  {
    $expiry_date =$row['end_date'];
    $today = date('d-m-Y',time()); 
    $exp = date('d-m-Y',strtotime($expiry_date));
    $expDate =  date_create($exp);
    $todayDate = date_create($today);
    $diff =  date_diff($todayDate, $expDate);
    
    $k=$diff->format("%R%a");
    

    
    

  
   if($_POST['kk']==$row['subject_name'])
   {
      if($diff->format("%R%a")>0)
      {
        echo "
    <div class='container' style='border: solid black 1px;margin-top: 2%;'>
    <h3>$row[assi_number].$row[question]</h3>
    <form method='POST' action='submit.php' enctype='multipart/form-data'>
    <input style='visibility:hidden' name='code' value=$row[subject_name]  ></input>
    <input id='answer' name='answer' type=file ></input>
    <input  style='visibility:hidden'  id='type' name='type' value='assignment'  ></input>
    <input type=submit ></input>
    </form>
    <p>Due on :$row[end_date]    $k days remaining</p>
    
    </div>";
    
  }
  else{
    
    echo "
    <div class='container' style='border: solid black 1px;margin-top: 2%;'>
      <h3>$row[assi_number].$row[question]</h3>
      <p style='color:red;'>Due on :$row[end_date]  Ended</p>
      
                  
    </div>";
    }
    
  
}}}
  $conn->close();
  
  ?>