<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | FileManager</title>
  <style>
  body {
    background-image: linear-gradient(to right, rgba(0, 230, 244, 0.89), rgba(0, 0, 128, 1));
    width: 100%;
    height: 100%;
    font-family: 'Inknut Antiqua';
    font-style: normal;
  }

  form p {
    font-size: 32px;
  }

  .container {
    display: center;
    box-sizing: border-box;
    padding: 20px;
    position: fixed;
    top: 50%; 
    left: 50%;
    transform: translate(-50%, -50%);
    margin: auto;
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

  .icon-1 {
    font-style: italic;
    padding: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    background-size: 20px;
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
    cursor: pointer;
  }
  </style>
</head>

<body>
  <div class="container">
    <form action="#" method="post">
      <div class="txtfilled">
        <p>Daftar</p>
        <input class="icon-1" type="text" name="Nama Lengkap" required class="form-control" placeholder="Nama Lengkap"
          id="namalengkap" size="40">
      </div>
      <div class="txtfilled">
        <input class="icon-1" type="text" name="NIP" required class="form-control" placeholder="NIP" id="nip" size="40">
      </div>
      <div class="txtfilled">
        <input class="icon-1" type="text" name="Alamat" required class="form-control" placeholder="Alamat" id="alamat"
          size="40">
      </div>
      <div class="txtfilled">
        <input class="icon-1" type="text" name="Nama Unit" required class="form-control" placeholder="Nama Unit Kerja"
          id="namaunitkerja" size="40">
      </div>
      <div class="txtfilled">
        <input class="icon-1" type="email" name="email" required class="form-control" placeholder="Email" id="email"
          size="40">
      </div>
      <div class="txtfilled">
        <input class="icon-1" type="text" name="notelp" required class="form-control" placeholder="Nomor Telepon"
          id="notelp" size="40">
      </div>
      <div class="txtfilled">
        <input class="icon-1" type="password" name="password" required class="form-control" placeholder="Password"
          id="password" size="40">
      </div>
      <div class="txtfilled">
        <input class="icon-1" type="password" name="password" placeholder="Konfirmasi Password" id="konfirmasipassword"
          size="40">
      </div>
      <div class="txtfilled">
        <button type="submit" class="button">Daftar</button>
      </div>
      <div class="txtfilled">
        <span>Sudah memiliki akun ? </span>
        <span>
          <a href="/">Login</a>
        </span>
      </div>
    </form>
  </div>
</body>

</html>