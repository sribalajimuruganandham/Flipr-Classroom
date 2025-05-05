
<?php
include 'config.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$start_date=date("d-m- y");

 echo $_POST["subject_name"];
    $sql = "INSERT INTO assignment(subject_name,question,start_date,end_date,mark) VALUES ('$_POST[subject_name]','$_POST[question]','$start_date','$_POST[due_date]','$_POST[mark]')";
  $conn->query($sql);

$conn->close();
?>