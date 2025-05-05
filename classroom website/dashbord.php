<!DOCTYPE html>
<html >
    <head>
        <title>Index</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
     </head>
    
    <body>
        <?php include "top.php"?>
        <button onclick='create()' class='btn btn-primary btn-block btn-index' style='margin-left:0%;'>
            CREATE
        </button>
    <script>
        
        function create()
        {
            a=document.getElementById("login");
            a.style.visibility="visible";
        }
        </script>
</body>
</html>
<?php
echo " 
<section>
    <div id='login' class='login-whole' style='  visibility: hidden;position:absolute;'>
        <div class='card-wrapper '>
            <div class='card fat'>
                <div class='card-body'>
                    <h4 class='card-title text-center'>CLASS</h4>
                    <form method='POST' class='my-login-validation' novalidate=' ' >
                        <div class='form-group'>
                            <label for='name' >NAME</label>
                            <input id='name'  class='form-control' name='name' value='' required autofocus>
                            
                        </div>
                        <div class='form-group'>
                            <label for='email'> E-MAIL</label>
                            <input id='email'  class='form-control'  name='email' value=$_GET[teacher] required autofocus>
                         
                        </div>
                        <div class='form-group'>
                            <label for='subject_name'>SUBJECT NAME</label>
                            <input id='subject_name'  class='form-control' name='subject_name' value='' required autofocus>
                            
                        </div>
                        
                        
                        
                        
                        <div class='form-group m-0'>
                            <button type='submit' class='btn btn-primary btn-block btn-index'>
                                    CREATE
                                </button>
                        </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        </section>";
include 'config.php';

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
    
}
$i=1;
if(!empty($_POST["name"]) && !empty($_POST["subject_name"]) && !empty($_POST["email"]))
{
    $q1=("select * from teachers_class");
$result = $conn->query($q1);
    if ($result !== false && $result->num_rows > 0) 
    {
    
    
    while($result !== false && $row = $result->fetch_assoc()) 
    {
        if($row["name"]==$_POST["name"] && $row["subject_name"]==$_POST["subject_name"]&&$row["email"]==$_POST["email"])
        {
           $i=0;
        }
    }
    }
    if($i!=0)
    {
    $q2=("insert into teachers_class(name,subject_name,email)values('$_POST[name]','$_POST[subject_name]','$_POST[email]')");
    $conn->query($q2);
    }
}

$q1=("select * from teachers_class");
$result = $conn->query($q1);
if ($result !== false && $result->num_rows > 0) 
{
    
    
    while($result !== false && $row = $result->fetch_assoc()) 
    {
        $subject_name=strtoupper(   $row["subject_name"] );
        if(!empty($_GET['teacher']))
        {
        if($_GET['teacher']==$row["email"] )
        {
      echo"
    <div class='container' style='border: solid black 1px;margin-top: 2%;height:200px;background-color:#808080;'>
    <h1 style='color:white; '>  $subject_name</h1>

    <h4 style='color:white ;'>Class Code : $row[code]</h4>
    <br>
    <br>
    <br>
    <h6 style='color:white ; '>$row[name]</h6>
    
  </div>
  ";}
        }
       else  if(!empty($_GET['student']))
        {
        if($_POST['email']==$row['email'])
        {
      echo"
    <div class='container' style='border: solid black 1px;margin-top: 2%;height:200px;background-color:#808080;'>
    <h1 style='color:white; '>  $subject_name</h1>

    <h4 style='color:white ;'>Class Code : $row[code]</h4>
    <br>
    <br>
    <br>
    <h6 style='color:white ; '>$row[name]</h6>
    
  </div>
  ";}
        }
        else{echo "jo";}

    }
}


?>

<style>

    #in{
        padding-top: 30%;
    }
</style>