<?php
$conn=mysqli_connect("localhost","root","","webdevelopment");
if($conn){
    $sno=$_GET["sno"];
    $query="Select * from College where Sno='$sno'";
    $sql=$conn->query($query);
    if($sql->num_rows>0){
        while($row=$sql->fetch_assoc()){
            $name=$row["Name"];
            $roll=$row["Roll_Number"];
            $clg=$row["College"];
        }
    }

}
else{
    echo "Fail";   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            scrollbar-width: none;
        }

        nav {
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

        a {
            text-decoration: none;
        }

        .right {
            width: 65%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .main-container {
            width: 100vw;
            height: 100vh;
            background: linear-gradient(to right, #000428, #004e92);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sub-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: rgba(255, 255, 255, 0.312);
            padding: 50px;
            border-radius: 10px;
        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-size: 17px;
            gap: 20px;

        }

        input {
            font-size: 18px;
            border-radius: 5px;
            border: none;
            outline: none;
            background-color: rgba(255, 255, 255, 0.532);
            padding: 15px;
            width: 300px;
        }

        h1 {
            margin-bottom: 30px;
            border-bottom: 2px solid black;
            padding: 10px;
        }

        .button {
            cursor: pointer;
            padding: 10px 20px;
            width: 100px;
            background-color: rgba(37, 40, 40, 0.308);
            border: 1px solid rgba(37, 40, 40, 0.308);
        }

        .button:hover {
            scale: 1.2;
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <nav>
        <div class="right">
            <a class="fs-6 text-dark" href="index.php"><i class="fa-solid fa-table"></i> Main Table</a>
            <a class="fs-6 text-dark" href="cdtable2.php"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            <a class="fs-6 text-dark" href="cdtable3.php"><i class="fa-solid fa-trash"></i> Delete</a>
            <a class="fs-6 text-dark" href="insert1.php"><i class="fa-solid fa-file-import"></i> Insert</a>
        </div>
    </nav>
    <div class="main-container">
        <div class="sub-container">
            <h1>Edit Details</h1>
            <form action="update.php" method="get">
                <input type="text" name="sno" value="<?php echo $sno; ?>" id="sno" hidden>
                <input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $name; ?>" id="">
                <input type="text" name="rollno" placeholder="Enter Your Roll.No" value="<?php echo $roll; ?>" id="">
                <input type="text" name="college" placeholder="Enter Your College" value="<?php echo $clg; ?>" id="">
                <input type="submit" value="Submit" onclick="fun()" class="button">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
