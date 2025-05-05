<?php
include 'config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$start_time=date("h-i-s");

 echo $_POST["subject_name"];
    $sql = "INSERT INTO test(subject_name,question,start_time,end_time) VALUES ('$_POST[subject_name]','$_POST[question]','$start_time','$_POST[due_time]')";
  $conn->query($sql);

$conn->close();
?>