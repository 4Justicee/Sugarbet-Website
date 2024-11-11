<?php
include('session.php');

if (isset($_GET['periode'])) {
    $periode = $_GET['periode'];
} else {
    $periode = date('Y-m');
}
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");

// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Laporan Transaksi Keuangan Periode " . $periode . ".xls");

// Tambahkan table
$bulan = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
$now = date('n') - 1;
?>
<h3>Laporan Transaksi Keuangan Periode <?= $periode; ?></h3>
<p>&nbsp;</p>
<table>
    <thead>
        <tr>
            <th class="text-center" style="vertical-align: middle;">#</th>
            <th class="text-center" style="vertical-align: middle;">Date</th>
            <th class="text-center" style="vertical-align: middle;">Deposit</th>
            <th class="text-center" style="vertical-align: middle;">Withdraw</th>
            <th class="text-center" style="vertical-align: middle;">Margin</th>
            <th class="text-center" style="vertical-align: middle;">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $totalDepo = 0;
        $totalWd = 0;
        for ($i = 1; $i <= 31; $i++) :
            $a = strlen($i);
            if ($a == 1) {
                $ii = '0' . $i;
            } else {
                $ii = $i;
            }
            $tanggal = $periode . '-' . $ii;
        ?>
            <tr>
                <td class="text-center" style="vertical-align: middle; font-size: 14px;"><?= $i; ?></td>
                <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?= $tanggal; ?></td>
                <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;">
                    <?php
                    $getDepo = mysqli_query($conn, "SELECT SUM(total) as totalDepo FROM `tb_transaksi` WHERE date LIKE '$tanggal%' AND jenis = 1 AND status = 1") or die(mysqli_error($conn));
                    $gd = mysqli_fetch_array($getDepo);
                    $totalDepo += $gd['totalDepo'];
                    if ($gd['totalDepo'] == 0) {
                        echo '0';
                    } else {
                        echo number_format($gd['totalDepo'], 0, ",", ".");
                    }
                    ?>
                </td>
                <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;">
                    <?php
                    $getWd = mysqli_query($conn, "SELECT SUM(total) as totalDepo FROM `tb_transaksi` WHERE date LIKE '$tanggal%' AND userID NOT IN (1,2) AND jenis = 2 AND status = 1") or die(mysqli_error($conn));
                    $gw = mysqli_fetch_array($getWd);
                    $totalWd += $gw['totalDepo'];
                    if ($gw['totalDepo'] == 0) {
                        echo '0';
                    } else {
                        echo number_format($gw['totalDepo'], 0, ",", ".");
                    }
                    ?>
                </td>
                <td class="text-right" style="vertical-align: middle; white-space: normal; font-size: 14px; text-align: right;">
                    <?php
                    $margin = $gd['totalDepo'] - $gw['totalDepo'];
                    if ($margin < 0) {
                        echo '<span class="text-danger">' . number_format($margin, 0, ",", ".") . '</span>';
                    } else if ($margin == 0) {
                        echo '<span class="text-dark">' . number_format($margin, 0, ",", ".") . '</span>';
                    } else {
                        echo '<span class="text-success">' . number_format($margin, 0, ",", ".") . '</span>';
                    }
                    ?>
                </td>
                <td class="text-center" style="vertical-align: middle; white-space: normal; font-size: 14px;"><?php if ($gd['totalDepo'] < $gw['totalDepo']) {
                                                                                                                    echo '<button class="btn btn-danger btn-sm">Admin Loss</button>';
                                                                                                                } else if ($gd['totalDepo'] > $gw['totalDepo']) {
                                                                                                                    echo '<button class="btn btn-success btn-sm">Admin Profit</button>';
                                                                                                                } else {
                                                                                                                    echo '';
                                                                                                                } ?></td>
            </tr>
        <?php endfor; ?>
    </tbody>
    <tfoot>
        <tr class="<?php if ($totalDepo < $totalWd) {
                        echo 'bg-danger';
                    } else {
                        echo 'bg-success';
                    } ?> text-white">
            <th class="text-center" style="vertical-align: middle;"></th>
            <th class="text-center" style="vertical-align: middle;"></th>
            <th class="text-right" style="vertical-align: middle; text-align: right;">
                <?php
                if ($totalDepo == 0) {
                    echo '0';
                } else {
                    echo number_format($totalDepo, 0, ",", ".");
                }
                ?>
            </th>
            <th class="text-right" style="vertical-align: middle; text-align: right;">
                <?php
                if ($totalWd == 0) {
                    echo '0';
                } else {
                    echo number_format($totalWd, 0, ",", ".");
                }
                ?>
            </th>
            <th class="text-right" style="vertical-align: middle; text-align: right;">
                <?php
                $margine = $totalDepo - $totalWd;
                echo number_format($margine, 0, ",", ".");
                ?>
            </th>
            <th class="text-center" style="vertical-align: middle;"><?php if ($totalDepo < $totalWd) {
                                                                        echo 'Admin Loss';
                                                                    } else {
                                                                        echo 'Admin Profit';
                                                                    } ?></th>
        </tr>
    </tfoot>
</table>