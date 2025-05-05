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
<?php include "top.php"?>

    <!-- Login -->
    <section>
        <div id="login" class="login-whole">
            <div class="card-wrapper ">
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title text-center">Link</h4>
                        <form method="POST" class="my-login-validation" novalidate=""  action="link1.php">
                        <div class="form-group">
                                <label for="subject_name">CLASS CODE</label>
                                <input id="subject_name"  class="form-control" name="subject_name" value="" required autofocus>
                              
                            </div>
                            
                            
                        <div class="form-group">
                                <label for="link">Link</label>
                                <input id="link" class="form-control" name="link" value="" required autofocus>
                              
                            </div>
                        <div class="form-group">
                                <label for="date">Date</label>
                                <input id="date" class="form-control" name="date" value="" required autofocus>
                              
                            </div>
                        <div class="form-group">
                                <label for="start_time">Start_Time</label>
                                <input id="start_time" class="form-control" name="start_time" value="" required autofocus>
                              
                            </div>
                        <div class="form-group">
                                <label for="end_time">End_Time</label>
                                <input id="end_time" class="form-control" name="end_time" value="" required autofocus>
                              
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



</html>