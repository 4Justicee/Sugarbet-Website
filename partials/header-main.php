<span class="mcp-header-main">
	<!--Summernote-->
	<link href="<?= $urldomain; ?>/assets/plugins/summernote/dist/summernote-bs4.css?<?= $cache; ?>" rel="stylesheet">
	<!--Simplebar-->
	<link href="<?= $urldomain; ?>/assets/plugins/simplebar/css/simplebar.css?<?= $cache; ?>" rel="stylesheet">
	<!--Bootstrap Core-->
	<link href="<?= $urldomain; ?>/assets/css/bootstrap.min.css?<?= $cache; ?>" rel="stylesheet">
	<!--Data Tables -->
	<link href="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css?<?= $cache; ?>" rel="stylesheet">
	<link href="<?= $urldomain; ?>/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css?<?= $cache; ?>" rel="stylesheet">
	<!--Animate-->
	<link href="<?= $urldomain; ?>/assets/css/animate.css?<?= $cache; ?>" rel="stylesheet">
	<!--Icons-->
	<link href="<?= $urldomain; ?>/assets/css/icons.css?<?= $cache; ?>" rel="stylesheet">
	<!--Horizontal Menu-->
	<link href="<?= $urldomain; ?>/assets/css/horizontal-menu.css?<?= $cache; ?>" rel="stylesheet">
	<!--Carousel-->
	<link href="<?= $urldomain; ?>/assets/css/owl.carousel.css?<?= $cache; ?>" rel="stylesheet">
	<!--Custom-->
	<link href="<?= $urldomain; ?>/assets/css/app-style.css?<?= $cache; ?>" rel="stylesheet">
	<link href="<?= $urldomain; ?>/assets/css/style-main.css?<?= $cache; ?>" rel="stylesheet">

	<!--Hyperlink Nofollow JS-->
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var links = document.getElementsByTagName("a");
			var i;
			for (i = 0; i < links.length; i++) {
				if (!links[i].rel && location.hostname !== links[i].hostname && links[i].rel !== "dofollow" && links[i].rel !== "sponsored" && links[i].rel !== "ugc" && links[i].rel !== "ugc nofollow") {
					links[i].rel = "nofollow noopener noreferrer";
				}
			}
		});
	</script>

	<?php include('extra_header_code.php'); ?>
</span>