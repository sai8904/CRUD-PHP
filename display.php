<?php
$conn = mysqli_connect("localhost","root","","webdevelopment");
if($conn){
    $sql = "SELECT * FROM `student`;";
    $query = $conn->query($sql);
    if($query->num_rows>0){
        while($row=$query->fetch_assoc()){
            echo $row['sno'];
            echo "   ";
            echo $row['name'];
            echo "   ";
            echo $row['roll_number'];
            echo "   ";
            echo "<hr>";
        }
    }
    else{
        echo "data not available";
    }
}
else{
    echo "connection unsuccessful";
}
?>