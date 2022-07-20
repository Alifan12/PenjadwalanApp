<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Profil</title>
    <style>
        .Navbar{
            display: flex;
            justify-content: space-between;
            width:100%;
            margin:5px;
            padding:5px 50px 0 25px;
            border-bottom:1px outset;
            font-size:16 px;
            font-weight: bold;
        }
        .judul{
            background: rgba(9, 30, 217, 0.32);
            padding:15px;
            text-align:center;
            color:rgba(0, 0, 94, 1);
            font-weight:bold;
        }
        .container{
            margin-top:10px;
            padding:15px;
            text-align:center;
        }
        .container img{
            border:1pt black;
            padding:20px;
        }
        .container button{
            align:center;
        }

        table, th, td {
            border: 1px solid;
        }

        table{
            /* border-collapse: collapse; */
            margin-left: auto;
            margin-right: auto;
            width:50%;
            border:none;
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
        <p>Profil</p>
    </div>

    <div class="judul">
        Data User
    </div>
    <div class="container">
        <a href="">
            <img src="/bxs_user-circle.png" width=350px>
        </a>
        <p>
            <button> Edit profil</button>
        </p>
    </div>
    
        <table class="tabel">
            <tr>
                <th>NIP</th>
                <th>: 1986092620150510001</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: Alex Griffin</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: Jalan Anti Narkoba</td>
            </tr>
            <tr>
                <td>Nama Unit Kerja</td>
                <td>: Pusat Dana Informasi</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: Griffin@gmail.com</td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>: 0854545454132</td>
            </tr>
        </table>
        
        <div class="container">
            <a href="/home">
                <button> Kembali </button>
            </a>

        </div>
</body>
</html>