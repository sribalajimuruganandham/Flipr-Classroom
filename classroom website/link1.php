<?php
include 'config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


 echo $_POST["subject_name"];
    $sql = "INSERT INTO link(subject_name,link,date,start_time,end_time) VALUES ('$_POST[subject_name]','$_POST[link]','$_POST[date]','$_POST[start_time]','$_POST[end_time]')";
  $conn->query($sql);

$conn->close();
?>