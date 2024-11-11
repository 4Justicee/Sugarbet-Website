<?php
include('session.php');

$sql_1 = mysqli_query($conn, "SELECT * FROM `tb_ppplayer` WHERE status = 1 ORDER BY cuid DESC") or die(mysqli_error($conn));
$no = 0;
while ($s1 = mysqli_fetch_array($sql_1)) :
  $no++;
  $externalPlayerId = $s1['externalPlayerId'];
  $usersID = $s1['userID'];
  $provider = $s1['provider'];
  $getTransaksi = mysqli_query($conn, "SELECT * FROM `tb_transaksi` WHERE userID = '$usersID' AND jenis = 5 AND note = 'Transfer to $provider' AND providerID = '$providerID' AND status = 1 ORDER BY cuid DESC LIMIT 1") or die(mysqli_error($conn));
  $gt = mysqli_fetch_array($getTransaksi);
  $getUser = mysqli_query($conn, "SELECT * FROM `tb_user` WHERE cuid = '$usersID'") or die(mysqli_error($conn));
  $gu = mysqli_fetch_array($getUser);
?>
  <tr>
    <td class="text-center" style="vertical-align: middle; white-space: normal;"><?= $no; ?></td>
    <td style="vertical-align: middle; white-space: normal;"><?= $gu['user']; ?></td>
    <td style="vertical-align: middle; white-space: normal;"><?= $s1['provider']; ?></td>
    <td class="text-right" style="vertical-align: middle; white-space: normal;">Rp. <?= number_format($gt['total'], 0, ",", "."); ?></td>
    <td class="text-center" style="vertical-align: middle; white-space: normal;">
      <?php
      if ($gt['total'] == $newSaldo) {
        echo '
      <span class="btn btn-primary btn-sm">Draw</span>
      ';
      } else if ($gt['total'] > $newSaldo) {
        echo '
      <span class="btn btn-danger btn-sm">Loss</span>
      ';
      } else {
        echo '
      <span class="btn btn-success btn-sm">Profit</span>
      ';
      }
      ?>
    </td>
  </tr>
<?php endwhile; ?>