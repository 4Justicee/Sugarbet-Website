<?php
$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);
?>

<?php if ($s0['statusfooter'] == 1) : ?>
	<span class="mcp-footer-desc">
		<hr>
		<small class="extra-small-font d-none d-sm-block">
			<?= $s0['footer']; ?>
		</small>
	</span>
<?php endif; ?>