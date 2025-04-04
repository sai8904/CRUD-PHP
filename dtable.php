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
            <th>College</th>
        </tr>
        <?php
$conn = mysqli_connect("localhost","root","","webdevelopment");
if($conn){
    $sql = "SELECT * FROM `college`;";
    $query = $conn->query($sql);
    if($query->num_rows>0){
        while($row=$query->fetch_assoc()){
            echo "<tr>";
            echo "<td>$row[Sno]</td>";
            echo "<td>$row[Name]</td>";
            echo "<td>$row[Roll_Number]</td>";
            echo "<td>$row[College]</td>";
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
    <br>
    <br>
    <a href='table.php'>Update Another Row</a>
</body>
</html>