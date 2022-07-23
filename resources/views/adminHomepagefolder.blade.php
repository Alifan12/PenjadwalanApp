<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Homepage|FileManager</title>
    <style>
        body{
            height:100vh;
            width:100vh;
        }
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
        .content  a{
            display: flex;
            width:100%;
            margin:10px;
            padding:10px 50px 5px 25px;
            border-bottom:1px outset;
            font-size:24px;
            font-weight: bold;
            color:black;
        }
        .content a:link {
            text-decoration: none;
        }

        .content a:visited {
            text-decoration: none;
        }
        .content a:hover {
            text-decoration: underline;
        }
        .content a:active {
            text-decoration: underline;
        }
        .content a span{
            padding-left:20px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="">
                <img src="/Group 3.png"width=100%>
            </a>
        </div>
    </nav>
    <div class="Navbar">
        <p>Drive</p>
        <span>
            <div class="create">
                <a href=""><img src="/fluent_folder-add-48-filled.png" width=40px height=40px></a>
            </div>
        </span>
    </div>

    <div class="content">
        <a href="">
            <img src="/image 4.png" width=40px>
            <span> 2021</span>
        </a>
    </div>
    <div class="content">
        <a href="">
            <img src="/image 4.png" width=40px>
            <span> 2022</span>
        </a>
    </div>
    <div class="content">
        <a href="">
            <img src="/image 4.png" width=40px>
            <span> 2023</span>
        </a>
    </div>
</body>
</html>