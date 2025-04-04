<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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

    body {
        width: 100vw;
        height: 100vh;
        background: linear-gradient(to right, #000428, #004e92);
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
</style>

<body class="d-flex align-items-center justify-content-center">
    <nav>
        <div class="right">
        <a class="fs-6 text-dark" href="cdtable.php"><i class="fa-solid fa-table"></i> Main Table</a>
            <a class="fs-6 text-dark" href="cdtable2.php"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            <a class="fs-6 text-dark" href="cdtable3.php"><i class="fa-solid fa-trash"></i> Delete</a>
            <a class="fs-6 text-dark" href="insert1.php"><i class="fa-solid fa-file-import"></i> Insert</a>
        </div>
    </nav>
    <div class="one d-flex flex-column align-items-center justify-content-center">
        <h1 class="fs-1 text-light">The row got updated</h1>
    <br>
    <p class="fs-6 text-light">Want To See the Table Click Main Table <i class="fa-solid fa-up-long"></i></p>
    </div>
</body>

</html>