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
 * Get business information from ACF options (with fallbacks)
 */
function abbott_gage_get_business_info() {
    return array(
        'name' => get_field('company_name', 'option') ?: 'Abbott Gage, Inc.',
        'alternateName' => 'Abbott Gage',
        'legalName' => 'Abbott Gage, Inc.',
        'telephone' => get_field('phone_primary', 'option') ?: '+1-256-378-3286',
        'tollFreeNumber' => get_field('phone_toll_free', 'option') ?: '+1-800-481-4243',
        'faxNumber' => get_field('fax', 'option') ?: '+1-256-378-3287',
        'email' => get_field('email', 'option') ?: 'shelby@abbottgageinc.com',
        'street' => get_field('address_street', 'option') ?: '40 Industrial Park',
        'city' => get_field('address_city', 'option') ?: 'Childersburg',
        'state' => get_field('address_state', 'option') ?: 'AL',
        'zip' => get_field('address_zip', 'option') ?: '35044',
        'country' => 'US',
        'latitude' => '33.2829',
        'longitude' => '-86.3553',
        'founded' => '1992',
        'foundingLocation' => 'Childersburg, Alabama',
    );
}

/**
 * Add Schema.org JSON-LD structured data to the site
 * Comprehensive Local SEO implementation
 */
function abbott_gage_schema_markup() {
    // Only output on front-end
    if ( is_admin() ) {
        return;
    }
    
    $business = abbott_gage_get_business_info();
    $schema = array();
    
    // Enhanced LocalBusiness Schema with ProfessionalService - appears on all pages
    $schema['organization'] = array(
        '@context' => 'https://schema.org',
        '@type' => array('LocalBusiness', 'ProfessionalService'),
        '@id' => home_url() . '#organization',
        'name' => $business['name'],
        'alternateName' => $business['alternateName'],
        'legalName' => $business['legalName'],
        'url' => home_url(),
        'logo' => array(
            '@type' => 'ImageObject',
            'url' => get_template_directory_uri() . '/assets/images/abbott-gage-inc-header.jpg',
            'width' => 600,
            'height' => 60,
            'caption' => $business['name'] . ' - Precision Calibration Services'
        ),
        'image' => array(
            '@type' => 'ImageObject',
            'url' => get_template_directory_uri() . '/assets/images/abbott-gage-inc-header.jpg',
            'width' => 600,
            'height' => 60
        ),
        'description' => 'ISO 9001:2015 certified precision measuring equipment calibration and repair services. Woman-owned business providing NIST traceable calibration services since 1992.',
        'slogan' => 'Precision You Can Trust',
        'foundingDate' => $business['founded'],
        'foundingLocation' => array(
            '@type' => 'Place',
            'address' => array(
                '@type' => 'PostalAddress',
                'addressLocality' => 'Childersburg',
                'addressRegion' => 'AL',
                'addressCountry' => 'US'
            )
        ),
        'priceRange' => '$$',
        'currenciesAccepted' => 'USD',
        'paymentAccepted' => 'Cash, Check, Credit Card, Visa, Mastercard, American Express, Discover, NET 30 Terms',
        'telephone' => $business['telephone'],
        'faxNumber' => $business['faxNumber'],
        'email' => $business['email'],
        
        // Address with proper formatting
        'address' => array(
            '@type' => 'PostalAddress',
            'streetAddress' => $business['street'],
            'addressLocality' => $business['city'],
            'addressRegion' => $business['state'],
            'postalCode' => $business['zip'],
            'addressCountry' => $business['country']
        ),
        
        // Geographic coordinates
        'geo' => array(
            '@type' => 'GeoCoordinates',
            'latitude' => $business['latitude'],
            'longitude' => $business['longitude']
        ),
        
        // Service areas - nationwide
        'areaServed' => array(
            array(
                '@type' => 'Country',
                'name' => 'United States'
            ),
            array(
                '@type' => 'State',
                'name' => 'Alabama'
            ),
            array(
                '@type' => 'State',
                'name' => 'Georgia'
            ),
            array(
                '@type' => 'State',
                'name' => 'Tennessee'
            ),
            array(
                '@type' => 'State',
                'name' => 'Mississippi'
            ),
            array(
                '@type' => 'State',
                'name' => 'Florida'
            )
        ),
        
        // Service categories
        'knowsAbout' => array(
            'Calibration Services',
            'NIST Traceable Calibration',
            'ISO 9001:2015 Certification',
            'Precision Measuring Equipment',
            'Dimensional Calibration',
            'Electronic Calibration',
            'On-Site Calibration',
            'Laboratory Calibration',
            'Equipment Repair',
            'Mitutoyo Service Center',
            'Woman-Owned Business'
        ),
        
        // Business certifications
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
        ),
        
        // Social media profiles (add when available)
        'sameAs' => array_filter(array(
            get_field('facebook_url', 'option'),
            get_field('linkedin_url', 'option'),
            get_field('twitter_url', 'option'),
        )),
        
        // Contact points
        'contactPoint' => array(
            array(
                '@type' => 'ContactPoint',
                'telephone' => $business['telephone'],
                'contactType' => 'customer service',
                'areaServed' => 'US',
                'availableLanguage' => array('English'),
                'contactOption' => 'TollFree',
                'email' => $business['email']
            ),
            array(
                '@type' => 'ContactPoint',
                'telephone' => $business['tollFreeNumber'],
                'contactType' => 'sales',
                'areaServed' => 'US',
                'availableLanguage' => array('English'),
                'contactOption' => 'TollFree'
            ),
            array(
                '@type' => 'ContactPoint',
                'telephone' => $business['telephone'],
                'contactType' => 'technical support',
                'areaServed' => 'US',
                'availableLanguage' => array('English')
            )
        )
    );
    
    // Enhanced business hours with proper specification
    $schema['organization']['openingHoursSpecification'] = array(
        array(
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => 'Monday',
            'opens' => '08:00',
            'closes' => '17:00'
        ),
        array(
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => 'Tuesday',
            'opens' => '08:00',
            'closes' => '17:00'
        ),
        array(
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => 'Wednesday',
            'opens' => '08:00',
            'closes' => '17:00'
        ),
        array(
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => 'Thursday',
            'opens' => '08:00',
            'closes' => '17:00'
        ),
        array(
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => 'Friday',
            'opens' => '08:00',
            'closes' => '17:00'
        )
    );
    
    // Enhanced Service Schema for service pages
    if ( is_page() ) {
        $page_template = get_page_template_slug();
        
        $services_data = array(
            'page-laboratory.php' => array(
                'name' => 'Laboratory Calibration Services',
                'description' => 'Professional laboratory calibration services for dimensional and electronic equipment. ISO 9001:2015 certified, NIST traceable standards.',
                'serviceType' => 'Calibration Service',
                'category' => 'Professional Service',
                'offers' => array(
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Dimensional Calibration',
                            'description' => 'NIST traceable calibration for micrometers, calipers, indicators, and gages'
                        )
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Electronic Calibration',
                            'description' => 'NIST traceable calibration for multimeters, pressure gauges, and test equipment'
                        )
                    )
                )
            ),
            'page-onsite.php' => array(
                'name' => 'On-Site Calibration Services',
                'description' => 'Convenient on-site calibration services at your facility. Mobile calibration lab minimizes downtime and maintains NIST traceability.',
                'serviceType' => 'Mobile Calibration Service',
                'category' => 'Professional Service',
                'offers' => array(
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'On-Site Dimensional Calibration',
                            'description' => 'Calibration services performed at your location'
                        )
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'On-Site Electronic Calibration',
                            'description' => 'Mobile electronic equipment calibration'
                        )
                    )
                )
            ),
            'page-repairs.php' => array(
                'name' => 'Precision Measuring Equipment Repair',
                'description' => 'Factory authorized repair center for Mitutoyo, Fowler, and Brown & Sharpe precision measuring tools. Expert technicians with factory training.',
                'serviceType' => 'Repair Service',
                'category' => 'Repair and Maintenance',
                'offers' => array(
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Micrometer Repair',
                            'description' => 'Professional repair services for all types of micrometers'
                        )
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Caliper Repair',
                            'description' => 'Expert repair for digital and analog calipers'
                        )
                    )
                )
            ),
            'page-sales.php' => array(
                'name' => 'Precision Measuring Equipment Sales',
                'description' => 'Purchase precision measuring equipment from authorized distributors. Expert guidance on tool selection. Fast shipping available.',
                'serviceType' => 'Equipment Sales',
                'category' => 'Product and Service',
                'offers' => array(
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Product',
                            'name' => 'Precision Measuring Tools',
                            'description' => 'New precision measuring equipment from authorized manufacturers'
                        )
                    )
                )
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
                'category' => $service['category'],
                'provider' => array(
                    '@id' => home_url() . '#organization'
                ),
                'areaServed' => array(
                    '@type' => 'Country',
                    'name' => 'United States'
                ),
                'hasOfferCatalog' => array(
                    '@type' => 'OfferCatalog',
                    'name' => $service['name'],
                    'itemListElement' => $service['offers']
                ),
                'audience' => array(
                    '@type' => 'Audience',
                    'audienceType' => 'Manufacturing, Aerospace, Medical Device, Automotive, Quality Control'
                )
            );
        }
        
        // Add Contact Page specific schema
        if ( $page_template === 'page-contact.php' ) {
            $schema['contactPage'] = array(
                '@context' => 'https://schema.org',
                '@type' => 'ContactPage',
                'name' => 'Contact Abbott Gage Inc',
                'description' => 'Contact Abbott Gage for calibration services, equipment sales, or technical support',
                'url' => get_permalink(),
                'mainEntity' => array(
                    '@id' => home_url() . '#organization'
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

/**
 * NAP (Name, Address, Phone) Shortcodes for consistent local SEO
 * Usage: [business_name], [business_address], [business_phone], etc.
 */
function abbott_gage_business_name_shortcode() {
    $business = abbott_gage_get_business_info();
    return '<span itemprop="name">' . esc_html( $business['name'] ) . '</span>';
}
add_shortcode( 'business_name', 'abbott_gage_business_name_shortcode' );

function abbott_gage_business_address_shortcode( $atts ) {
    $business = abbott_gage_get_business_info();
    $atts = shortcode_atts( array(
        'format' => 'full', // full, street, city, state, zip, inline
    ), $atts );
    
    $output = '<span itemscope itemtype="https://schema.org/PostalAddress">';
    
    switch ( $atts['format'] ) {
        case 'street':
            $output .= '<span itemprop="streetAddress">' . esc_html( $business['street'] ) . '</span>';
            break;
        case 'city':
            $output .= '<span itemprop="addressLocality">' . esc_html( $business['city'] ) . '</span>';
            break;
        case 'state':
            $output .= '<span itemprop="addressRegion">' . esc_html( $business['state'] ) . '</span>';
            break;
        case 'zip':
            $output .= '<span itemprop="postalCode">' . esc_html( $business['zip'] ) . '</span>';
            break;
        case 'inline':
            $output .= '<span itemprop="streetAddress">' . esc_html( $business['street'] ) . '</span>, ';
            $output .= '<span itemprop="addressLocality">' . esc_html( $business['city'] ) . '</span>, ';
            $output .= '<span itemprop="addressRegion">' . esc_html( $business['state'] ) . '</span> ';
            $output .= '<span itemprop="postalCode">' . esc_html( $business['zip'] ) . '</span>';
            break;
        default: // full
            $output .= '<span itemprop="streetAddress">' . esc_html( $business['street'] ) . '</span><br>';
            $output .= '<span itemprop="addressLocality">' . esc_html( $business['city'] ) . '</span>, ';
            $output .= '<span itemprop="addressRegion">' . esc_html( $business['state'] ) . '</span> ';
            $output .= '<span itemprop="postalCode">' . esc_html( $business['zip'] ) . '</span>';
            break;
    }
    
    $output .= '</span>';
    return $output;
}
add_shortcode( 'business_address', 'abbott_gage_business_address_shortcode' );

function abbott_gage_business_phone_shortcode( $atts ) {
    $business = abbott_gage_get_business_info();
    $atts = shortcode_atts( array(
        'type' => 'primary', // primary, tollfree, fax
        'link' => 'yes',
    ), $atts );
    
    $phone = '';
    $tel = '';
    
    switch ( $atts['type'] ) {
        case 'tollfree':
            $phone = $business['tollFreeNumber'];
            $tel = preg_replace( '/[^0-9+]/', '', $phone );
            break;
        case 'fax':
            $phone = $business['faxNumber'];
            $tel = preg_replace( '/[^0-9+]/', '', $phone );
            break;
        default: // primary
            $phone = $business['telephone'];
            $tel = preg_replace( '/[^0-9+]/', '', $phone );
            break;
    }
    
    if ( $atts['link'] === 'yes' && $atts['type'] !== 'fax' ) {
        return '<a href="tel:' . esc_attr( $tel ) . '" itemprop="telephone">' . esc_html( $phone ) . '</a>';
    } else {
        return '<span itemprop="' . ( $atts['type'] === 'fax' ? 'faxNumber' : 'telephone' ) . '">' . esc_html( $phone ) . '</span>';
    }
}
add_shortcode( 'business_phone', 'abbott_gage_business_phone_shortcode' );

function abbott_gage_business_email_shortcode( $atts ) {
    $business = abbott_gage_get_business_info();
    $atts = shortcode_atts( array(
        'link' => 'yes',
    ), $atts );
    
    if ( $atts['link'] === 'yes' ) {
        return '<a href="mailto:' . esc_attr( $business['email'] ) . '" itemprop="email">' . esc_html( $business['email'] ) . '</a>';
    } else {
        return '<span itemprop="email">' . esc_html( $business['email'] ) . '</span>';
    }
}
add_shortcode( 'business_email', 'abbott_gage_business_email_shortcode' );

function abbott_gage_business_hours_shortcode() {
    $hours = get_field('business_hours', 'option');
    if ( $hours ) {
        return '<div itemprop="openingHours" content="Mo-Fr 08:00-17:00">' . nl2br( esc_html( $hours ) ) . '</div>';
    }
    return '<div itemprop="openingHours" content="Mo-Fr 08:00-17:00">Monday - Friday<br>8:00 AM - 5:00 PM CST</div>';
}
add_shortcode( 'business_hours', 'abbott_gage_business_hours_shortcode' );

/**
 * Add Google Maps with proper schema markup
 */
function abbott_gage_google_maps_shortcode( $atts ) {
    $business = abbott_gage_get_business_info();
    $atts = shortcode_atts( array(
        'width' => '100%',
        'height' => '450',
        'zoom' => '15',
    ), $atts );
    
    $address_encoded = urlencode( $business['street'] . ', ' . $business['city'] . ', ' . $business['state'] . ' ' . $business['zip'] );
    
    $output = '<div class="google-map-wrapper" itemscope itemtype="https://schema.org/Place">';
    $output .= '<meta itemprop="latitude" content="' . esc_attr( $business['latitude'] ) . '">';
    $output .= '<meta itemprop="longitude" content="' . esc_attr( $business['longitude'] ) . '">';
    $output .= '<iframe 
        src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=' . $address_encoded . '&zoom=' . esc_attr( $atts['zoom'] ) . '"
        width="' . esc_attr( $atts['width'] ) . '"
        height="' . esc_attr( $atts['height'] ) . '"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>';
    $output .= '</div>';
    
    return $output;
}
add_shortcode( 'google_map', 'abbott_gage_google_maps_shortcode' );

/**
 * Add Review/Rating Schema (ready for when reviews are added)
 */
function abbott_gage_add_review_schema() {
    // Only add if reviews exist (can be connected to a reviews plugin or ACF fields)
    $reviews = get_field('google_reviews', 'option'); // Assumes ACF field for reviews
    
    if ( ! $reviews || ! is_array( $reviews ) ) {
        return;
    }
    
    $total_rating = 0;
    $review_count = count( $reviews );
    
    if ( $review_count === 0 ) {
        return;
    }
    
    foreach ( $reviews as $review ) {
        $total_rating += floatval( $review['rating'] );
    }
    
    $average_rating = $total_rating / $review_count;
    
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        '@id' => home_url() . '#organization',
        'aggregateRating' => array(
            '@type' => 'AggregateRating',
            'ratingValue' => number_format( $average_rating, 1 ),
            'reviewCount' => $review_count,
            'bestRating' => '5',
            'worstRating' => '1'
        ),
        'review' => array()
    );
    
    // Add individual reviews
    foreach ( $reviews as $review ) {
        $schema['review'][] = array(
            '@type' => 'Review',
            'author' => array(
                '@type' => 'Person',
                'name' => $review['author']
            ),
            'datePublished' => $review['date'],
            'reviewBody' => $review['text'],
            'reviewRating' => array(
                '@type' => 'Rating',
                'ratingValue' => $review['rating'],
                'bestRating' => '5',
                'worstRating' => '1'
            )
        );
    }
    
    echo '<script type="application/ld+json">';
    echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT );
    echo '</script>' . "\n";
}
add_action( 'wp_head', 'abbott_gage_add_review_schema', 5 );

/**
 * Add local business keywords meta tag
 */
function abbott_gage_local_keywords() {
    $keywords = array(
        'calibration services Childersburg AL',
        'NIST traceable calibration Alabama',
        'ISO 9001:2015 certified calibration',
        'precision measuring equipment calibration',
        'on-site calibration services',
        'laboratory calibration Alabama',
        'Mitutoyo service center Alabama',
        'woman-owned calibration business',
        'dimensional calibration services',
        'electronic calibration services',
        'precision tool repair Alabama',
        'measuring equipment sales Alabama'
    );
    
    echo '<meta name="keywords" content="' . esc_attr( implode( ', ', $keywords ) ) . '">' . "\n";
}
add_action( 'wp_head', 'abbott_gage_local_keywords', 4 );

/**
 * Add geo meta tags for local SEO
 */
function abbott_gage_geo_meta_tags() {
    $business = abbott_gage_get_business_info();
    ?>
    <meta name="geo.region" content="US-<?php echo esc_attr( $business['state'] ); ?>">
    <meta name="geo.placename" content="<?php echo esc_attr( $business['city'] ); ?>">
    <meta name="geo.position" content="<?php echo esc_attr( $business['latitude'] . ';' . $business['longitude'] ); ?>">
    <meta name="ICBM" content="<?php echo esc_attr( $business['latitude'] . ', ' . $business['longitude'] ); ?>">
    <?php
}
add_action( 'wp_head', 'abbott_gage_geo_meta_tags', 5 );

/**
 * Add business hours to footer with schema markup
 */
function abbott_gage_footer_business_info() {
    $business = abbott_gage_get_business_info();
    ?>
    <div class="footer-business-schema" style="display:none;" itemscope itemtype="https://schema.org/LocalBusiness">
        <span itemprop="name"><?php echo esc_html( $business['name'] ); ?></span>
        <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
            <span itemprop="streetAddress"><?php echo esc_html( $business['street'] ); ?></span>
            <span itemprop="addressLocality"><?php echo esc_html( $business['city'] ); ?></span>
            <span itemprop="addressRegion"><?php echo esc_html( $business['state'] ); ?></span>
            <span itemprop="postalCode"><?php echo esc_html( $business['zip'] ); ?></span>
        </div>
        <span itemprop="telephone"><?php echo esc_html( $business['telephone'] ); ?></span>
        <span itemprop="email"><?php echo esc_html( $business['email'] ); ?></span>
        <meta itemprop="openingHours" content="Mo-Fr 08:00-17:00">
        <meta itemprop="priceRange" content="$$">
    </div>
    <?php
}
add_action( 'wp_footer', 'abbott_gage_footer_business_info' );

/**
 * Add robots meta tag for better indexing
 */
function abbott_gage_robots_meta() {
    if ( is_singular() || is_front_page() ) {
        echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">' . "\n";
    }
}
add_action( 'wp_head', 'abbott_gage_robots_meta', 1 );

