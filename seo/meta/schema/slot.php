<!--WebPage-->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "@id": "#WebPage",
    "url": "<?= $url; ?>",
    "name": "Slot Games - <?= $app_name; ?>",
    "alternateName": "Slot Games <?= $app_name; ?>",
    "headline": "Slot Games - <?= $app_name; ?>",
    "alternativeHeadline": "Slot Games <?= $app_name; ?>",
    "description": "Slot Games <?= $app_name; ?>. <?= $s0['instansi']; ?> <?= $slogan; ?>. <?= $s0['deskripsi']; ?>",
    "disambiguatingDescription": "Slot Games - <?= $app_name; ?>. <?= $descalt; ?>",
    "abstract": "Slot Games <?= $app_name; ?>. <?= $s0['instansi']; ?> <?= $slogan; ?>. <?= $s0['deskripsi']; ?>. <?= $descalt; ?>",
    "keywords": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "genre": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "thumbnailUrl": "<?= $urldomain; ?>/assets/images/pages/slot.webp",
    "primaryImageOfPage": {
      "@type": "ImageObject",
      "@id": "#ImageOfPage",
      "inLanguage": "ID",
      "contentUrl": "<?= $urldomain; ?>/assets/images/pages/slot.webp",
      "caption": "Slot Games - <?= $app_name; ?>"
    },
    "image": {
      "@type": "ImageObject",
      "@id": "#Image",
      "inLanguage": "ID",
      "width": 1920,
      "height": 1080,
      "url": "<?= $urldomain; ?>/assets/images/pages/slot.webp",
      "caption": "Slot Games - <?= $app_name; ?>"
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
    "name": "Slot Games",
    "alternateName": "<?= $app_name; ?> - <?= $slogan; ?>",
    "description": "<?= $s0['deskripsi']; ?>",
    "disambiguatingDescription": "<?= $s0['deskripsi']; ?>. <?= $app_name; ?>",
    "keywords": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "thumbnailUrl": "<?= $urldomain; ?>/assets/images/slot.webp",
    "image": {
      "@type": "ImageObject",
      "@id": "#Image",
      "inLanguage": "id",
      "width": 1920,
      "height": 1080,
      "url": "<?= $urldomain; ?>/assets/images/slot.webp",
      "caption": "Slot Games"
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
      "name": "Slot Games",
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
    "name": "Slot Games - <?= $app_name; ?>",
    "alternateName": "Slot Games <?= $app_name; ?>",
    "headline": "Slot Games - <?= $app_name; ?>",
    "description": "Slot Games <?= $app_name; ?>. <?= $s0['instansi']; ?> <?= $slogan; ?>. <?= $s0['deskripsi']; ?>",
    "disambiguatingDescription": "Slot Games - <?= $app_name; ?>. <?= $descalt; ?>",
    "abstract": "Slot Games <?= $app_name; ?>. <?= $s0['instansi']; ?> <?= $slogan; ?>. <?= $s0['deskripsi']; ?>. <?= $descalt; ?>",
    "keywords": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "genre": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "caption": "Slot Games - <?= $app_name; ?>",
    "contentUrl": "<?= $urldomain; ?>/assets/images/pages/slot.webp",
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
      "name": "Slot Games",
      "url": "<?= $url; ?>",
      "item": "<?= $url; ?>"
    }]
  }
</script>