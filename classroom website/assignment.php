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
                        <h4 class="card-title text-center">ASSIGNMENT</h4>
                        <form method="POST" class="my-login-validation" novalidate=""  action="assignment1.php">
                            <div class="form-group">
                                <label for="subject_name">CLASS CODE</label>
                                <input id="subject_name"  class="form-control" name="subject_name"  required autofocus>
                               
                            </div>
                            <div class="form-group">
                                <label for="question">QUESTION</label>
                                <textarea id="question" class="form-control" name="question"  required autofocus></textarea>
                                
                            </div>

                            <div class="form-group">
                                <label for="due_date">DUE_DATE
									</label>
                                <input id="due_date"  class="form-control" name="due_date" >
                              
                            </div>
                            <div class="form-group">
                                <label for="mark">MAX MARK
									</label>
                                <input id="mark" class="form-control" name="mark" required>
                            
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
