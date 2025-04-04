<?php
$conn = mysqli_connect("localhost","root","","webdevelopment");
if($conn){
    $sql = "create table Student(sno int(10),name varchar(255),roll_number varchar(255));";
    $query = $conn->query($sql);
    if($query){
        echo "table created";
    }
    else{
        echo "table not created";
    }
}
?>