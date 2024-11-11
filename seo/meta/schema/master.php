<!--WebSite-->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "@id": "#WebSite",
        "url": "<?= $urldomain; ?>",
        "name": "<?= $app_name; ?>",
        "alternateName": "<?= $app_name; ?> - <?= $slogan; ?>",
        "headline": "<?= $app_name; ?>",
        "alternativeHeadline": "<?= $app_name; ?> - <?= $slogan; ?>",
        "description": "<?= $s0['deskripsi']; ?>",
        "disambiguatingDescription": "<?= $s0['deskripsi']; ?>. <?= $app_name; ?> - <?= $slogan; ?>",
        "abstract": "<?= $s0['deskripsi']; ?>. <?= $app_name; ?> - <?= $slogan; ?> - <?= $companyname; ?>",
        "keywords": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
        "genre": ["<?= str_replace(',', '","', $s0['keyword']); ?>"],
        "thumbnailUrl": "<?= $urldomain; ?>/assets/images/panel.webp",
        "image": {
            "@type": "ImageObject",
            "@id": "#ImageWebSite",
            "inLanguage": "ID",
            "width": 1920,
            "height": 1080,
            "url": "<?= $urldomain; ?>/assets/images/panel.webp",
            "caption": "<?= $app_name; ?> - <?= $slogan; ?>"
        },
        "inLanguage": "ID",
        "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"],
        "potentialAction": {
            "@type": "SearchAction",
            "target": "<?= $urldomain; ?>/search?keyword={query}",
            "query-input": "required name=query"
        },
        "publisher": {
            "@id": "#Organization"
        },
        "sponsor": {
            "@id": "#Corporation"
        }
    }
</script>
<!--Organization-->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "@id": "#Organization",
        "url": "<?= $urldomain; ?>",
        "name": "<?= $app_name; ?>",
        "description": "<?= $s0['deskripsi']; ?>",
        "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"],
        "logo": {
            "@type": "ImageObject",
            "@id": "#LogoOrganization",
            "inLanguage": "ID",
            "width": 512,
            "height": 512,
            "url": "<?= $urldomain; ?>/upload/favicon.png",
            "caption": "<?= $app_name; ?> - <?= $slogan; ?>"
        },
        "image": {
            "@type": "ImageObject",
            "@id": "#ImageOrganization",
            "inLanguage": "ID",
            "width": 1920,
            "height": 1080,
            "url": "<?= $urldomain; ?>/assets/images/panel.webp",
            "caption": "<?= $app_name; ?> - <?= $slogan; ?>"
        },
        "address": {
            "@type": "PostalAddress",
            "@id": "#PostalAddressOrganization",
            "streetAddress": "<?= $companyname; ?>, Jl. Sumbawa, Ulak Karang Utara, Kec. Padang Utara",
            "addressLocality": "Kota Padang",
            "addressRegion": "Sumatera Barat",
            "postalCode": "25133",
            "addressCountry": "Indonesia"
        },
        "founder": {
            "@type": "Person",
            "name": "<?= $app_name; ?>",
            "jobTitle": "Owner",
            "url": "https://anxietyproject.xyz/",
            "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"]
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.<?= date('m') ?>",
            "reviewCount": "1<?= date('m') ?><?= date('d') ?>"
        },
        "review": {
            "@type": "Review",
            "@id": "#ReviewOrganization",
            "name": "Ulasan <?= $s0['instansi']; ?>",
            "author": {
                "@type": "Person",
                "name": "<?= $app_name; ?>",
                "url": "https://anxietyproject.xyz/",
                "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"]
            },
            "description": "Harganya murah, penggunaan mudah dan pelayanan yang ramah",
            "reviewRating": {
                "@type": "Rating",
                "bestRating": "5",
                "ratingValue": "4.<?= date('m') ?>",
                "worstRating": "0"
            }
        }
    }
</script>
<!--Corporation-->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Corporation",
        "@id": "#Corporation",
        "url": "<?= $companyurl; ?>",
        "name": "<?= $companyname; ?>",
        "alternateName": "<?= $companyname; ?> Global",
        "description": "<?= $s0['deskripsi']; ?>",
        "disambiguatingDescription": "<?= $descalt; ?> - <?= $slogan; ?>",
        "telephone": "<?= $wautama; ?>",
        "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"],
        "logo": {
            "@type": "ImageObject",
            "@id": "#LogoCorporation",
            "inLanguage": "id-ID",
            "width": 512,
            "height": 512,
            "url": "<?= $urldomain; ?>/upload/favicon.png",
            "caption": "<?= $companyname; ?> Global"
        },
        "image": {
            "@type": "ImageObject",
            "@id": "#ImageCorporation",
            "inLanguage": "id-ID",
            "width": 1920,
            "height": 1080,
            "url": "<?= $urldomain; ?>/assets/images/panel.webp",
            "caption": "<?= $companyname; ?> Global"
        },
        "address": {
            "@type": "PostalAddress",
            "@id": "#PostalAddressCorporation",
            "streetAddress": "<?= $companyname; ?>, Jl. Sumbawa, Ulak Karang Utara, Kec. Padang Utara",
            "addressLocality": "Kota Padang",
            "addressRegion": "Sumatera Barat",
            "postalCode": "25133",
            "addressCountry": "Indonesia"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5",
            "reviewCount": "401"
        },
        "review": {
            "@type": "Review",
            "@id": "#ReviewCorporation",
            "name": "Reviewer <?= $companyname; ?>",
            "author": {
                "@type": "Person",
                "name": "<?= $app_name; ?>",
                "url": "https://anxietyproject.xyz/",
                "sameAs": ["<?= $s1a['facebook']; ?>", "<?= $s1a['twitter']; ?>", "<?= $s1a['instagram']; ?>", "<?= $s1a['linkedin']; ?>", "<?= $s1a['youtube']; ?>"]
            },
            "description": "<?= $descalt; ?>",
            "reviewRating": {
                "@type": "Rating",
                "bestRating": "5",
                "ratingValue": "5",
                "worstRating": "0"
            }
        }
    }
</script>