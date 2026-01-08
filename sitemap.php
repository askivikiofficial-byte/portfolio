<?php
header("Content-Type: application/xml; charset=utf-8");

// Base URL
$domain = $isLocal
    ? "http://localhost/askiviki/"
    : "https://askiviki.simpletechgroups.com/";
// List of pages (extend anytime)
$pages = [
    "",
    "#about",
    "#services",
    "#features",
    "#contact"
];

// Start XML
$xml  = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

foreach ($pages as $page) {
    $xml .= "  <url>" . PHP_EOL;
    $xml .= "    <loc>{$domain}/{$page}</loc>" . PHP_EOL;
    $xml .= "    <lastmod>" . date('Y-m-d') . "</lastmod>" . PHP_EOL;
    $xml .= "    <changefreq>weekly</changefreq>" . PHP_EOL;
    $xml .= "    <priority>0.8</priority>" . PHP_EOL;
    $xml .= "  </url>" . PHP_EOL;
}

$xml .= '</urlset>';

// Save file
file_put_contents(__DIR__ . "/sitemap.xml", $xml);

// Output to browser
echo $xml;
