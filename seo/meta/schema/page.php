<!--WebPage-->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "@id": "#WebPage",
    "url": "<?= $url; ?>",
    "name": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>",
    "alternateName": "<?= $pageName; ?>",
    "headline": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>",
    "alternativeHeadline": "<?= $pageName; ?>",
    "description": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?>",
    "disambiguatingDescription": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?>. <?= $pageName; ?>",
    "abstract": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?>. <?= $pageName; ?>. <?= $app_name; ?> - <?= $slogan; ?>",
    "keywords": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "genre": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "thumbnailUrl": "<?= $urldomain; ?>/assets/images/panel.webp",
    "primaryImageOfPage": {
      "@type": "ImageObject",
      "@id": "#ImageOfPage",
      "inLanguage": "ID",
      "contentUrl": "<?= $urldomain; ?>/assets/images/panel.webp",
      "caption": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>"
    },
    "image": {
      "@type": "ImageObject",
      "@id": "#Image",
      "inLanguage": "ID",
      "width": 1920,
      "height": 1080,
      "url": "<?= $urldomain; ?>/assets/images/panel.webp",
      "caption": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>"
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
<!--ImageObject-->
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ImageObject",
    "@id": "#ImageObject",
    "url": "<?= $url; ?>",
    "name": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>",
    "alternateName": "<?= $pageName; ?>",
    "headline": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>",
    "description": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?>",
    "disambiguatingDescription": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?>. <?= $pageName; ?>",
    "abstract": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['instansi'])); ?> <?= strip_tags(str_replace('\\', '/', $slogan)); ?>. <?= strip_tags(str_replace('\\', '/', $s0['deskripsi'])); ?>. <?= $pageName; ?>",
    "keywords": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "genre": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
    "caption": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>",
    "contentUrl": "<?= $urldomain; ?>/assets/images/panel.webp",
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
      "name": "<?= $pageName; ?> - <?= strip_tags(str_replace('\\', '/', $app_name)); ?>",
      "url": "<?= $url; ?>",
      "item": "<?= $url; ?>"
    }]
  }
</script>