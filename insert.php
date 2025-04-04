<?php
$conn = mysqli_connect("localhost","root","","webdevelopment");
if($conn){
    $name=
    $sql = "INSERT INTO `college`(Sno,`Name`, `Roll_Number`, `College`) VALUES ('8','Rohit','22311A6697','SNIST')";
    $query = $conn->query($sql);
    if($query){
        echo "row inserted";
    }
    else{
        echo "row not Inserted";
    }
}
else{
    echo "connection unsuccessful";
}
?>