<?php include('../../config/koneksi.php');
$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);

header('Content-Type: application/xml');
'<?xml version="1.0" encoding="utf-8"?>';
?>
<rss xmlns:g="http://base.google.com/ns/1.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:wfw="http://wellformedweb.org/CommentAPI/" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" xmlns:slash="http://purl.org/rss/1.0/modules/slash/" xmlns:media="http://search.yahoo.com/mrss/" xmlns:georss="http://www.georss.org/georss" xmlns:openSearch="http://a9.com/-/spec/opensearchrss/1.0/" xmlns:thr="http://purl.org/syndication/thread/1.0" xmlns:feedburner="http://rssnamespace.org/feedburner/ext/1.0" xmlns:geo="http://www.w3.org/2003/01/geo/wgs84_pos#" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" version="2.0">
	<channel>
		<title><?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
		<description><?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
		<image>
			<title><?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<url><?= $urldomain; ?>/upload/favicon.png</url>
			<link><?= $urldomain; ?></link>
		</image>
		<category><?= strip_tags(str_replace('\\', '/', $app_name)); ?></category>
		<link><?= $urldomain; ?></link>
		<atom:link href="<?= $urldomain; ?>/rss.xml" rel="self" type="application/rss+xml" />
		<atom:link href="<?= $urldomain; ?>" rel="alternate" type="application/rss+xml" />
		<pubDate><?= date('r'); ?></pubDate>
		<lastBuildDate><?= date('r'); ?></lastBuildDate>
		<sy:updatePeriod>hourly</sy:updatePeriod>
		<sy:updateFrequency>1</sy:updateFrequency>
		<managingEditor><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</managingEditor>
		<webMaster><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</webMaster>
		<language>id-ID</language>
		<copyright>Copyright <?= date('Y'); ?>, <?= strip_tags(str_replace('\\', '/', $app_name)); ?></copyright>
		<generator><?= strip_tags(str_replace('\\', '/', $app_name)); ?></generator>
		<itunes:explicit>no</itunes:explicit>
		<itunes:image href="<?= $urldomain; ?>/upload/favicon.png" />
		<itunes:keywords><?= strip_tags(str_replace('\\', '/', $app_name)); ?></itunes:keywords>
		<itunes:summary><?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></itunes:summary>
		<itunes:subtitle><?= strip_tags(str_replace('\\', '/', $app_name)); ?></itunes:subtitle>
		<itunes:category text="Technology" />
		<itunes:category text="Business" />
		<itunes:category text="Arts">
			<itunes:category text="Performing Arts" />
			<itunes:category text="Visual Arts" />
		</itunes:category>
		<itunes:author><?= strip_tags(str_replace('\\', '/', $app_name)); ?></itunes:author>
		<itunes:owner>
			<itunes:email><?= $emailutama; ?></itunes:email>
			<itunes:name><?= strip_tags(str_replace('\\', '/', $app_name)); ?></itunes:name>
		</itunes:owner>
		<item>
			<title><?= $app_name; ?> - <?= $slogan; ?></title>
			<description><?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/panel.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?></guid>
			<link><?= $urldomain; ?></link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r'); ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Daftar - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Daftar - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/auth.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/register</guid>
			<link><?= $urldomain; ?>/register</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-1 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Masuk - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Masuk - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/auth.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/login</guid>
			<link><?= $urldomain; ?>/login</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-1 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Lupa Password - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Lupa Password - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/auth.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/forgot</guid>
			<link><?= $urldomain; ?>/forgot</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-1 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Hubungi Kami - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Hubungi Kami - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/contact.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/contact</guid>
			<link><?= $urldomain; ?>/contact</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-1 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Program Referral - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Program Referral - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/referral.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/referral</guid>
			<link><?= $urldomain; ?>/referral</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-2 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Promosi &amp; Event - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Promosi &amp; Event - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/promosi.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/promo</guid>
			<link><?= $urldomain; ?>/promo</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-2 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Main Game Slot &amp; Casino - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Main Game Slot &amp; Casino - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/pencarian.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/search</guid>
			<link><?= $urldomain; ?>/search</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-2 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Slot - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Slot - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/slot.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/slot</guid>
			<link><?= $urldomain; ?>/slot</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-3 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Casino - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Casino - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/casino.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/casino</guid>
			<link><?= $urldomain; ?>/casino</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-3 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Togel - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Togel - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/togel.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/togel</guid>
			<link><?= $urldomain; ?>/togel</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-3 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Sports - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Sports - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/sports.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/sports</guid>
			<link><?= $urldomain; ?>/sports</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-3 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>E-Games - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>E-Games - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/egames.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/egames</guid>
			<link><?= $urldomain; ?>/egames</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-3 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Fishing - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Fishing - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/fishing.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/fishing</guid>
			<link><?= $urldomain; ?>/fishing</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-3 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>

		<item>
			<title>Sports Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Sports Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/pragmatic-play.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/sports/pragmatic-sports/</guid>
			<link><?= $urldomain; ?>/sports/pragmatic-sports/</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-4 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>

		<item>
			<title>Slot Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Slot Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/pragmatic-play.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/slot/pragmatic-play/</guid>
			<link><?= $urldomain; ?>/slot/pragmatic-play/</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-4 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>RTP Slot Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>RTP Slot Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/rtp-slot.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/slot/rtp-slot</guid>
			<link><?= $urldomain; ?>/slot/rtp-slot</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-4 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Slot Lainnya - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Slot Lainnya - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/slot-lainnya.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/slot/slot-lainnya</guid>
			<link><?= $urldomain; ?>/slot/slot-lainnya</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-4 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Slot Terbaru - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Slot Terbaru - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/slot-terbaru.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/slot/slot-terbaru</guid>
			<link><?= $urldomain; ?>/slot/slot-terbaru</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-4 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Buy Bonus Slot Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Buy Bonus Slot Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/buy-bonus-slot.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/slot/buy-bonus-slot</guid>
			<link><?= $urldomain; ?>/slot/buy-bonus-slot</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-4 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Free Bonus Slot Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Free Bonus Slot Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/free-bonus-slot.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/slot/free-bonus-slot</guid>
			<link><?= $urldomain; ?>/slot/free-bonus-slot</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-4 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Ante Bonus Slot Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Ante Bonus Slot Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/ante-bonus-slot.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/slot/ante-bonus-slot</guid>
			<link><?= $urldomain; ?>/slot/ante-bonus-slot</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-4 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Super Spin Slot Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Super Spin Slot Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/super-spin-slot.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/slot/super-spin-slot</guid>
			<link><?= $urldomain; ?>/slot/super-spin-slot</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-4 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<item>
			<title>Casino Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?></title>
			<description>Casino Pragmatic Play - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
			<media:thumbnail url="<?= $urldomain; ?>/assets/images/pages/pragmatic-live.webp" />
			<content:encoded>
				<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
			</content:encoded>
			<guid isPermaLink="true"><?= $urldomain; ?>/casino/pragmatic-live/</guid>
			<link><?= $urldomain; ?>/casino/pragmatic-live/</link>
			<category>Slots</category>
			<category>Gambling</category>
			<category>Lottery</category>
			<category>Technology</category>
			<category>Games</category>
			<category>Poker</category>
			<category>Casino</category>
			<category>Sports</category>
			<pubDate><?= date('r', strtotime('-4 day')) ?></pubDate>
			<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
		</item>
		<?php
		$sql_page = mysqli_query($conn, "SELECT * FROM `tb_page` ORDER BY cuid ASC") or die(mysqli_error($conn));
		while ($sp = mysqli_fetch_array($sql_page)) :
		?>
			<item>
				<title><?= strip_tags(str_replace('\\', '/', $sp['nama_page'])); ?> - <?= $app_name; ?></title>
				<description><?= strip_tags(str_replace('\\', '/', $sp['nama_page'])); ?> - <?= $app_name; ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
				<media:thumbnail url="<?= $urldomain; ?>/assets/images/panel.webp" />
				<content:encoded>
					<![CDATA[ <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
				</content:encoded>
				<guid isPermaLink="true"><?= $urldomain; ?>/page/<?= $sp['slug']; ?></guid>
				<link><?= $urldomain; ?>/page/<?= $sp['slug']; ?></link>
				<category>Slots</category>
				<category>Gambling</category>
				<category>Lottery</category>
				<category>Technology</category>
				<category>Games</category>
				<category>Poker</category>
				<category>Casino</category>
				<category>Sports</category>
				<pubDate><?= date('r', strtotime('-5 day')) ?></pubDate>
				<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
			</item>
		<?php endwhile; ?>
		<?php
		$sql_search = mysqli_query($conn, "SELECT * FROM `tb_gamelist` ORDER BY cuid ASC") or die(mysqli_error($conn));
		while ($ss = mysqli_fetch_array($sql_search)) :
		?>
			<item>
				<title>Main Game Slot &amp; Casino <?= htmlspecialchars($ss['gamename']); ?> - <?= $app_name; ?></title>
				<description>Main Game Slot &amp; Casino <?= htmlspecialchars($ss['gamename']); ?> - <?= $app_name; ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?></description>
				<media:thumbnail url="<?= $urldomain; ?>/assets/images/panel.webp" />
				<content:encoded>
					<![CDATA[ Main Game Slot &amp; Casino <?= htmlspecialchars($ss['gamename']); ?> - <?= $app_name; ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?> ]]>
				</content:encoded>
				<guid isPermaLink="true"><?= $urldomain; ?>/search?keyword=<?= htmlspecialchars(str_replace(' ', '+', $ss['gamename'])); ?></guid>
				<link><?= $urldomain; ?>/search?keyword=<?= htmlspecialchars(str_replace(' ', '+', $ss['gamename'])); ?></link>
				<category>Slots</category>
				<category>Gambling</category>
				<category>Lottery</category>
				<category>Technology</category>
				<category>Games</category>
				<category>Poker</category>
				<category>Casino</category>
				<category>Sports</category>
				<pubDate><?= date('r', strtotime('-6 day')) ?></pubDate>
				<author><?= $emailutama; ?> (<?= strip_tags(str_replace('\\', '/', $app_name)); ?>)</author>
			</item>
		<?php endwhile; ?>
	</channel>
</rss>