<!--WebPage-->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "@id": "#WebPage",
    "url": "<?= $url; ?>",
    "name": "Slot Terbaru - <?= $app_name; ?>",
    "alternateName": "Slot Terbaru <?= $app_name; ?>",
    "headline": "Slot Terbaru - <?= $app_name; ?>",
    "alternativeHeadline": "Slot Terbaru <?= $app_name; ?>",
    "description": "Slot Terbaru <?= $app_name; ?>. <?= $s0['instansi']; ?> <?= $slogan; ?>. <?= $s0['deskripsi']; ?>",
    "disambiguatingDescription": "Slot Terbaru - <?= $app_name; ?>. <?= $descalt; ?>",
    "abstract": "Slot Terbaru <?= $app_name; ?>. <?= $s0['instansi']; ?> <?= $slogan; ?>. <?= $s0['deskripsi']; ?>. <?= $descalt; ?>",
    "keywords": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "genre": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "thumbnailUrl": "<?= $urldomain; ?>/assets/images/pages/slot-terbaru.webp",
    "primaryImageOfPage": {
      "@type": "ImageObject",
      "@id": "#ImageOfPage",
      "inLanguage": "ID",
      "contentUrl": "<?= $urldomain; ?>/assets/images/pages/slot-terbaru.webp",
      "caption": "Slot Terbaru - <?= $app_name; ?>"
    },
    "image": {
      "@type": "ImageObject",
      "@id": "#Image",
      "inLanguage": "ID",
      "width": 1920,
      "height": 1080,
      "url": "<?= $urldomain; ?>/assets/images/pages/slot-terbaru.webp",
      "caption": "Slot Terbaru - <?= $app_name; ?>"
    },
    "inLanguage": "ID",
    "commentCount": "1<?= date('m') ?>",
    "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"],
    "potentialAction": {
      "@type": "SearchAction",
      "target": "<?= $urldomain; ?>/search?keyword={query}",
      "query-input": "required name=query"
    },
    "speakable": {
      "@type": "SpeakableSpecification",
      "xpath": ["/html/head/title", "/html/head/meta[@name='description']/@content"]
    },
    "publisher": {
      "@id": "#Organization"
    },
    "sponsor": {
      "@id": "#Corporation"
    },
    "isPartOf": {
      "@id": "#WebSite"
    },
    "mainEntityOfPage": "true",
    "isFamilyFriendly": "true",
    "author": [{
      "@type": "Person",
      "name": "<?= $app_name; ?>",
      "url": "https://anxietyproject.xyz/",
      "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"]
    }, {
      "@id": "#Organization"
    }],
    "creator": {
      "@type": "Person",
      "name": "<?= $app_name; ?>",
      "url": "https://anxietyproject.xyz/",
      "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"]
    },
    "accountablePerson": {
      "@type": "Person",
      "name": "<?= $app_name; ?>",
      "url": "https://anxietyproject.xyz/",
      "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"]
    },
    "copyrightYear": "<?= date('Y') ?>",
    "copyrightHolder": {
      "@id": "#Corporation"
    }
  }
</script>
<!--Game-->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Game",
    "@id": "#Game",
    "url": "<?= $urldomain; ?>",
    "name": "Slot Terbaru",
    "alternateName": "<?= $app_name; ?> - <?= $slogan; ?>",
    "description": "<?= $s0['deskripsi']; ?>",
    "disambiguatingDescription": "<?= $s0['deskripsi']; ?>. <?= $app_name; ?>",
    "keywords": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "thumbnailUrl": "<?= $urldomain; ?>/assets/images/slot-terbaru.webp",
    "image": {
      "@type": "ImageObject",
      "@id": "#Image",
      "inLanguage": "id",
      "width": 1920,
      "height": 1080,
      "url": "<?= $urldomain; ?>/assets/images/slot-terbaru.webp",
      "caption": "Slot Terbaru"
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
      "name": "Slot Terbaru",
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
    "url": "<?= $url; ?>",
    "name": "Slot Terbaru - <?= $app_name; ?>",
    "alternateName": "Slot Terbaru <?= $app_name; ?>",
    "headline": "Slot Terbaru - <?= $app_name; ?>",
    "description": "Slot Terbaru <?= $app_name; ?>. <?= $s0['instansi']; ?> <?= $slogan; ?>. <?= $s0['deskripsi']; ?>",
    "disambiguatingDescription": "Slot Terbaru - <?= $app_name; ?>. <?= $descalt; ?>",
    "abstract": "Slot Terbaru <?= $app_name; ?>. <?= $s0['instansi']; ?> <?= $slogan; ?>. <?= $s0['deskripsi']; ?>. <?= $descalt; ?>",
    "keywords": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "genre": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "caption": "Slot Terbaru - <?= $app_name; ?>",
    "contentUrl": "<?= $urldomain; ?>/assets/images/pages/slot-terbaru.webp",
    "inLanguage": "ID",
    "license": "<?= $urldomain; ?>/page/ketentuan",
    "acquireLicensePage": "<?= $url; ?>",
    "creditText": "<?= $app_name; ?>",
    "creator": {
      "@type": "Person",
      "name": "<?= $app_name; ?>",
      "url": "https://anxietyproject.xyz/",
      "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"]
    },
    "copyrightNotice": "<?= $companyname; ?>",
    "isBasedOnUrl": "<?= $url; ?>"
  }
</script>
<!--BreadcrumbList-->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "@id": "#BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "<?= strip_tags(str_replace('\\', '/', $app_name)); ?>",
      "url": "<?= $urldomain; ?>",
      "item": "<?= $urldomain; ?>"
    }, {
      "@type": "ListItem",
      "position": 2,
      "name": "Slot Terbaru",
      "url": "<?= $url; ?>",
      "item": "<?= $url; ?>"
    }]
  }
</script>