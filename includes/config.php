<?php
/**
 * config.php — Global site configuration for JBL Roofing LLC
 * All site-wide variables sourced from build-plan.json.
 * Included at the top of every page before head.php.
 */

/* ---------------------------------------------------------------------------
 * IDENTITY
 * ------------------------------------------------------------------------- */
$slug        = 'jbl-roofing-llc';               // exact build directory name
$siteName    = 'JBL Roofing LLC';
$tagline     = 'Built Tough. Built Right.';
$industry    = 'roofing';
$ownerName   = '';                              // not provided in intake

/* ---------------------------------------------------------------------------
 * CONTACT
 * ------------------------------------------------------------------------- */
$phone          = '';                           // not provided in intake
$phoneSecondary = '';                           // not provided in intake
$email          = '';                           // not provided in intake
$acceptsSms     = false;
$businessHours  = '24/7';

$address = [
    'street' => '5022 S 33rd St',
    'city'   => 'Fort Smith',
    'state'  => 'AR',
    'zip'    => '72903',
];

$geo = [
    'lat' => 35.3349866,
    'lng' => -94.39839049999999,
];

/* ---------------------------------------------------------------------------
 * DOMAIN / URLS
 *   No production_domain in build-plan.json → default to preview host.
 * ------------------------------------------------------------------------- */
$domain  = 'jbl-roofing-llc.pageone.cloud';
$siteUrl = 'https://' . $domain;
// NOTE: $canonicalUrl is set per-page (each page defines it before head.php).

/* ---------------------------------------------------------------------------
 * BRAND COLORS (extracted from logo — Phase 0)
 * ------------------------------------------------------------------------- */
$colors = [
    'primary'   => '#082512',
    'secondary' => '#5A9845',
    'accent'    => '#9E9F9F',
];

/* ---------------------------------------------------------------------------
 * BUSINESS HISTORY
 * ------------------------------------------------------------------------- */
$yearsInBusiness = 1;
$yearEstablished = 2025;

/* ---------------------------------------------------------------------------
 * SEO
 * ------------------------------------------------------------------------- */
$primaryKeyword    = 'roof repair fort smith ar';
$secondaryKeywords = [
    'roofing contractor fort smith ar',
    'emergency roof repair fort smith ar',
    'roof replacement fort smith ar',
    'roofer near me',
    'gutter cleaning fort smith ar',
    'metal roofing fort smith ar',
    'roof inspection fort smith ar',
    'roof leak repair fort smith ar',
    'emergency roofer near me',
    'flat roofing contractor fort smith ar',
    'storm damage roof repair fort smith ar',
    'roof financing options fort smith ar',
];

/* ---------------------------------------------------------------------------
 * FORMS / ANALYTICS
 * ------------------------------------------------------------------------- */
$formAction        = 'https://formsubmit.co/CustomerService@pageoneinsights.com';
$googleAnalyticsId = 'G-XXXXXXXXXX';            // placeholder — replace post-launch

/* ---------------------------------------------------------------------------
 * SERVICES (full catalog — name, description, keywords, slug)
 * ------------------------------------------------------------------------- */
$services = [
    [
        'name'        => 'Gutter Installation & Downspout Services',
        'slug'        => 'gutter-installation-downspout',
        'description' => 'Professional gutter and downspout installation to protect your Fort Smith home from water damage and foundation issues. We install high-quality gutters designed to handle Arkansas weather.',
        'keywords'    => ['gutter installation Fort Smith AR', 'downspout services Fort Smith', 'seamless gutters Arkansas', 'professional gutter contractors'],
    ],
    [
        'name'        => 'Gutter Cleaning & Maintenance',
        'slug'        => 'gutter-cleaning-maintenance',
        'description' => 'Regular gutter cleaning and maintenance services to keep your drainage system functioning properly year-round. Prevent costly water damage with professional gutter care.',
        'keywords'    => ['gutter cleaning Fort Smith AR', 'gutter maintenance services', 'residential gutter cleaning Arkansas', 'prevent gutter damage'],
    ],
    [
        'name'        => 'Siding Installation & Repair',
        'slug'        => 'siding-installation-repair',
        'description' => "Quality siding installation and repair services to enhance your home's curb appeal and weatherproofing. Improve energy efficiency and protect your home's exterior.",
        'keywords'    => ['siding installation Fort Smith', 'siding repair Arkansas', 'residential siding contractor', 'home siding services'],
    ],
    [
        'name'        => 'Roof Repair',
        'slug'        => 'roof-repair',
        'description' => "Expert roof repair services for all types of roofing materials and damage. Our certified contractors provide affordable, prompt repairs to extend your roof's lifespan.",
        'keywords'    => ['roof repair Fort Smith AR', 'affordable roof repair', 'professional roofers Arkansas', 'residential roof repair'],
    ],
    [
        'name'        => 'Emergency Roof Repair (24/7)',
        'slug'        => 'emergency-roof-repair',
        'description' => '24/7 emergency roofing services available for storm damage, leaks, and urgent repairs. Same-day service to protect your Fort Smith home when you need it most.',
        'keywords'    => ['emergency roof repair Fort Smith', '24/7 roofing services Arkansas', 'emergency roofers near me', 'same-day roof repair'],
    ],
    [
        'name'        => 'Roof Replacement & Installation',
        'slug'        => 'roof-replacement-installation',
        'description' => 'Complete roof replacement and new installation services for residential properties. Professional installation ensures durability and proper protection for your Fort Smith home.',
        'keywords'    => ['roof replacement Fort Smith AR', 'new roof installation', 'complete roof replacement Arkansas', 'residential roof installation'],
    ],
    [
        'name'        => 'Asphalt Shingle Roofing',
        'slug'        => 'asphalt-shingle-roofing',
        'description' => 'Affordable and durable asphalt shingle roofing solutions for homes in Fort Smith. We specialize in asphalt shingle installation and replacement.',
        'keywords'    => ['asphalt shingle roofing Fort Smith', 'shingle roof installation Arkansas', 'asphalt roof replacement', 'shingle contractors'],
    ],
    [
        'name'        => 'Metal Roofing Services',
        'slug'        => 'metal-roofing',
        'description' => 'Energy-efficient metal roofing installation and repair for residential properties. Metal roofs offer superior durability and long-term savings for Arkansas homeowners.',
        'keywords'    => ['metal roofing Fort Smith AR', 'metal roof installation Arkansas', 'standing seam metal roofing', 'durable metal roof contractor'],
    ],
    [
        'name'        => 'Tile Roofing',
        'slug'        => 'tile-roofing',
        'description' => 'Professional tile roof installation and repair services for upscale residential properties. Tile roofing combines aesthetic appeal with exceptional durability.',
        'keywords'    => ['tile roofing Fort Smith AR', 'tile roof installation Arkansas', 'clay tile roofing contractor', 'tile roof repair'],
    ],
    [
        'name'        => 'Slate Roofing',
        'slug'        => 'slate-roofing',
        'description' => 'Premium slate roofing installation for homes seeking durability and elegant aesthetics. Slate offers exceptional longevity and weather resistance.',
        'keywords'    => ['slate roofing Fort Smith AR', 'slate roof installation Arkansas', 'premium slate roofers', 'slate roof contractor'],
    ],
    [
        'name'        => 'Flat Roofing Systems',
        'slug'        => 'flat-roofing-systems',
        'description' => 'Expert installation and repair of flat roofing systems including TPO, EPDM, and modified bitumen. Ideal for commercial and residential properties in Fort Smith.',
        'keywords'    => ['flat roofing Fort Smith AR', 'flat roof installation Arkansas', 'TPO roofing contractor', 'commercial roof systems'],
    ],
    [
        'name'        => 'TPO Roofing',
        'slug'        => 'tpo-roofing',
        'description' => 'Thermoplastic polyolefin (TPO) roofing installation for energy-efficient protection. TPO systems are cost-effective and weather-resistant for Arkansas properties.',
        'keywords'    => ['TPO roofing Fort Smith', 'TPO roof installation Arkansas', 'energy-efficient TPO roofing', 'TPO membrane contractor'],
    ],
    [
        'name'        => 'EPDM Roofing',
        'slug'        => 'epdm-roofing',
        'description' => 'EPDM rubber roofing installation and repair for durable, weather-resistant coverage. Long-lasting EPDM systems protect your investment.',
        'keywords'    => ['EPDM roofing Fort Smith AR', 'rubber roofing Arkansas', 'EPDM roof installation', 'rubber membrane roofer'],
    ],
    [
        'name'        => 'Cedar Shake Roofing',
        'slug'        => 'cedar-shake-roofing',
        'description' => 'Authentic cedar shake roofing for homes valuing natural beauty and traditional charm. We install and maintain cedar shake roofs for lasting appeal.',
        'keywords'    => ['cedar shake roofing Fort Smith', 'wood shake roof Arkansas', 'cedar roof installation', 'traditional shake roofing'],
    ],
    [
        'name'        => 'Energy-Efficient Roofing',
        'slug'        => 'energy-efficient-roofing',
        'description' => 'Energy-efficient roofing solutions designed to reduce cooling costs and improve home comfort. Save money while protecting your Fort Smith home.',
        'keywords'    => ['energy-efficient roofing Fort Smith', 'cool roof installation Arkansas', 'energy saving roofing', 'reduced energy cost roofing'],
    ],
    [
        'name'        => 'Residential Roof Inspection',
        'slug'        => 'residential-roof-inspection',
        'description' => "Professional roof inspection services to assess your roof's condition and identify potential issues. Early detection prevents costly water damage.",
        'keywords'    => ['roof inspection Fort Smith AR', 'professional roof inspector Arkansas', 'residential roof assessment', 'home roof inspection'],
    ],
    [
        'name'        => 'Roof Damage Assessment',
        'slug'        => 'roof-damage-assessment',
        'description' => 'Comprehensive roof damage assessment and insurance claim documentation for storm-damaged properties. We help you maximize your coverage.',
        'keywords'    => ['roof damage assessment Fort Smith', 'insurance claim roofing Arkansas', 'damage inspection contractor', 'hail damage assessment'],
    ],
    [
        'name'        => 'Roof Maintenance Services',
        'slug'        => 'roof-maintenance',
        'description' => 'Regular roof maintenance to extend the lifespan and performance of your roofing system. Preventive care protects your investment.',
        'keywords'    => ['roof maintenance Fort Smith AR', 'roofing maintenance services Arkansas', 'preventive roof care', 'roof maintenance contractor'],
    ],
    [
        'name'        => 'Storm Damage Repair',
        'slug'        => 'storm-damage-repair',
        'description' => 'Expert repair services for storm-damaged roofs in Fort Smith. We handle wind, hail, and water damage with insurance claim assistance.',
        'keywords'    => ['storm damage repair Fort Smith', 'severe weather roof damage Arkansas', 'wind damage roofing', 'storm roof repair contractor'],
    ],
    [
        'name'        => 'Roof Leak Repair',
        'slug'        => 'roof-leak-repair',
        'description' => 'Professional leak detection and repair to stop water intrusion and prevent interior damage. Fast, reliable leak repair services.',
        'keywords'    => ['roof leak repair Fort Smith AR', 'leak detection Arkansas', 'water leak roofing', 'emergency leak repair contractor'],
    ],
    [
        'name'        => 'Insurance Claim Assistance',
        'slug'        => 'insurance-claim-assistance',
        'description' => 'Expert guidance and documentation support for roofing insurance claims in Fort Smith. We help maximize your claim settlement.',
        'keywords'    => ['insurance claim assistance Fort Smith', 'roof insurance claim Arkansas', 'claim support roofer', 'insurance documentation'],
    ],
    [
        'name'        => 'Roof Financing Options',
        'slug'        => 'roof-financing-options',
        'description' => 'Flexible financing plans make roof repairs and replacements affordable for Fort Smith homeowners. Low-interest options available.',
        'keywords'    => ['roof financing Fort Smith AR', 'roof payment plans Arkansas', 'affordable roofing financing', 'roof financing options'],
    ],
];

/* ---------------------------------------------------------------------------
 * SERVICE GROUPING (Premium routing — how services map to pages)
 * ------------------------------------------------------------------------- */
$serviceGroups = [
    [
        'page'     => 'Seasonal Services',
        'slug'     => 'seasonal-services',
        'solo'     => false,
        'services' => [
            'Gutter Installation & Downspout Services',
            'Metal Roofing Services',
            'Roof Maintenance Services',
        ],
    ],
    [
        'page'     => 'Roofing Services',
        'slug'     => 'roofing-services',
        'solo'     => false,
        'services' => [
            'Gutter Cleaning & Maintenance',
            'Roof Repair',
            'Emergency Roof Repair (24/7)',
            'Roof Replacement & Installation',
            'Asphalt Shingle Roofing',
            'Tile Roofing',
            'Slate Roofing',
            'Flat Roofing Systems',
            'TPO Roofing',
            'EPDM Roofing',
            'Cedar Shake Roofing',
            'Energy-Efficient Roofing',
            'Residential Roof Inspection',
            'Roof Damage Assessment',
            'Roof Leak Repair',
            'Roof Financing Options',
        ],
    ],
    [
        'page'     => 'Siding Installation & Repair',
        'slug'     => 'siding-installation-repair',
        'solo'     => true,
        'services' => ['Siding Installation & Repair'],
    ],
    [
        'page'     => 'Storm Damage Repair',
        'slug'     => 'storm-damage-repair',
        'solo'     => true,
        'services' => ['Storm Damage Repair'],
    ],
    [
        'page'     => 'Insurance Claim Assistance',
        'slug'     => 'insurance-claim-assistance',
        'solo'     => true,
        'services' => ['Insurance Claim Assistance'],
    ],
];

/* ---------------------------------------------------------------------------
 * SERVICE AREAS (Premium)
 * ------------------------------------------------------------------------- */
$serviceAreas = [
    [
        'city'    => 'Fort Smith',
        'state'   => 'AR',
        'zip'     => '72903',
        'slug'    => 'fort-smith',
        'primary' => true,
    ],
];

/* ---------------------------------------------------------------------------
 * SOCIAL
 * ------------------------------------------------------------------------- */
$socialLinks = [];                              // none provided in intake

/* ---------------------------------------------------------------------------
 * INTEGRATIONS
 * ------------------------------------------------------------------------- */
$gbpPlaceId    = '';
$gbpMapEmbed   = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3894.7797516843875!2d-94.39839049999999!3d35.3349866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87ca4d2f6a9ba169%3A0xef78e44ea423a7d2!2sJBL%20ROOFING!5e1!3m2!1sen!2sph!4v1785371509127!5m2!1sen!2sph" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>';
$directionsUrl = '';
$reviewRequestUrl = '';

/* ---------------------------------------------------------------------------
 * CSS CACHE-BUST VERSION (increment when styles.css changes)
 * ------------------------------------------------------------------------- */
$cssVersion = '2';
