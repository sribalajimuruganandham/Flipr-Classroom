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
                        <h4 class="card-title text-center">TEST</h4>
                        <form method="POST" class="my-login-validation" novalidate=""  action="<?php echo $_SERVER['PHP_SELF']?>  "enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="subject_name">CLASS CODE</label>
                                <input id="subject_name"  class="form-control" name="subject_name" value="" required autofocus>
                              
                            </div>
                            <div class="form-group">
                                <label for="question">QUESTION</label>
                                <input id="question" type="file" class="form-control" name="question" value="" required autofocus></textarea>

                            </div>

                            <div class="form-group">
                                <label for="due_time">DUE_TIME
                                </label>
                                <input id="due_time"  class="form-control" name="due_time" required>

                            </div>
                          


                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block btn-index">
                                    POST
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
<style>

</style>


</html>
<?php

include 'config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$start_time=date("h:i:s");
if(!empty($_POST['subject_name']))
{
$image=$_FILES['question']['tmp_name'];

$name=$_FILES['question']['name'];
$image=file_get_contents($image);

 
$image=base64_encode($image);

    // $sql = "INSERT INTO test(code,question) VALUES ('$_POST[code]','$image')" ;
    $sql = "INSERT INTO test(subject_name,question,start_time,end_time) VALUES ('$_POST[subject_name]','$image','$start_time','$_POST[due_time]')";
 
     $conn->query($sql);
}
$conn->close();

?>
