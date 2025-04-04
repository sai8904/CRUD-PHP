<?php

$conn=mysqli_connect("localhost","root","","webdevelopment");
if($conn){
    $sno=$_GET["sno"];
    $sql="DELETE FROM `college` WHERE `Sno`='$sno'";
    $query=$conn->query($sql);
    if($query){
        echo
        "<script>
            window.location.href='og2.php';
        </script>";
    }
    else{
        echo "Row Not Deleted";
    }
}
else{
    echo "Connection Unsuccessful";
}

?>