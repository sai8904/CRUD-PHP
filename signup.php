<?php
$conn=mysqli_connect("localhost","root","","webdevelopment");
if($conn){
    $name = $_GET["name"];
    $roll = $_GET["rollno"];
    $clg = $_GET["clg"];
    if($name!="" && $roll!="" && $clg!=""){
        $sql = "INSERT INTO `signup`(`Name`, `Roll_Number`, `College`) VALUES ('$name','$roll','$clg');";
        $query = $conn->query($sql);
        if($query){
            echo "values inserted";
        }
        else{
            echo "Values not inserted";
        }
    }
    else{
        echo "There are spaces";
    }
}
else{
    echo "Fail";   
}
?>