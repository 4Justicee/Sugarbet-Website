<?php include('../../config/koneksi.php');
$sql_0 = mysqli_query($conn, "SELECT * FROM `tb_seo` WHERE cuid = 1") or die(mysqli_error($conn));
$s0 = mysqli_fetch_array($sql_0);

header('Content-Type: application/json');
echo '
  {
    "dir": "ltr",
    "lang": "id-ID",
    "display_override": ["minimal-ui"],
    "display": "minimal-ui",
    "scope": "/",
    "start_url": "/",
    "short_name": "' . strip_tags(str_replace('\\', '/', $app_name)) . '",
    "name": "' . $s0['instansi'] . '",
    "description": "' . $s0['deskripsi'] . '",
    "categories": ["games", "slots", "technology", "gambling"],
    "background_color": "#ffffff",
    "theme_color": "' . $s0['warnadasar'] . '",
    "icons": [
      {
        "src": "' . $urldomain . '/assets/images/manifest/32.png",
        "sizes": "32x32",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "' . $urldomain . '/assets/images/manifest/48.png",
        "sizes": "48x48",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "' . $urldomain . '/assets/images/manifest/72.png",
        "sizes": "72x72",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "' . $urldomain . '/assets/images/manifest/96.png",
        "sizes": "96x96",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "' . $urldomain . '/assets/images/manifest/144.png",
        "sizes": "144x144",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "' . $urldomain . '/assets/images/manifest/168.png",
        "sizes": "168x168",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "' . $urldomain . '/assets/images/manifest/180.png",
        "sizes": "180x180",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "' . $urldomain . '/assets/images/manifest/192.png",
        "sizes": "192x192",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "' . $urldomain . '/assets/images/manifest/256.png",
        "sizes": "256x256",
        "type": "image/png",
        "purpose": "any maskable"
      },
      {
        "src": "' . $urldomain . '/assets/images/manifest/512.png",
        "sizes": "512x512",
        "type": "image/png",
        "purpose": "any maskable"
      }
    ],
    "platforms": ["play", "webapp"]
  }
';
