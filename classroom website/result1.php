<?php
include 'config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



    $sql = "INSERT INTO result(code,email,type,question_number,mark) VALUES ('$_POST[code]','$_POST[email]','$_POST[type]',$_POST[question_number],'$_POST[mark]')";
if(  $conn->query($sql)===true){
    echo "hi";
}

$conn->close();
?>