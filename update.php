<?php
$conn = mysqli_connect("localhost","root","","webdevelopment");
if($conn){
    $sno=$_GET["sno"];
    $name=$_GET["name"];
    $roll=$_GET["rollno"];
    $clg=$_GET["college"];
    $sql = "UPDATE `college` SET `Name`='$name',`Roll_Number`='$roll',`College`='$clg' WHERE Sno='$sno'";
    if($name!="" && $roll!=""){
        $query = $conn->query($sql);
        if($query){
            echo 
            "<script>
                window.location.href='og.php';
            </script>";
        }
        else{
            echo "row not updated";
        }
    }
    else{
        echo "Nothing to store";
    }
}
else{
    echo "connection unsuccessful";
}
?>