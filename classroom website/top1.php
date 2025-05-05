<!DOCTYPE html>
<html >
<head>
    <title>Document</title>
    <link  rel="stylesheet" href="home.css">

     <!-- font awesome -->
     <script src="https://kit.fontawesome.com/aa86986065.js" crossorigin="anonymous"></script>
     <!-- google fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">

        <!-- bootstrap links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


       



</head >
<body id=title >
    <section id="Nav-bar-section">
        
    <div class="container-fluid">
        <section id="title">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-whole-class ">
              <div class="container">
                  <p class="navbar-brand"><i class=" icon fab fa-google fa-2x"></i> oogle classroom</p>
                  <!-- makes the text right  -->
                  <div class="w-25 text-right ">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
                      <!-- phone view - right  -->
                      <div class="navbar-nav ml-auto text-left">
                          <a href="stu_assi.php" class="nav-link nav-link-ltr textinnav ">ASSIGNMENT</a>
                          <!-- <a href="#" class="nav-link nav-link-ltr textinnav " id="active-underline"></a> -->
                          <a href="stu_test.php" class="nav-link nav-link-ltr textinnav ">TEST</a>
                          <a href="stu_table.php" class="nav-link nav-link-ltr textinnav ">TIME TABLE</a>
                          <a href="stu_link.php" class="nav-link nav-link-ltr textinnav ">LINK</a>
                      </div>
                  </div>
              </div>
          </nav>
    </section>
 

    
</body>
<style>
    #title
{
    background-color:rgb(255, 255, 255);
}
.navbar-brand
{
    font-family: 'Poiret One', cursive;
}
.icon:hover{
    color:orange;
 }



#signin-modal
{
    position: absolute;
    right: 50%;
}
</style>
</html>