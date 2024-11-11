<?php
ob_start();
if (!isset($_SESSION)) {
	session_start();
}
include('../config/koneksi.php');

$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);

if ($_GET['id']) {
	$temptID = $_GET['id'];
?>
	<div class="card">
		<div class="card-body">
			<p>Preview Tampilan</p>
			<img src="<?= $urldomain; ?>/assets/images/themes/home_<?= $temptID; ?>.png" class="img-fluid" style="display: block; margin: 0 auto;">
		</div>
	</div>
<?php
}
?>