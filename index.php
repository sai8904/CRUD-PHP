<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            scrollbar-width: none;
        }
        body{
            background: linear-gradient(to right, #000428, #004e92);
        }
        nav{
            width: 100vw;
            padding: 15px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: rgb(157, 193, 225);
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .tab {
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        a{
            text-decoration: none;
        }
        .right{
            width: 65%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <nav>
        <div class="right">
            <a class="fs-6 text-dark" href="cdtable.php"><i class="fa-solid fa-table"></i> Main Table</a>
            <a class="fs-6 text-dark" href="cdtable2.php"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            <a class="fs-6 text-dark" href="cdtable3.php"><i class="fa-solid fa-trash"></i> Delete</a>
            <a class="fs-6 text-dark" href="insert1.php"><i class="fa-solid fa-file-import"></i> Insert</a>
        </div>
    </nav>
    <div class="tab container">
        <table border="2" class="table table-secondary table-hover table-bordered text-center">
            <tr class="table-dark">
                <th>Sno</th>
                <th>Name</th>
                <th>Roll_Number</th>
                <th>College</th>
            </tr>
    </div>
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
    <script>
        function conformation(){
            return confirm("Do you want to delete the Row ?");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
