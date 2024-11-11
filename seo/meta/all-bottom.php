<!--Author-->
<meta name="author" content="<?= $s0['instansi']; ?>">
<meta name="publisher" content="<?= $app_name; ?>">
<meta name="publisher" content="<?= $companyname; ?>">
<!--Location-->
<link rel="alternate" href="<?= $url; ?>" hreflang="ID">
<link rel="alternate" href="<?= $url; ?>" hreflang="x-default">
<meta content="ID" name="geo.region">
<meta content="ID" name="geo.country">
<meta content="ID" name="geo.placename">
<meta content="x;x" name="geo.position">
<meta content="x,x" name="ICBM">
<!--Webapp-->
<link rel="manifest" href="<?= $urldomain; ?>/manifest.json">
<meta name="msapplication-starturl" content="/">
<meta name="start_url" content="/">
<meta name="application-name" content="<?= $app_name; ?>">
<meta name="apple-mobile-web-app-title" content="<?= $app_name; ?>">
<meta name="msapplication-tooltip" content="<?= $app_name; ?>">
<meta name="theme-color" content="<?= $s0['warnadasar']; ?>">
<meta name="background_color" content="#FFFFFF">
<meta name="msapplication-navbutton-color" content="<?= $s0['warnadasar']; ?>">
<meta name="msapplication-TileColor" content="#FFFFFF">
<meta name="apple-mobile-web-app-status-bar-style" content="<?= $s0['warnadasar']; ?>">
<meta name="mssmarttagspreventparsing" content="true">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="msapplication-TileImage" content="<?= $urldomain; ?>/assets/images/manifest/144.png">
<link rel="apple-touch-icon" href="<?= $urldomain; ?>/assets/images/manifest/180.png">
<!--Resource-->
<link href="//fonts.gstatic.com" rel="preconnect dns-prefetch" crossorigin>
<link href="//ajax.googleapis.com" rel="dns-prefetch">
<link href="//fonts.googleapis.com" rel="preconnect dns-prefetch">
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="//www.googletagservices.com" rel="dns-prefetch">
<link href="//partner.googleadservices.com" rel="dns-prefetch">
<link href="//www.google.com" rel="preconnect dns-prefetch">
<link href="//www.youtube.com" rel="preconnect dns-prefetch">
<link href="//www.recaptcha.net" rel="preconnect dns-prefetch">
<link href="//www.gstatic.com" rel="preconnect dns-prefetch">
<link href="//www.googletagmanager.com" rel="preconnect dns-prefetch">
<link href="//ajax.cloudflare.com" rel="preconnect dns-prefetch">
<link href="//cdn.jsdelivr.net" rel="preconnect dns-prefetch">
<link href="//connect.facebook.net" rel="preconnect dns-prefetch">
<link href="//pagead2.googlesyndication.com" rel="preconnect dns-prefetch">
<link href="//googleads.g.doubleclick.net" rel="preconnect dns-prefetch">
<link href="//ad.doubleclick.net" rel="preconnect dns-prefetch">
<link href="//static.doubleclick.net" rel="preconnect dns-prefetch">
<link href="//tpc.googlesyndication.com" rel="preconnect dns-prefetch">
<link href="//adservice.google.com" rel="preconnect dns-prefetch">
<!--Font Style-->
<link href="https://fonts.googleapis.com/css2?family=<?= $s0['urlweb']; ?>:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<!--Color Scheme-->
<style type="text/css">
    html {
        font-family: '<?= str_replace('+', ' ', $s0['urlweb']); ?>', Roboto, sans-serif !important;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: transparent
    }

    body {
        background: <?= $s0['warnabg']; ?> !important;
        background-size: cover;
        width: 100%;
        height: 100%;
        font-family: '<?= str_replace('+', ' ', $s0['urlweb']); ?>', Roboto, sans-serif !important;
        font-size: 14px;
        color: #DEDEDE;
        font-weight: normal;
    }

    html::-webkit-scrollbar-thumb {
        background-color: <?= $s0['warnabg']; ?> !important;
        border-radius: 0px;
    }

    .progress-bar-custom {
        height: 2px;
        background: <?= $s0['warnabg']; ?> !important;
        width: 0%;
    }

    .element::-webkit-scrollbar-thumb {
        background-color: <?= $s0['warnabg']; ?> !important;
        border-radius: 0px;
    }

    .backtotop {
        display: none;
        position: fixed;
        bottom: 150px;
        right: 20px;
        width: 40px;
        height: 40px;
        background: <?= $s0['warnabg']; ?> !important;
        cursor: pointer;
        overflow: hidden;
        font-size: 22px;
        color: #fff;
        text-align: center;
        line-height: 40px;
        border-radius: 50px;
        z-index: 9999;
    }

    .btn-primary {
        background-image: linear-gradient(to right, <?= $s0['warnahover']; ?> 0%, <?= $s0['warnadasar']; ?> 50%, <?= $s0['warnahover']; ?> 100%) !important;
        color: #F1F1FF;
        background-color: <?= $s0['warnadasar']; ?> !important;
    }

    .btn-primary:hover {
        background-image: linear-gradient(to top, <?= $s0['warnahover']; ?> 0%, <?= $s0['warnadasar']; ?> 50%, <?= $s0['warnahover']; ?> 100%) !important;
        color: #F1F1FF;
        background-color: <?= $s0['warnahover']; ?> !important;
        border-color: <?= $s0['warnahover']; ?> !important;
    }

    .btn-primary:not(:disabled):not(.disabled).active,
    .btn-primary:not(:disabled):not(.disabled):active,
    .show>.btn-primary.dropdown-toggle {
        color: #F1F1FF;
        background-color: <?= $s0['warnadasar']; ?> !important;
        border-color: <?= $s0['warnadasar']; ?> !important;
    }

    .btn-outline-primary {
        color: <?= $s0['warnadasar']; ?> !important;
        background-color: transparent;
        background-image: none;
        border-color: <?= $s0['warnadasar']; ?> !important;
    }

    .btn-outline-primary:hover {
        color: #F1F1FF;
        background-color: <?= $s0['warnadasar']; ?> !important;
        border-color: <?= $s0['warnadasar']; ?> !important;
    }

    .btn-outline-primary.focus,
    .btn-outline-primary:focus {
        color: #F1F1FF;
        background-color: <?= $s0['warnadasar']; ?> !important;
        border-color: <?= $s0['warnadasar']; ?> !important;
        box-shadow: none;
    }

    .btn-outline-primary.disabled,
    .btn-outline-primary:disabled {
        color: <?= $s0['warnadasar']; ?> !important;
        background-color: transparent;
    }

    .btn-outline-primary:not(:disabled):not(.disabled).active,
    .btn-outline-primary:not(:disabled):not(.disabled):active,
    .show>.btn-outline-primary.dropdown-toggle {
        color: #F1F1FF;
        background-color: <?= $s0['warnadasar']; ?> !important;
        border-color: <?= $s0['warnadasar']; ?> !important;
    }

    .text-primary {
        color: <?= $s0['warnadasar']; ?> !important;
    }

    .dropdownoptiontopwalletinfo {
        border-top: 0;
        vertical-align: middle;
        color: <?= $s0['warnadasar']; ?> !important;
    }

    .dropdownoptiontopsaldotarik {
        border-top: 0;
        vertical-align: middle;
        padding-top: 5px;
        padding-bottom: 5px;
        color: <?= $s0['warnadasar']; ?> !important;
    }

    .bg-custom {
        border-bottom: 1px;
        background: url(<?= $urldomain; ?>/assets/images/bg.webp) center center <?= $s0['warnabg']; ?> !important;
    }

    header {
        background: <?= $s0['warnabg']; ?> !important;
    }

    section.site-header {
        height: 90px;
        background: <?= $s0['warnabg']; ?> !important;
        z-index: 9999 !important;
    }

    .footercontentdesktop {
        border-top: 3px solid <?= $s0['warnadasar']; ?> !important;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .footercontenttext {
        width: 40px;
        height: 40px;
        padding: 4px;
        margin: 0 auto;
        border-radius: 50%;
        font-size: 23px;
        background: linear-gradient(to right, <?= $s0['warnahover']; ?> 0%, <?= $s0['warnadasar']; ?> 50%, <?= $s0['warnahover']; ?> 100%) !important;
    }

    .dashboard {
        background-color: <?= $s0['warnabg']; ?> !important;
        border-bottom: 1px;
        color: #F1F1FF;
    }

    .product-tile__clip-paths[data-v-10b0ebbe] {
        display: flex;
        padding: 0;
        padding-top: 0px;
        margin-top: -39px;
        width: 100%;
        height: 50px;
        position: relative;
        top: -10px;
        background-color: <?= $s0['warnadasar']; ?> !important;
        clip-path: polygon(0 23%, 6% 72%, 12% 47%, 18% 70%, 24% 51%, 32% 80%, 38% 47%, 44% 80%, 50% 49%, 56% 70%, 60% 86%, 66% 42%, 72% 65%, 78% 38%, 84% 64%, 90% 17%, 96% 20%, 100% 1%, 100% calc(100% + 1px), 0 calc(100% + 1px));
        -webkit-clip-path: polygon(0 23%, 6% 72%, 12% 47%, 18% 70%, 24% 51%, 32% 80%, 38% 47%, 44% 80%, 50% 49%, 56% 70%, 60% 86%, 66% 42%, 72% 65%, 78% 38%, 84% 64%, 90% 17%, 96% 20%, 100% 1%, 100% calc(100% + 1px), 0 calc(100% + 1px));
    }

    .sidenav .side_navigation ul.nav.flex-column li.nav-item a.nav-link {
        color: #F1F1FF;
        -webkit-transition: line-height 0.3s ease-in-out;
        transition: line-height 0.3s ease-in-out;
        border-bottom: 1px dotted <?= $s0['warnadasar']; ?> !important;
    }

    .bg-primary {
        background-color: <?= $s0['warnahover']; ?>CC !important;
    }

    .backtotop:hover {
        opacity: 1;
        background: <?= $s0['warnahover']; ?> !important;
    }

    .togelheader {
        border: 3px solid <?= $s0['warnahover']; ?> !important;
        border-top-left-radius: 35px;
        border-top-right-radius: 35px;
    }

    .togeltitle {
        background: <?= $s0['warnahover']; ?> !important;
        color: #FFFFFF;
    }

    .footercontenttext {
        width: 40px;
        height: 40px;
        padding: 4px;
        margin: 0 auto;
        border-radius: 50%;
        font-size: 23px;
        background: linear-gradient(to right, <?= $s0['warnahover']; ?> 0%, <?= $s0['warnadasar']; ?> 50%, <?= $s0['warnahover']; ?> 100%) !important;
    }

    .dashboard ul.nav.flex-column li.nav-item a.nav-link:hover,
    .dashboard ul.nav.flex-column li.nav-item a.nav-link.active {
        background: <?= $s0['warnahover']; ?>CC !important;
        color: #F1F1FF !important;
    }

    .dashboard ul.nav li.nav-item a.nav-link:hover,
    .dashboard ul.nav li.nav-item a.nav-link.active {
        background: <?= $s0['warnahover']; ?>CC !important;
        color: #F1F1FF !important;
    }

    .dashboard h1,
    .dashboard h2,
    .dashboard h3,
    .dashboard h4,
    .dashboard h5,
    .dashboard h6 {
        color: #F1F1FF !mportant;
        line-height: 10px;
    }

    .dashboard h1,
    .dashboard h2,
    .dashboard h3,
    .dashboard h4,
    .dashboard h5,
    .dashboard h6 {
        color: <?= $s0['warnadasar']; ?>;
        line-height: 10px;
    }

    .sidenav .side_navigation ul.nav.flex-column li.nav-item a.nav-link:hover {
        background: <?= $s0['warnahover']; ?>CC !important;
        color: #F1F1FF !important;
    }

    .owl-prev,
    .owl-next {
        position: absolute;
        height: 82px;
        color: #F1F1FF !important;
        background: <?= $s0['warnabg']; ?> !important;
        border-radius: 5px;
        border: none;
        z-index: 100;
    }
</style>