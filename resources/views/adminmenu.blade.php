<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminMenu</title>
    <style>
        .Navbar{
            display: flex;
            justify-content: space-between;
            width:100%;
            margin:10px;
            padding:10px 50px 5px 25px;
            border-bottom:1px outset;
            font-size:24px;
            font-weight: bold;
        }
        .container {
            margin: 50px;
            box-sizing: border-box;
            position: fixed;
            justify-content: space-between;
            top: 60%; 
            left: 50%;
            transform: translate(-50%, -50%);
            margin: auto;
            width: 50%;
            /* background: #F5F5F5; */
            /* border: 1px solid #000000; */
            border-radius: 20px;
        }
        .container span {
            width:100%;
            height:100%;
            background: #F5F5F5; 
            border: 1px solid #000000;
            justify-content: center;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="/Group 3.png" width=100%>
        </div>
    </nav>
    <div class="container">
        <span>
        <a href="#">
                <img src="/image 34.png" width=200px>
                <p>Manajemen Akses User</p>
        </a>
        <a href="/admhomefolder">
                <img src="/image 35.png" alt="">
                <p>Manajemen Akses User</p>
            </a>
        </span>
         
    </div>
</body>
</html>