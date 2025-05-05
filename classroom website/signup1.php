
<?php
include 'config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(!empty($_POST['name'])){
 
 if($_POST['type']=="teacher")
 {
   echo $_POST["type"];
   $sql = "INSERT INTO teachers(name,e_mail,password) VALUES ('$_POST[name]','$_POST[email]','$_POST[password]')";
}
else
{
    $sql = "INSERT INTO students(name,e_mail,password) VALUES ('$_POST[name]','$_POST[email]','$_POST[password]')";
    
  }
    $conn->query($sql);

}
$conn->close();
?>