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
                        <h4 class="card-title text-center">Login</h4>
                        <form method="POST" class="my-login-validation" novalidate=""  action="<?php echo $_SERVER['PHP_SELF']?>">
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input id="email" type="email" class="form-control" name="email"  required autofocus>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="type">TYPE</label>
                               <select id="type"  class="form-control" name="type"  required><option value="teacher">TEACHER</option><option value="student">STUDENT</option></select>
                               
                            </div>

                            <div class="form-group">
                                <label for="password">Password
                                    </label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>

                      

                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block btn-index">
                                        Login
                                    </button>
                            </div>
                            <p>or</p>
                     

                            <div class="row">
  <div class="col-md-3">
    <a class="btn btn-outline-dark" href="https://www.google.com/" target="_blank" role="button" style="text-transform:none">
      <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
      Login with Google
    </a>
  </div>
</div>

<!-- Minified CSS and JS -->
<!-- <link   rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
        crossorigin="anonymous">
</script> -->
                            <div class="mt-4 text-center">
                                Don't have an account? <a href="signup.php">Create One</a>
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

include 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);

}





if(!empty($_POST["email"]) && !empty($_POST["password"]))
{
    $a=$_POST["email"];
    $b=$_POST["password"];
    
    
    if($_POST["type"]=="student")
    {
        $q1="select * from students where e_mail= '$a' ";
        
        $result = $conn->query($q1);
    }
    else
    {
    echo "hi12";
  
    $q1="select * from teachers where e_mail= '$a' ";
    $result = $conn->query($q1);
}

if($result !== false && $result->num_rows > 0) 
{
    echo "hi1";
    while($result !== false && $row = $result->fetch_assoc()) 
    {
        $email=$row["e_mail"];
        if($row["password"]==$b && $_POST["type"]=="teacher")
        {
            echo "<form name='teacher1' id='teacher1'  action='dashbord.php' method='get'><input name='teacher' id='teacher' value=$email><button >submit</button></form><script>document.getElementById('teacher1').submit();</script>";
        }  
        else if($row["password"]==$b && $_POST["type"]=="student")
        {
            echo "<form name='student1' id='student1' action='stu_dash.php' method='get'><input  name='student' id='student' value=$email><button >submit</button></form><script>document.getElementById('student1').submit();</script>";
        }
        else
        {
            echo "<script>alert('Acound not found')</script>";
        }
        
    }
}
}
$conn->close();

?>




