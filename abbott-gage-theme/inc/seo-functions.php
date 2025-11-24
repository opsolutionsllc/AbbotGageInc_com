<?php
/**
 * SEO Functions and Schema Markup
 * 
 * Handles structured data, Open Graph tags, and SEO enhancements
 * 
 * @package Abbott_Gage
 * @since 1.0.0
 */

/**
 * Add Schema.org JSON-LD structured data to the site
 */
function abbott_gage_schema_markup() {
    // Only output on front-end
    if ( is_admin() ) {
        return;
    }
    
    $schema = array();
    
    // Organization Schema - appears on all pages
    $schema['organization'] = array(
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        '@id' => home_url() . '#organization',
        'name' => 'Abbott Gage Inc',
        'alternateName' => 'Abbott Gage',
        'url' => home_url(),
        'logo' => array(
            '@type' => 'ImageObject',
            'url' => get_template_directory_uri() . '/assets/images/abbott-gage-inc-header.jpg',
        ),
        'description' => 'ISO 9001:2015 certified precision measuring equipment calibration and repair services. Woman-owned business providing NIST traceable calibration services.',
        'priceRange' => '$$',
        'telephone' => '+1-256-378-3286',
        'email' => 'info@abbottgageinc.com',
        'areaServed' => array(
            '@type' => 'Country',
            'name' => 'United States'
        ),
        'address' => array(
            '@type' => 'PostalAddress',
            'streetAddress' => '40 Industrial Park',
            'addressLocality' => 'Childersburg',
            'addressRegion' => 'AL',
            'postalCode' => '35044',
            'addressCountry' => 'US'
        ),
        'geo' => array(
            '@type' => 'GeoCoordinates',
            'latitude' => '33.2829',
            'longitude' => '-86.3553'
        ),
        'sameAs' => array(
            // Add social media URLs here when available
        ),
        'hasCredential' => array(
            array(
                '@type' => 'EducationalOccupationalCredential',
                'credentialCategory' => 'ISO 9001:2015 Certification',
                'recognizedBy' => array(
                    '@type' => 'Organization',
                    'name' => 'International Organization for Standardization'
                )
            ),
            array(
                '@type' => 'EducationalOccupationalCredential',
                'credentialCategory' => 'WBENC Certification',
                'recognizedBy' => array(
                    '@type' => 'Organization',
                    'name' => 'Women\'s Business Enterprise National Council'
                )
            ),
            array(
                '@type' => 'EducationalOccupationalCredential',
                'credentialCategory' => 'WOSB Certification',
                'recognizedBy' => array(
                    '@type' => 'Organization',
                    'name' => 'Women-Owned Small Business Program'
                )
            )
        )
    );
    
    
    // Add business hours if available
    $schema['organization']['openingHoursSpecification'] = array(
        '@type' => 'OpeningHoursSpecification',
        'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'),
        'opens' => '08:00',
        'closes' => '17:00'
    );
    
    // Service Schema for service pages
    if ( is_page() ) {
        $page_template = get_page_template_slug();
        
        $services_data = array(
            'page-laboratory.php' => array(
                'name' => 'Laboratory Calibration Services',
                'description' => 'Professional laboratory calibration services for dimensional and electronic equipment. ISO certified, NIST traceable standards.',
                'serviceType' => 'Calibration Service'
            ),
            'page-onsite.php' => array(
                'name' => 'On-Site Calibration Services',
                'description' => 'Convenient on-site calibration services at your facility. Mobile calibration lab minimizes downtime.',
                'serviceType' => 'Mobile Calibration Service'
            ),
            'page-repairs.php' => array(
                'name' => 'Precision Measuring Equipment Repair',
                'description' => 'Factory authorized repair center for Mitutoyo, Fowler, and Brown & Sharpe precision measuring tools.',
                'serviceType' => 'Repair Service'
            ),
            'page-sales.php' => array(
                'name' => 'Precision Measuring Equipment Sales',
                'description' => 'Purchase precision measuring equipment from authorized distributors. Expert guidance on tool selection.',
                'serviceType' => 'Equipment Sales'
            )
        );
        
        if ( isset( $services_data[ $page_template ] ) ) {
            $service = $services_data[ $page_template ];
            $schema['service'] = array(
                '@context' => 'https://schema.org',
                '@type' => 'Service',
                'serviceType' => $service['serviceType'],
                'name' => $service['name'],
                'description' => $service['description'],
                'provider' => array(
                    '@id' => home_url() . '#organization'
                ),
                'areaServed' => array(
                    '@type' => 'Country',
                    'name' => 'United States'
                )
            );
        }
    }
    
    // Breadcrumb Schema
    if ( ! is_front_page() ) {
        $breadcrumbs = array(
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => array()
        );
        
        $breadcrumbs['itemListElement'][] = array(
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Home',
            'item' => home_url()
        );
        
        if ( is_page() ) {
            $breadcrumbs['itemListElement'][] = array(
                '@type' => 'ListItem',
                'position' => 2,
                'name' => get_the_title(),
                'item' => get_permalink()
            );
        }
        
        $schema['breadcrumbs'] = $breadcrumbs;
    }
    
    // Output schema markup
    foreach ( $schema as $key => $data ) {
        echo '<script type="application/ld+json">';
        echo wp_json_encode( $data, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT );
        echo '</script>' . "\n";
    }
}
add_action( 'wp_head', 'abbott_gage_schema_markup', 1 );

/**
 * Add Open Graph and Twitter Card meta tags
 */
function abbott_gage_social_meta_tags() {
    if ( is_admin() ) {
        return;
    }
    
    // Default values
    $site_name = 'Abbott Gage Inc';
    $og_type = 'website';
    $og_title = get_bloginfo( 'name' );
    $og_description = get_bloginfo( 'description' );
    $og_url = home_url();
    $og_image = get_template_directory_uri() . '/assets/images/abbott-gage-inc-header.jpg';
    
    // Page-specific values
    if ( is_singular() ) {
        $og_title = get_the_title();
        $og_url = get_permalink();
        
        // Get custom description from Yoast if available, otherwise use excerpt
        if ( has_excerpt() ) {
            $og_description = get_the_excerpt();
        } else {
            $og_description = wp_trim_words( get_the_content(), 20 );
        }
        
        // Get featured image if available
        if ( has_post_thumbnail() ) {
            $og_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        }
    }
    
    // Clean description
    $og_description = wp_strip_all_tags( $og_description );
    $og_description = str_replace( array("\r", "\n", "\t"), ' ', $og_description );
    $og_description = trim( preg_replace( '/\s+/', ' ', $og_description ) );
    
    // Output Open Graph tags
    ?>
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?php echo esc_attr( $og_type ); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr( $site_name ); ?>">
    <meta property="og:title" content="<?php echo esc_attr( $og_title ); ?>">
    <meta property="og:description" content="<?php echo esc_attr( $og_description ); ?>">
    <meta property="og:url" content="<?php echo esc_url( $og_url ); ?>">
    <meta property="og:image" content="<?php echo esc_url( $og_image ); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr( $og_title ); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr( $og_description ); ?>">
    <meta name="twitter:image" content="<?php echo esc_url( $og_image ); ?>">
    <?php
}
add_action( 'wp_head', 'abbott_gage_social_meta_tags', 2 );

/**
 * Add custom meta descriptions for Yoast SEO
 * This provides fallback descriptions if Yoast isn't installed or configured
 */
function abbott_gage_meta_description() {
    // Skip if Yoast SEO is active (it will handle meta descriptions)
    if ( defined( 'WPSEO_VERSION' ) ) {
        return;
    }
    
    if ( is_admin() ) {
        return;
    }
    
    $descriptions = array(
        'home' => 'Abbott Gage Inc: ISO 9001:2015 certified precision measuring equipment calibration & repair. NIST traceable standards. Woman-owned business. 30+ years experience.',
        'about' => 'Learn about Abbott Gage Inc, a woman-owned (WBENC/WOSB) ISO 9001:2015 certified calibration company. 30+ years providing NIST traceable precision measurement solutions.',
        'laboratory' => 'Professional laboratory calibration services for dimensional & electronic equipment. ISO certified, NIST traceable. Micrometers, calipers, gages, multimeters & more.',
        'onsite' => 'Convenient on-site calibration services at your facility. Minimize downtime with our mobile calibration lab. Dimensional & electronic equipment certified to NIST standards.',
        'repairs' => 'Factory authorized repair center for Mitutoyo, Fowler & Brown & Sharpe. Expert repair services for precision measuring tools. Fast turnaround, quality guaranteed.',
        'sales' => 'Purchase precision measuring equipment from authorized distributors. Micrometers, calipers, indicators, gages & more. Expert guidance on tool selection. Fast shipping.',
        'services' => 'Comprehensive precision measurement services: laboratory & on-site calibration, equipment repair, and tool sales. ISO certified, NIST traceable. Serving industries nationwide.',
        'manufacturers' => 'Authorized service center & distributor for leading precision tool manufacturers: Mitutoyo, Starrett, Fowler, Brown & Sharpe, and more. Factory-trained technicians.',
        'contact' => 'Contact Abbott Gage Inc for precision calibration services. Request a quote, schedule service, or speak with our expert team. Phone, email, or online form available.'
    );
    
    $description = '';
    
    if ( is_front_page() ) {
        $description = $descriptions['home'];
    } elseif ( is_page() ) {
        $page_template = get_page_template_slug();
        $template_map = array(
            'page-about.php' => 'about',
            'page-laboratory.php' => 'laboratory',
            'page-onsite.php' => 'onsite',
            'page-repairs.php' => 'repairs',
            'page-sales.php' => 'sales',
            'page-services.php' => 'services',
            'page-manufacturers.php' => 'manufacturers',
            'page-contact.php' => 'contact'
        );
        
        if ( isset( $template_map[ $page_template ] ) ) {
            $description = $descriptions[ $template_map[ $page_template ] ];
        }
    }
    
    if ( $description ) {
        echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'abbott_gage_meta_description', 0 );

/**
 * Add FAQ Schema to pages
 */
function abbott_gage_faq_schema( $faqs ) {
    if ( empty( $faqs ) ) {
        return;
    }
    
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array()
    );
    
    foreach ( $faqs as $faq ) {
        $schema['mainEntity'][] = array(
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text' => $faq['answer']
            )
        );
    }
    
    echo '<script type="application/ld+json">';
    echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT );
    echo '</script>' . "\n";
}

/**
 * Improved image alt text helper function
 */
function abbott_gage_get_image_alt( $context, $default = '' ) {
    $alt_texts = array(
        'hero_equipment' => 'Precision measuring equipment including micrometers, calipers, and indicators',
        'calibration_lab' => 'ISO certified temperature-controlled calibration laboratory',
        'mitutoyo_tools' => 'Mitutoyo precision measuring tools and instruments',
        'certification_iso' => 'ISO 9001:2015 quality management certification badge',
        'certification_wbenc' => 'WBENC woman-owned business certification',
        'certification_wosb' => 'WOSB woman-owned small business certification',
        'onsite_service' => 'On-site mobile calibration service at customer facility',
        'repair_service' => 'Precision measuring equipment repair and maintenance service',
        'nist_traceable' => 'NIST traceable calibration standards and documentation',
        'surface_plate' => 'Granite surface plate inspection and calibration',
        'micrometer' => 'Digital and analog micrometer calibration service',
        'caliper' => 'Precision caliper measurement and calibration',
    );
    
    return isset( $alt_texts[ $context ] ) ? $alt_texts[ $context ] : $default;
}

/**
 * Add canonical URL
 */
function abbott_gage_canonical_url() {
    // Skip if Yoast SEO is active
    if ( defined( 'WPSEO_VERSION' ) ) {
        return;
    }
    
    if ( is_singular() ) {
        echo '<link rel="canonical" href="' . esc_url( get_permalink() ) . '">' . "\n";
    } elseif ( is_front_page() ) {
        echo '<link rel="canonical" href="' . esc_url( home_url() ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'abbott_gage_canonical_url', 1 );

/**
 * Add hreflang tags for international SEO (if needed in future)
 */
function abbott_gage_hreflang_tags() {
    if ( is_singular() || is_front_page() ) {
        $url = is_front_page() ? home_url() : get_permalink();
        echo '<link rel="alternate" hreflang="en-us" href="' . esc_url( $url ) . '">' . "\n";
        echo '<link rel="alternate" hreflang="x-default" href="' . esc_url( $url ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'abbott_gage_hreflang_tags', 3 );

