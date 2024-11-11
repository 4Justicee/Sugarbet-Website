<!--Game-->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Game",
    "@id": "#Game",
    "url": "<?= $urldomain; ?>",
    "name": "<?= $app_name; ?>",
    "alternateName": "<?= $app_name; ?> - <?= $slogan; ?>",
    "description": "<?= $s0['deskripsi']; ?>",
    "disambiguatingDescription": "<?= $s0['deskripsi']; ?>. <?= $app_name; ?>",
    "keywords": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "thumbnailUrl": "<?= $urldomain; ?>/assets/images/panel.webp",
    "image": {
      "@type": "ImageObject",
      "@id": "#Image",
      "inLanguage": "id",
      "width": 1920,
      "height": 1080,
      "url": "<?= $urldomain; ?>/assets/images/panel.webp",
      "caption": "<?= $app_name; ?>"
    },
    "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"],
    "potentialAction": {
      "@type": "ReadAction",
      "@id": "ReadActionSoftware",
      "target": {
        "@type": "EntryPoint",
        "@id": "EntryPointSoftware",
        "actionPlatform": ["https://schema.org/DesktopWebPlatform", "https://schema.org/IOSPlatform", "https://schema.org/AndroidPlatform"]
      }
    },
    "mainEntityOfPage": "false",
    "identifier": "Anxiety",
    "AggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "5",
      "reviewCount": "1<?= date('m') ?><?= date('d') ?>"
    },
    "review": [{
      "@type": "Review",
      "author": {
        "@type": "Person",
        "name": "<?= $app_name; ?>",
        "url": "<?= $urldomain; ?>"
      },
      "description": "Review <?= $s0['instansi']; ?>",
      "reviewBody": "<?= $s0['deskripsi']; ?>",
      "name": "<?= $app_name; ?>",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "0"
      }
    }],
    "offers": {
      "@type": "AggregateOffer",
      "lowPrice": "1<?= date('m') ?>0",
      "highPrice": "<?= date('Y') ?>00",
      "price": "<?= date('Y') ?>0",
      "priceCurrency": "IDR",
      "availability": " https://schema.org/InStock ",
      "itemCondition": "https://schema.org/NewCondition",
      "priceValidUntil": "<?= date('Y') ?>-12-12",
      "offerCount": "1<?= date('m') ?>"
    }
  }
</script>
<!--SoftwareApplication-->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "@id": "#SoftwareApplication",
    "url": "<?= $urldomain; ?>",
    "name": "<?= $app_name; ?>",
    "alternateName": "<?= $app_name; ?> - <?= $slogan; ?>",
    "description": "<?= $s0['deskripsi']; ?>",
    "disambiguatingDescription": "<?= $s0['deskripsi']; ?>. <?= $app_name; ?>",
    "keywords": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "operatingSystem": ["Chrome", "Windows", "Android", "iOS", "OSX", "Java", "Symbian"],
    "thumbnailUrl": "<?= $urldomain; ?>/assets/images/panel.webp",
    "image": {
      "@type": "ImageObject",
      "@id": "#Image",
      "inLanguage": "id",
      "width": 1920,
      "height": 1080,
      "url": "<?= $urldomain; ?>/assets/images/panel.webp",
      "caption": "<?= $app_name; ?>"
    },
    "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"],
    "potentialAction": {
      "@type": "ReadAction",
      "@id": "ReadActionSoftware",
      "target": {
        "@type": "EntryPoint",
        "@id": "EntryPointSoftware",
        "actionPlatform": ["https://schema.org/DesktopWebPlatform", "https://schema.org/IOSPlatform", "https://schema.org/AndroidPlatform"]
      }
    },
    "mainEntityOfPage": "false",
    "identifier": "Anxiety",
    "AggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "5",
      "reviewCount": "1<?= date('m') ?><?= date('d') ?>"
    },
    "review": [{
      "@type": "Review",
      "author": {
        "@type": "Person",
        "name": "<?= $app_name; ?>",
        "url": "<?= $urldomain; ?>"
      },
      "description": "Review <?= $s0['instansi']; ?>",
      "reviewBody": "<?= $s0['deskripsi']; ?>",
      "name": "<?= $app_name; ?>",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "0"
      }
    }],
    "offers": {
      "@type": "AggregateOffer",
      "lowPrice": "1<?= date('m') ?>0",
      "highPrice": "<?= date('Y') ?>00",
      "price": "<?= date('Y') ?>0",
      "priceCurrency": "IDR",
      "availability": " https://schema.org/InStock ",
      "itemCondition": "https://schema.org/NewCondition",
      "priceValidUntil": "<?= date('Y') ?>-12-12",
      "offerCount": "1<?= date('m') ?>"
    }
  }
</script>
<!--WebApplication-->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebApplication",
    "@id": "#WebApplication",
    "url": "<?= $urldomain; ?>",
    "name": "<?= $app_name; ?>",
    "alternateName": "<?= $app_name; ?> - <?= $slogan; ?>",
    "description": "<?= $s0['deskripsi']; ?>",
    "disambiguatingDescription": "<?= $s0['deskripsi']; ?>. <?= $app_name; ?>",
    "keywords": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "operatingSystem": ["Chrome", "Windows", "Android", "iOS", "OSX", "Java", "Symbian"],
    "thumbnailUrl": "<?= $urldomain; ?>/assets/images/panel.webp",
    "image": {
      "@type": "ImageObject",
      "@id": "#Image",
      "inLanguage": "id",
      "width": 1920,
      "height": 1080,
      "url": "<?= $urldomain; ?>/assets/images/panel.webp",
      "caption": "<?= $app_name; ?>"
    },
    "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"],
    "potentialAction": {
      "@type": "ReadAction",
      "@id": "ReadActionSoftware",
      "target": {
        "@type": "EntryPoint",
        "@id": "EntryPointSoftware",
        "actionPlatform": ["https://schema.org/DesktopWebPlatform", "https://schema.org/IOSPlatform", "https://schema.org/AndroidPlatform"]
      }
    },
    "isPartOf": {
      "@id": "#SoftwareApplication"
    },
    "mainEntityOfPage": "true",
    "identifier": "Anxiety",
    "AggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "5",
      "reviewCount": "1<?= date('m') ?><?= date('d') ?>"
    },
    "review": [{
      "@type": "Review",
      "author": {
        "@type": "Person",
        "name": "<?= $app_name; ?>",
        "url": "<?= $urldomain; ?>"
      },
      "description": "Review <?= $app_name; ?> - <?= $slogan; ?>",
      "reviewBody": "<?= $s0['deskripsi']; ?>",
      "name": "<?= $app_name; ?>",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "0"
      }
    }],
    "offers": {
      "@type": "AggregateOffer",
      "lowPrice": "1<?= date('m') ?>0",
      "highPrice": "<?= date('Y') ?>00",
      "price": "<?= date('Y') ?>0",
      "priceCurrency": "IDR",
      "availability": " https://schema.org/InStock ",
      "itemCondition": "https://schema.org/NewCondition",
      "priceValidUntil": "<?= date('Y') ?>-12-12",
      "offerCount": "1<?= date('m') ?>"
    }
  }
</script>
<!--ImageObject-->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ImageObject",
    "@id": "#ImageObject",
    "url": "<?= $urldomain; ?>",
    "name": "<?= $app_name; ?>",
    "alternateName": "<?= $app_name; ?> - <?= $slogan; ?>",
    "headline": "<?= $app_name; ?>",
    "description": "<?= $s0['deskripsi']; ?>",
    "disambiguatingDescription": "<?= $s0['deskripsi']; ?>. <?= $app_name; ?>",
    "abstract": "<?= $s0['deskripsi']; ?>. <?= $app_name; ?>",
    "keywords": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "genre": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "caption": "<?= $app_name; ?>",
    "contentUrl": "<?= $urldomain; ?>/assets/images/panel.webp",
    "inLanguage": "ID",
    "license": "<?= $urldomain; ?>/page/ketentuan",
    "acquireLicensePage": "<?= $urldomain; ?>",
    "creditText": "<?= $app_name; ?>",
    "creator": {
      "@type": "Person",
      "name": "<?= $app_name; ?>",
      "url": "https://anxietyproject.xyz/",
      "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"]
    },
    "copyrightNotice": "<?= $companyname; ?>",
    "isBasedOnUrl": "<?= $urldomain; ?>"
  }
</script>