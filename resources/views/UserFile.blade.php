<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System File Manager | Kemendagri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
  <style>
  body {
    width: auto;
  }

  .nav-bar {
    width: auto;
    background-image: url('Group 3.png');
    min-height: 180px;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }

  .below-navbar {
    width: 100%;
    height: 60px;
    padding-top: 5px;
    padding-left: 5px;
    padding-right: 5px;
    border-bottom: solid 1px;
  }

  .below-navbar .parentAddress {
    float: left;
    width: 80%;
    padding-left: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 20px;
    font-size: large;
    font-weight: 700;
  }

  .Address img {
    width: 30px;
  }

  .below-navbar .iconUpload {
    float: right;
    width: 10%;
    text-align: right;
    padding: 10px 35px 10px 10px;
  }

  img {
    width: 20px;
  }

  .card {
    padding-left: 20px;
  }

  .card-body a:link {
    text-decoration: none;
  }


  .card-body a:visited {
    text-decoration: none;
  }


  .card-body a:hover {
    text-decoration: none;
  }


  .card-body a:active {
    text-decoration: none;
  }

  .card-body .fileName {
    margin-left: 15px;
    text-decoration: none;
    color: black;
    cursor: pointer;
    font-weight: 500;
  }

  .card-delete,
  .card-download {
    float: right;
  }

  .card-delete {
    margin-right: 17px;
  }
  </style>
</head>

<body>
  <div class="nav-bar"></div>
  <div class="below-navbar">
    <div class="parentAddress">
      <p class="Address">Drive <span class="addressArrow"><img class="iconAddressArrow" src="arrow_right.png"
            alt="arrow">2021</span><img src="arrow_right.png" alt="arrow">01</p>
    </div>
    <div class="iconUpload">
      <a href="#"><img src="upload.png" alt="upload"></a>
    </div>
  </div>
  <div class="card" style="width: 100rem;">
    <div class="card-body" style="width: 93rem; ">
      <a href="#" class="card-link"><img src="fileLogo.png" alt="logo file"><span class="fileName">File A</span></a>
      <a href="#" class="card-download"><img src="deleteLogo.png" alt="logo file"></a>
      <a href="#" class="card-delete"><img src="download-arrow.png" alt="logo file"></a>
    </div>
  </div>
  <div class="card" style="width: 100rem;">
    <div class="card-body" style="width: 93rem; ">
      <a href="#" class="card-link"><img src="mp4fileLogo.png" alt="logo file"><span class="fileName">File B</span></a>
      <a href="#" class="card-download"><img src="deleteLogo.png" alt="logo file"></a>
      <a href="#" class="card-delete"><img src="download-arrow.png" alt="logo file"></a>
    </div>
  </div>
  <div class="card" style="width: 100rem;">
    <div class="card-body" style="width: 93rem; ">
      <a href="#" class="card-link"><img src="excelLogo.png" alt="logo file"><span class="fileName">File B</span></a>
      <a href="#" class="card-download"><img src="deleteLogo.png" alt="logo file"></a>
      <a href="#" class="card-delete"><img src="download-arrow.png" alt="logo file"></a>
    </div>
  </div>
</body>

</html>