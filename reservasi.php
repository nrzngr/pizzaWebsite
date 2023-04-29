<!DOCTYPE html>
<html>
  <head>
    <title>Reservasi</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />
    <style>
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Raleway", sans-serif;
      }

      body {
        height: 100vh;
        width: 100%;
      }

      .container {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px 100px;
      }

      .container:after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        background: url("img/bg.jpg") no-repeat center;
        background-size: cover;
        filter: blur(50px);
        z-index: -1;
      }

      .contact-box {
        max-width: 850px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: #fff;
        box-shadow: 0px 0px 19px 5px rgba(0, 0, 0, 0.19);
      }

      .left {
        background: url("img/jadwal3.png") no-repeat center;
        background-size: cover;
        height: 100%;
      }

      .right {
        padding: 25px 40px;
      }

      h2 {
        position: relative;
        padding: 0 0 10px;
        margin-bottom: 10px;
      }

      h2:after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        height: 4px;
        width: 50px;
        border-radius: 2px;
        background-color: #ff9100;
      }

      .field {
        width: 100%;
        border: 2px solid rgba(0, 0, 0, 0);
        outline: none;
        background-color: rgba(230, 230, 230, 0.6);
        padding: 0.5rem 1rem;
        font-size: 1.1rem;
        margin-bottom: 22px;
        transition: 0.3s;
        border-radius: 15px;
      }

      p {
        margin-left: -215px;
        margin-bottom: 8px;
      }

      .field:hover {
        background-color: rgba(0, 0, 0, 0.1);
      }

      textarea {
        min-height: 150px;
      }

      .btn {
        width: 100%;
        padding: 0.5rem 1rem;
        background-color: #ff9100;
        color: #fff;
        font-size: 1.1rem;
        font-weight: 700;
        border: none;
        outline: none;
        cursor: pointer;
        transition: 0.3s;
        border-radius: 15px;
      }

      .btn:hover {
        background-color: #ff9100;
      }

      .field:focus {
        border: 2px solid rgba(30, 85, 250, 0.47);
        background-color: #fff;
      }

      @media screen and (max-width: 880px) {
        .contact-box {
          grid-template-columns: 1fr;
        }

        .left {
          height: 200px;
        }
      }
    </style>
  </head>

  <body>
	
    <div class="container">
      <div class="contact-box">
        <div class="left"></div>
        <div class="right">
          <h2>Reservasi</h2>
          <form method="post">
            <input
              type="text"
              name="nama"
              class="field"
              placeholder="Atas Nama"
              required />
            <input
              type="text"
              name="no_telp"
              class="field"
              placeholder="Nomor Telepon"
              required />
            <input
              type="text"
              name="tanggal"
              class="field"
              placeholder="Tanggal Reservasi"
              required />
            <input
              type="text"
              name="orang"
              class="field"
              placeholder="4 Orang..."
              required />
            <textarea
              nama="catatan"
              placeholder="Saya ingin reservasi pukul 5 sore"
              class="field"></textarea>
            <input type="submit" class="btn" name="proses" />
          </form>

          <?php
				include "koneksi.php";

				if (isset($_POST['proses'])) {
					mysqli_query($koneksi, "INSERT INTO reservasi set
									 nama= '$_POST[nama]',
									 no_telp = '$_POST[no_telp]',
									 tanggal = '$_POST[tanggal]',
									 orang = '$_POST[orang]',
									 catatan = '$_POST[catatan]'");

					echo "Reservasi telah diterima, staff kami akan segera menghubungi anda";
				}

				?>
        </div>
      </div>
    </div>
  </body>
</html>
