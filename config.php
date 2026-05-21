<?php
/**
 * ENV DETECTION : LOCAL / LIVE
 */
$isLocal = in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1']);

$brand  = "Askiviki";
$name   = "Vigneshwaran P";
$phone  = "+91 87540 57494";
$email  = "askiviki.official@gmail.com";
$wa     = "918754057494";

$domain = $isLocal
    ? "http://localhost/askiviki/"
    : "https://askiviki.simpletechgroups.com/";

/**
 * FORCE HTTPS ON LIVE
 */
if (!$isLocal && empty($_SERVER['HTTPS'])) {
    header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    exit;
}
$icon = "icon.webp";
$profile_photo = "profile_photo.webp";
$resume = "Vigneshwaran_Prabakaran.pdf";

/*
|--------------------------------------------------------------------------
| SMTP CONFIG
|--------------------------------------------------------------------------
*/

$smtpEmail = "askiviki.official@gmail.com";
$smtpPassword = "your_app_password_here";
?>