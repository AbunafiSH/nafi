<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
</head>

<body>
  <?php include('navbar.php') ?>
  <div class="container">
    <center><h1>DAFTAR PENJUALAN</h1></center>
    <table class="table">
      <tr>
        <td>ID</td>
        <td>Tanggal</td>
        <td>Total</td>
        <td>ID Pelanggan</td>
        <td>Petugas</td>
      </tr>

      <?php
      //ambil koneksi
      include('../config.php');
      $sql = mysqli_query($koneksi, "SELECT * FROM tb_penjualan");
      foreach ($sql as $penjualan) {
      ?>
        <tr>
          <td><?= $penjualan['id_penjualan'] ?></td>
          <td><?= $penjualan['tgl_penjualan'] ?></td>
          <td><?= $penjualan['total'] ?></td>
          <td><?= $penjualan['id_pelanggan'] ?></td>
          <td><?= $penjualan['id_login'] ?></td>
        </tr>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
      <?php
      } ?>

    </table>



  </div>
</body>

</html>