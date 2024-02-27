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
  <title>Registrasi</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">
  <center>
  <h1> DAFTAR PENGGUNA</h1>
  <a href="v_tambah_pengguna_baru.php">Tambah Pengguna</a>
  <br><br>
  </center>
  <table class="table table-dark table-striped">
    <tr>
      <td>Id Login</td>
      <td>Nama</td>
      <td>Username</td>
      <td>Password</td>
      <td>Status</td>
      <td>Aksi</td>
    </tr>
    <?php
    include "../config.php";
    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_login ORDER BY id_login DESC');
    foreach ($sql as $pengguna) {
    ?>
      <tr>
        <td><?= $pengguna['id_login'] ?></td>
        <td><?= $pengguna['nama_pengguna'] ?></td>
        <td><?= $pengguna['username_pengguna'] ?></td>
        <td><?= $pengguna['password_pengguna'] ?></td>
        <td><?= $pengguna['status'] ?></td>
        <td><a href="v_ubah_pengguna.php?id_login=<?= $pengguna['id_login'] ?> "  class="btn btn-outline-primary">Ubah</a></td>
      </tr>
      <script src="../js/bootstrap.min.js"></script>
     <?php } ?>
  </table>
  </div>
</body>

</html>