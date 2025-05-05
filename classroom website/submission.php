<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>

<body>
    <?php include "top.php" ?>

    <!-- Login -->
    <section>
        <div id="login" class="login-whole">
            <div class="card-wrapper ">
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title text-center">SUBMISSIONS</h4>
                        <form method="POST" class="my-login-validation" novalidate=""  action="<?php echo $_SERVER['PHP_SELF']?>  "enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="code">CLASS CODE</label>
                                <input id="code"  class="form-control" name="code" value="" required autofocus>
                              
                            </div>
                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block btn-index">
                                    ENTER
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
</body>
</html>
      
      <?php
include "config.php";

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
  
}



if(!empty($_POST["code"]))
{
$q1=("select * from submit");
$result = $conn->query($q1);


if ($result !== false && $result->num_rows > 0) 
{
  
  
  while($result !== false && $row = $result->fetch_assoc()) 
  {
      if($_POST['code']==$row['code'])
    echo "
    <div class='container' style='border: solid black 1px;margin-top: 2%;'>
    <h3> $row[type] </h3>
    <img width='300px' height='300px' src='data:image;base64,{$row['answer']}' >

    <p>Submission Time :$row[submit_time]   </p>
 
    
  </div>";
    
    
  }
}}
  
  $conn->close();
  
  ?>