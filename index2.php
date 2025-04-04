<?php
$conn=mysqli_connect("localhost","root","","webdevelopment");
if($conn){
    echo "Successful";
}
else{
    echo "Unsuccessful";
}
?>