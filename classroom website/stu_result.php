





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


    <!-- Login -->
    <section>
        <div id="login" class="login-whole">
            <div class="card-wrapper ">
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title text-center">RESULT</h4>
                        <form method="POST" class="my-login-validation" novalidate=""  action="<?php echo $_SERVER['PHP_SELF']?>">
                        
                        <div class="form-group">
                                <label for="email">E-MAIL</label>
                                <input id="email"  class="form-control" name="email" value="" required autofocus>
                              
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="type">TYPE</label>
                               <select id="type"  class="form-control" name="type" value="" required><option value="assignment">ASSIGNMENT</option><option value="test">TEST</option></select>
                               
                            </div>
                                  
                            
                        <div class="form-group">
                                <label for="question_number">QUESTION NUMBER</label>
                                <input id="question_number" class="form-control" name="question_number" value="" required autofocus>
                              
                            </div>
                   
                


                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block btn-index">
										MARK
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
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
</body>
</html>
      
      <?php
include 'config.php';
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
  
}




if(!empty($_POST['email']))
{

$q1=("select * from result");
$result = $conn->query($q1);


if ($result !== false && $result->num_rows > 0) 

while($result !== false && $row = $result->fetch_assoc()) 
{
    {
      if($_POST['type']==$row['type']&&$_POST['email']==$row['email']&&$_POST['question_number']==$row['question_number'])
      {
    echo "
    <div class='container' style='border: solid black 1px;margin-top: 2%;'>
     <table ><th>CODE</th><th>E-MAIL</th><th>TYPE</th><th>MARK</th>
     <tr><td>$row[code]</td><td>$row[email]</td><td>$row[type]</td><td>$row[mark]</td></tr></table>
    
  </div>";
    
    
  }
}}
}
  $conn->close();
  
  ?>