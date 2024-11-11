<?php include('../../config/koneksi.php');

header('Content-Type: text/plain');
echo '
#Hello search engine
#I am robots.txt
#I am very happy to be crawled

User-agent: Mediapartners-Google
Disallow: 

User-agent: *

Sitemap: '.$urldomain.'/sitemap.xml
Sitemap: '.$urldomain.'/rss.xml
';

?>