      
      <?php
include "config.php";

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
  
}
echo $_POST['code'];

if(!empty($_POST['code']))
{
 
  $submit_time=date("h:i:s");

$image=$_FILES['answer']['tmp_name'];

$name=$_FILES['answer']['name'];
$image=file_get_contents($image);


$image=base64_encode($image);

    // $sql = "INSERT INTO test(code,question) VALUES ('$_POST[code]','$image')" ;
    $sql = "INSERT INTO submit(code,answer,submit_time,type) VALUES ('$_POST[code]','$image','$submit_time','$_POST[type]')";
 
     $conn->query($sql);
echo "submitted";
}
?>