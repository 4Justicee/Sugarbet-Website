<?php
include('../session.php');

$userID = $u['cuid'];
$users = $u['user'];

$getLastBalance = json_decode($WL->getbalance($users), true);
$glb = $getLastBalance['user_list'];
?>
<tbody>
  <tr>
    <td class="dropdownoptiontopwallet">
      Dompet Utama
    </td>
    <td class="text-right dropdownoptiontopwalletinfo">
      Rp. <?= number_format($glb[0]['balance'], 0, ",", "."); ?>
    </td>
  </tr>
</tbody>