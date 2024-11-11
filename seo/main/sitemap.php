<?php include('../../config/koneksi.php');
header('Content-Type: application/xml');
'<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1" xmlns:pagemap="http://www.google.com/schemas/sitemap-pagemap/1.0" xmlns:xhtml="http://www.w3.org/1999/xhtml" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd http://www.google.com/schemas/sitemap-news/0.9 https://www.google.com/schemas/sitemap-news/0.9/sitemap-news.xsd http://www.google.com/schemas/sitemap-image/1.1 https://www.google.com/schemas/sitemap-image/1.1/sitemap-image.xsd http://www.google.com/schemas/sitemap-video/1.1 https://www.google.com/schemas/sitemap-video/1.1/sitemap-video.xsd http://www.google.com/schemas/sitemap-pagemap/1.0 https://www.google.com/schemas/sitemap-pagemap/1.0/sitemap-pagemap.xsd">
	<url>
		<loc><?= $urldomain; ?></loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP') ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>1.0</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/register</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-1 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.9</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/login</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-1 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.9</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/forgot</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-1 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.9</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/contact</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-1 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.9</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/referral</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-2 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.9</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/promo</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-2 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.9</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/search</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-2 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.9</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/slot</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-3 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/casino</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-3 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/togel</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-3 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/sports</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-3 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/egames</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-3 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/fishing</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-3 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/sports/pragmatic-sports/</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-4 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/slot/pragmatic-play/</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-4 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/slot/rtp-slot</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-4 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/slot/slot-lainnya</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-4 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/slot/slot-terbaru</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-4 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/slot/buy-bonus-slot</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-4 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/slot/free-bonus-slot</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-4 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>

	<url>
		<loc><?= $urldomain; ?>/slot/ante-bonus-slot</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-4 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/slot/super-spin-slot</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-4 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<url>
		<loc><?= $urldomain; ?>/casino/pragmatic-live/</loc>
		<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-4 day')) ?></lastmod>
		<changefreq>weekly</changefreq>
		<priority>0.8</priority>
	</url>
	<?php
	$sql_page = mysqli_query($conn, "SELECT * FROM `tb_page` ORDER BY cuid ASC") or die(mysqli_error($conn));
	while ($sp = mysqli_fetch_array($sql_page)) :
	?>
		<url>
			<loc><?= $urldomain; ?>/page/<?= $sp['slug']; ?></loc>
			<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-5 day')) ?></lastmod>
			<changefreq>weekly</changefreq>
			<priority>0.7</priority>
		</url>
	<?php endwhile; ?>
	<?php
	$sql_search = mysqli_query($conn, "SELECT * FROM `tb_gamelist` ORDER BY cuid ASC") or die(mysqli_error($conn));
	while ($ss = mysqli_fetch_array($sql_search)) :
	?>
		<url>
			<loc><?= $urldomain; ?>/search?keyword=<?= htmlspecialchars(str_replace(' ', '+', $ss['gamename'])); ?></loc>
			<lastmod><?= date('Y-m-d\\TH:i:sP', strtotime('-6 day')) ?></lastmod>
			<changefreq>weekly</changefreq>
			<priority>0.7</priority>
		</url>
	<?php endwhile; ?>
</urlset>