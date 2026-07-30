<?php
/**
 * functions.php — Helper functions for JBL Roofing LLC
 * Schema generation, URL helpers, SEO utilities, icon loader
 */

/**
 * Check if current page matches navigation item
 * @param string $page Page identifier
 * @return bool
 */
function isActivePage($page) {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

/**
 * Format phone number for display
 * @param string $phone Raw phone number
 * @return string Formatted phone (e.g., (479) 555-0123)
 */
function formatPhone($phone) {
    $cleaned = preg_replace('/[^0-9]/', '', $phone);
    if (strlen($cleaned) === 10) {
        return sprintf('(%s) %s-%s',
            substr($cleaned, 0, 3),
            substr($cleaned, 3, 3),
            substr($cleaned, 6, 4)
        );
    }
    return $phone;
}

/**
 * Generate URL-safe slug from service name
 * @param string $name Service name
 * @return string URL slug
 */
function getServiceSlug($name) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name), '-'));
}

/**
 * Generate URL-safe slug from city name
 * @param string $city City name
 * @return string URL slug
 */
function getAreaSlug($city) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $city), '-'));
}

/**
 * Generate Service schema for individual service pages
 * @param array $service Service data array
 * @param string $canonicalUrl Page canonical URL
 * @return array Schema.org Service object
 */
function generateServiceSchema($service, $canonicalUrl) {
    global $siteName, $siteUrl, $address, $phone, $email;

    return [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $service['name'],
        'description' => $service['description'],
        'url' => $canonicalUrl,
        'serviceType' => $service['name'],
        'provider' => [
            '@id' => $siteUrl . '#organization'
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => $address['city'],
            'containedInPlace' => [
                '@type' => 'State',
                'name' => $address['state']
            ]
        ],
        'availableChannel' => [
            '@type' => 'ServiceChannel',
            'serviceUrl' => $canonicalUrl,
            'servicePhone' => $phone,
            'serviceLocation' => [
                '@type' => 'PostalAddress',
                'streetAddress' => $address['street'],
                'addressLocality' => $address['city'],
                'addressRegion' => $address['state'],
                'postalCode' => $address['zip'],
                'addressCountry' => 'US'
            ]
        ]
    ];
}

/**
 * Generate FAQPage schema from FAQ array
 * @param array $faqs Array of FAQ items (each with 'q' and 'a' keys)
 * @return array Schema.org FAQPage object
 */
function generateFAQSchema($faqs) {
    $mainEntity = [];

    foreach ($faqs as $faq) {
        $mainEntity[] = [
            '@type' => 'Question',
            'name' => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['a']
            ]
        ];
    }

    return [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $mainEntity
    ];
}

/**
 * Generate BreadcrumbList schema
 * @param array $crumbs Array of breadcrumb items [['name' => 'Home', 'url' => '/'], ...]
 * @return array Schema.org BreadcrumbList object
 */
function generateBreadcrumbSchema($crumbs) {
    $itemListElement = [];

    foreach ($crumbs as $index => $crumb) {
        $itemListElement[] = [
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => $crumb['name'],
            'item' => $crumb['url']
        ];
    }

    return [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $itemListElement
    ];
}

/**
 * Load inline SVG icon from references/lucide-icons/
 * @param string $name Icon name (without .svg extension)
 * @param int $size Width/height in pixels (default 24)
 * @return string SVG markup with aria-hidden
 */
function icon($name, $size = 24) {
    $iconPath = $_SERVER['DOCUMENT_ROOT'] . '/references/lucide-icons/' . $name . '.svg';

    if (!file_exists($iconPath)) {
        return ''; // Fail silently if icon doesn't exist
    }

    $svg = file_get_contents($iconPath);

    // Add aria-hidden and set explicit width/height
    $svg = str_replace('<svg', '<svg aria-hidden="true" width="' . $size . '" height="' . $size . '"', $svg);

    // Remove license comment
    $svg = preg_replace('/<!--.*?-->/s', '', $svg);

    return trim($svg);
}

/**
 * Generate @graph schema with multiple schema types
 * Combines LocalBusiness, BreadcrumbList, and optionally Service/FAQPage
 * @param array $schemaTypes Array of schema objects to include
 * @return string JSON-LD script tag
 */
function generateGraphSchema($schemaTypes) {
    $graph = [
        '@context' => 'https://schema.org',
        '@graph' => $schemaTypes
    ];

    return '<script type="application/ld+json">' . json_encode($graph, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}

/**
 * Generate meta tags for SEO (title, description, canonical)
 * @param string $title Page title
 * @param string $description Meta description
 * @param string $canonical Canonical URL
 * @return array Meta tag variables
 */
function generateMetaTags($title, $description, $canonical) {
    return [
        'pageTitle' => $title,
        'pageDescription' => $description,
        'canonicalUrl' => $canonical
    ];
}

/**
 * Sanitize and validate phone number to E.164 format
 * @param string $phone Raw phone number
 * @return string E.164 format (e.g., +14795550123)
 */
function phoneToE164($phone) {
    $cleaned = preg_replace('/[^0-9]/', '', $phone);

    if (strlen($cleaned) === 10) {
        return '+1' . $cleaned;
    } elseif (strlen($cleaned) === 11 && substr($cleaned, 0, 1) === '1') {
        return '+' . $cleaned;
    }

    return $phone; // Return original if format unrecognized
}

/**
 * Get first N services for homepage preview
 * @param array $services Full services array
 * @param int $limit Number of services to return (default 8)
 * @return array Sliced services array
 */
function getPreviewServices($services, $limit = 8) {
    return array_slice($services, 0, $limit);
}

/**
 * Find service by slug
 * @param array $services Services array
 * @param string $slug Service slug
 * @return array|null Service data or null if not found
 */
function findServiceBySlug($services, $slug) {
    foreach ($services as $service) {
        if ($service['slug'] === $slug) {
            return $service;
        }
    }
    return null;
}
