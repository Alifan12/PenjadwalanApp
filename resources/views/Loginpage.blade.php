<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileManager</title>
    <style>
        body {
            background-image: linear-gradient(to right, rgba(0, 230, 244, 0.89), rgba(0, 0, 128, 1));
            width: 100%;
            height: 100%;
            font-family: 'Inknut Antiqua';
            font-style: normal;
        }

        .container {
            display: grid;
            grid-template-areas:
                'main tengah logo';
            margin: 50px box-sizing: border-box;

            position: absolute;
            top: 20%;
            left: 27%;
            /* top: calc(100%/2);
            left: calc(100%/2); */
            background: #F5F5F5;
            border: 1px solid #000000;
            border-radius: 20px;
        }

        .txtfilled {
            margin: 20px
        }

        form {
            text-align: center;
        }

        form p {
            font-family: 'Inknut Antiqua';
            font-style: bold;
            font-size: 30px;
        }

        .kiri {
            grid-area: main;
            padding: 35px;
        }

        button {
            background-color: #091ED9;
            color: white;
            padding: 5px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 10px;
        }

        .tengah {
            grid-area: tengah;
            padding-top: 40px;
        }

        .kanan {
            text-align: center;
            grid-area: logo;
            padding: 70px;
            width: 200px;
        }

        .icon-1 {
            padding-left: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            background: url("/icon/user.png") no-repeat right;
            background-size: 20px;
        }

        .icon-2 {
            padding-left: 25px;
            padding-top: 10px;
            padding-bottom: 10px;
            background: url("/icon/lock.png") no-repeat right;
            background-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="kiri">
            <form action="" method="post">
                <div class="judul">
                    <p>Selamat Datang !</p>
                    <p>Masuk disini</p>
                </div>
                <div class="txtfilled">
                    <input class="icon-1" type="text" name="username" required class="form-control"
                        placeholder="Username" id="username" size="30">
                    <!-- <label for="username" class="form-label">
                        <img src="" width="30px">Username
                    </label> -->
                </div>
                <div class="txtfilled">
                    <input class="icon-2" type="password" name="password" required class="form-control"
                        placeholder="Password" id="password" size="30">
                    <!-- <label for="password" class="form-label">
                    <img src="" width="30px">Password
                 </label> -->
                </div>
                <div class="txtfilled">
                    <button type="submit" class="button">Login</button>
                </div>
                <div class="txtfilled">
                    <span>Belum memiliki akun ?</span> <span><a href="#">Klik disini</a></span>
                </div>
            </form>
        </div>
        <div class="tengah">
            <img src="/Line 19.png" height=400px>
        </div>
        <div class="kanan">
            <img src="/logo-kemendagri.png" width=200px>
            <p>System File Manager</p>
            <p>Kementerian Dalam Negeri</p>
        </div>
    </div>
</body>

</html>