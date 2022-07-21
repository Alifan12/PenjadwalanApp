<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminMenu</title>
    <style>
        body {
            
            box-sizing: border-box;
        }

        .Navbar {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin: 10px;
            padding: 10px 50px 5px 25px;
            border-bottom: 1px outset;
            font-size: 24px;
            font-weight: bold;
        }

        .container {
            /* display:flex; */
            /* flex-wrap:wrap; */
            margin: 50px;
            box-sizing: border-box;
            position: fixed;
            justify-content: space-between;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: auto;
            width: 80%;
            border-radius: 20px;
        }

        .container .menu {
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 100%;
            height: 100%;
        }

        .container .menu a {
            border: 1px solid black;
            padding: 80px;
            border-radius: 10px;
            text-align: center;
            align-items: center;
            line-height: 15px;

        }

        .container .menu p {
            color: black;
            font-weight: bold;
            font-size: 24px;
            padding-top: 20pt;
        }

        .container .menu a:link {
            text-decoration: none;
        }

        .container .menu a:visited {
            text-decoration: none;
        }

        .container .menu a:hover {
            text-decoration: underline;
        }

        .container .menu a:active {
            text-decoration: underline;
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
        <div class="menu">
            <div class="card" style="width:300px">
                <a href="#" class="stretched-link">
                    <img class="card-img-top" src="/Vector (2).png" alt="Card image" style="width:70pt">
                    <p>User A</p>
                </a>
            </div>
            <div class="card" style="width:300px">
                <a href="#" class="stretched-link">
                    <img class="card-img-top" src="/Vector (2).png" alt="Card image" style="width:70pt">
                    <p>User A</p>
                </a>
            </div>
            <div class="card" style="width:300px">
                <a href="#" class="stretched-link">
                    <img class="card-img-top" src="/Vector (2).png" alt="Card image" style="width:70pt">
                    <p>User A</p>
                </a>
            </div>
            <div class="card" style="width:300px">
                <a href="#" class="stretched-link">
                    <img class="card-img-top" src="/Vector (2).png" alt="Card image" style="width:70pt">
                    <p>User A</p>
                </a>
            </div>
            <div class="card" style="width:300px">
                <a href="#" class="stretched-link">
                    <img class="card-img-top" src="/Vector (2).png" alt="Card image" style="width:70pt">
                    <p>User A</p>
                </a>
            </div>
        </div>
    </div>
</body>

</html>