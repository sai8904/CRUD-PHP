<?php

$conn = mysqli_connect("localhost","root","","webdevelopment");
if($conn){
    $name=$_GET["name"];
    $roll=$_GET["rollno"];
    $clg=$_GET["clg"];
    if($name!="" && $roll!="" && $clg!=""){
        $sql="INSERT INTO `college`(`Name`, `Roll_Number`, `College`) VALUES ('$name','$roll','$clg')";
    $query=$conn->query($sql);
    if($query){
        echo
        "<script>
            window.location.href='og3.php';
        </script>";
    }
    else{
        echo "Row Not Inserted";
    }
    }
    else{
        echo 
        "<script>
            window.location.href='og4.php';
        </script>";
    }
}
else{
    echo "Connection Unsuccessful";
}

?>