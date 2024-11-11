<meta name="robots" content="noindex,nofollow">

<?php
  ob_start();
  if (!isset($_SESSION)) { session_start(); }

  include('../config/koneksi.php');
  set_time_limit(999999);

  $sitemaps = array(
    $urldomain."/sitemap.xml",
    $urldomain."/rss.xml"
  );

  //cUrl handler to ping sitemap or urls for search engines
  function Submit($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $httpCode;
  }

  function SubmitSiteMap($url) {
    $returnCode = Submit($url);
    if ($returnCode != 200 OR $returnCode != "200") {
      echo "<p>Ping $returnCode: $url <p><hr>";
    } else {
      echo "<p>Ping $returnCode: $url <p><hr>";
    }
  }

  foreach ($sitemaps as $sitemapUrl) {
    $sitemapUrl = htmlentities($sitemapUrl);

    //Google  
    $url = "https://www.google.com/ping?sitemap=".$sitemapUrl;
    SubmitSiteMap($url);
  }

?>