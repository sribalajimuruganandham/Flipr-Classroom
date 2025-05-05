<!DOCTYPE html>
<html lang='en'>
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
    
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="bootstrap.bundle.min.js / bootstrap.bundle.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        </head>
        
        <body>

    <!-- Login -->
   
        <form id="kpy" style="visibility:hidden">
            <input id="kk" name="kk"></input>
            
        </form>
        <button onclick="create()" class="btn btn-primary btn-block btn-index" style="margin-left:0%;">
        JOIN
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
echo " <section>
<div id='login' class='login-whole' style='  visibility: hidden;position:absolute;'>
    <div class='card-wrapper '>
        <div class='card fat'>
            <div class='card-body'>
                <h4 class='card-title text-center'>CLASS</h4>
                <form method='POST' class='my-login-validation' novalidate=' ' >
                
                    <div class='form-group'>
                        <label for='email1' >E-MAIL</label>
                        <input id='email1' value=$_GET[student] class='form-control' name='email1' required autofocus>
                        
                    </div>
                    <div class='form-group'>
                        <label for='subject_name'>SUBJECT NAME</label>
                        <input id='subject_name'  class='form-control' name='subject_name' value='' required autofocus>
                        
                    </div>
                    <div class='form-group'>
                        <label for='code'>CODE</label>
                        <input id='code'  class='form-control' name='code' value='' required autofocus>
                        
                    </div>
                    
                    
                    
                    
                    <div class='form-group m-0'>
                        <button type='submit' class='btn btn-primary btn-block btn-index'>
                                JOIN
                            </button>
                    </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</section>";
if(!empty($_GET["student"] ) )
{
    $email= $_GET['student'];
}
if( !empty($_GET["email1"]))
{
    $email= $_GET['email1'];
}
include 'config.php';

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
    
}

$q1=("select * from teachers_class");
$result1 = $conn->query($q1);
if ($result1 !== false && $result1->num_rows > 0) 
{
    
    
    while($result1 !== false && $row = $result1->fetch_assoc()) 
    {
        if(!empty($_POST["code"]) && !empty($_POST["subject_name"]) && !empty($_POST["email1"]))
        {
            
            if($row["code"]==$_POST["code"] )
            {
                $i=1;
                $teacher_name=$row["name"];
                $code=$row["code"];
if(!empty($_POST["code"]) && !empty($_POST["subject_name"]) && !empty($_POST["email1"]))
{
    $q2=("select * from students_class");
$result = $conn->query($q2);
    if ($result !== false && $result->num_rows > 0) 
    {
    
    
    while($result !== false && $row = $result->fetch_assoc()) 
    {
     
        if($row["code"]==$_POST["code"] && $row["email"]==$_POST["email1"])
        {
            
            $i=0;
        }
    }
}
if($i!=0)
{
       
        $q3=("insert into students_class(teacher_name,subject_name,email,code)values('$teacher_name','$_POST[subject_name]','$_POST[email1]','$code')");
        $conn->query($q3);
    }
}
                
            }
        }
    }
}

$q4=("select * from students_class");
$result = $conn->query($q4);
$i=0;
if ($result !== false && $result->num_rows > 0) 
{
    
    
    while($result !== false && $row = $result->fetch_assoc()) 
    {
        if(!empty($email))
        {
            if($row["email"]==$email)
            {     $subject_name=strtoupper(   $row["subject_name"] );
                $i=$i+1;
                echo"
                <div class='container' style='border: solid black 1px;margin-top: 2%;height:200px;background-color:#808080;'>
                <h1 style='color:white; '>  $subject_name</h1>
                
                <br>
                <br>
                <br>
                <h6 style='color:white ; '>$row[teacher_name]</h6>
                <script>
                function sub_aasi$i(){
                    a=document.getElementById('kk');
                    a.value='$row[code]';
                    b=document.getElementById('kpy');
                    b.setAttribute('method', 'post');
                    b.setAttribute('action', 'stu_assi.php');
                    b.submit()}
                    </script>
                    <script>
                    function sub_test$i(){
                        a=document.getElementById('kk');
                        a.value='$row[code]';
                        b=document.getElementById('kpy');
                        b.setAttribute('method', 'post');
                        b.setAttribute('action', 'stu_test.php');
                        b.submit()
                    }
                    </script>
                    <script>
                    function sub_table$i(){
                        a=document.getElementById('kk');
                        a.value='$row[code]';
                        b=document.getElementById('kpy');
                        b.setAttribute('method', 'post');
                        b.setAttribute('action', 'stu_table.php');
                        b.submit()
                    } 
                    </script>
                    <script>
                    function sub_link$i(){
                        a=document.getElementById('kk');
                        a.value='$row[code]';
                        b=document.getElementById('kpy');
                        b.setAttribute('method', 'post');
                        b.setAttribute('action', 'stu_link.php');
                        b.submit()
                    } 
                    </script>
                    <script>
                    function sub_result$i(){
                        a=document.getElementById('kk');
                        a.value='$row[code]';
                        b=document.getElementById('kpy');
                        b.setAttribute('method', 'post');
                        b.setAttribute('action', 'stu_result.php');
                        b.submit()
                    } 
                    </script>
                    
                    <div class='dropdown' style='margin-left:80%;padding-bottom:80%;'>
                    <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton1' data-bs-toggle='dropdown' aria-expanded='false'>
                     
                    </button>
                   
                    <ul class='dropdown-menu'  aria-labelledby='dropdownMenuButton1' >
                     
                     </li> <button class='dropdown-item' onclick='sub_aasi$i()' >Assignment</button></li>
                     <li><button class='dropdown-item' onclick='sub_test$i()'  >Test</button></li>
                     <li><button class='dropdown-item' onclick='sub_table$i()'  >Time Table</button></li>
                     <li><button class='dropdown-item' onclick='sub_link$i()'   >Meetings</button></li>
                     <li><button class='dropdown-item'  onclick='sub_result$i()'   >result</button></li>
                      
                    </ul>
                 
                    </div>
                  
                    </div>
                    ";
                }
            }
                    }
                }
                
                
                ?>

