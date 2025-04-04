<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>Sno</th>
            <th>Name</th>
            <th>Roll_Number</th>
            <th>Edit</th>
        </tr>
        <?php
$conn = mysqli_connect("localhost","root","","webdevelopment");
if($conn){
    $sql = "SELECT * FROM `student`;";
    $query = $conn->query($sql);
    if($query->num_rows>0){
        while($row=$query->fetch_assoc()){
            echo "<tr>";
            echo "<td>$row[sno]</td>";
            echo "<td>$row[name]</td>";
            echo "<td>$row[roll_number]</td>";
            echo "<td><a href='edit.php?sno=$row[sno]&name=$row[name]&roll=$row[roll_number]'>Edit</td>";
            echo "</tr>";
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
    </table>
</body>
</html>