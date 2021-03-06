<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem File Manager | Kemendagri</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>

  <style>
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
    padding: 5px;
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

  .below-navbar .iconProfile {
    float: right;
    width: 10%;
    text-align: right;
    padding-right: 10px;
  }

  img {
    width: 50px;
  }


  .content a {
    display: flex;
    width: 100%;
    padding: 10px 25px;
    border-bottom: solid 1px;
    font-size: large;
    font-weight: bold;
    cursor: pointer;
    text-decoration: none;
    color: black;
  }

  .content a span:link {
    text-decoration: none;
  }

  .content a span:visited {
    text-decoration: none;
  }

  .content a span:hover {
    text-decoration: none;
  }

  .content a span:active {
    text-decoration: none;
  }

  .content img {
    width: 35px;
  }

  .content span {
    margin-left: 10px;
  }

  .content {
    width: auto;
    height: 50px;
  }
  </style>
</head>

<body>
  <div class="nav-bar"></div>
  <div class="below-navbar">
    <div class="parentAddress">
      <p class="Address">Drive <span class="addressArrow"><img class="iconAddressArrow" src="arrow_right.png"
            alt="arrow">2021</span><img src="arrow_right.png" alt="arrow"></p>
    </div>
    <div class="iconProfile">
      <img src="bxs_user-circle.png" alt="Profile">
    </div>
  </div>

  <div class="content">
    <a href="/SubFile">
      <img src="/image 4.png" alt="logo folder">
      <span>01</span>
    </a>

  </div>
</body>

</html>