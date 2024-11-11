<?php
include('session.php');

if ($_GET['pid']) {
  $pid = $_GET['pid'];
  $kabupaten = mysqli_query($conn, "SELECT * FROM `tb_periode` WHERE pid = '$pid' ORDER BY no ASC") or die(mysqli_error($conn));
  while ($kk = mysqli_fetch_array($kabupaten)) {
?>
    <option value="<?= $kk['no']; ?>"><?= $kk['no']; ?></option>
<?php
  }
}
?>