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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $brand ?> | A–Z Business Solutions</title>
    <meta name="description" content="Askiviki provides complete A–Z Business Solutions including IT consulting, software systems, automation and skill development training.">
    <meta name="robots" content="index, follow">

    <!-- FAVICONS -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="manifest" href="site.webmanifest">

    <!-- OPEN GRAPH -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Askiviki – A–Z Business Solutions">
    <meta property="og:description" content="Complete business setup, IT solutions & skill development training.">
    <meta property="og:image" content="<?= $domain ?>og-image.png">
    <meta property="og:url" content="<?= $domain ?>">

    <!-- FONT AWESOME -->
    <link rel="preload" as="style"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </noscript>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqe7Yz9Qx8uWlH0I1GtIsfRSAxEPPYUajF1/MEGLjm+rXhN3kLBXjg5eQof8I4eAbOeXKQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        :root{
            --bg:#050814;
            --card:#0c1330;
            --primary:#5b6cff;
            --accent:#38bdf8;
            --text:#f1f5f9;
            --muted:#9ca3af;
            --border:#1e293b;
        }
        *{box-sizing:border-box;margin:0;padding:0}
        body{
            font-family:system-ui,-apple-system,Segoe UI,Roboto,sans-serif;
            background:radial-gradient(900px 500px at 20% -10%,#1e2a6a,#050814);
            color:var(--text);
        }

        /* NAVBAR */
        nav{
            position:fixed;
            top:0;
            width:100%;
            height:64px;
            background:rgba(5,8,20,.9);
            backdrop-filter:blur(14px);
            border-bottom:1px solid var(--border);
            z-index:1000;
        }
        .nav{
            max-width:1200px;
            height:64px;
            margin:auto;
            padding:0 20px;
            display:flex;
            align-items:center;
            justify-content:space-between;
        }
        .site-logo{height:44px}
        .nav a{
            color:#cbd5f5;
            text-decoration:none;
            margin-left:22px;
            font-size:14px;
        }

        /* HERO */
        .hero{
            max-width:1200px;
            margin:auto;
            padding:120px 20px 80px;
            display:grid;
            grid-template-columns:1.3fr .7fr;
            gap:48px;
        }
        .hero h1{font-size:52px;line-height:1.15}
        .hero p{margin-top:16px;max-width:520px;color:var(--muted)}

        .buttons{margin-top:28px}
        .btn{
            display:inline-block;
            padding:14px 26px;
            border-radius:10px;
            font-size:14px;
            font-weight:600;
            text-decoration:none;
        }
        .btn-primary{
            background:linear-gradient(90deg,var(--primary),var(--accent));
            color:#020617;
        }
        .btn-outline{
            margin-left:12px;
            border:1px solid var(--border);
            color:#e5e7eb;
        }

        /* CARD */
        .card{
            background:linear-gradient(180deg,rgba(20,30,80,.6),rgba(10,15,40,.6));
            border:1px solid var(--border);
            border-radius:18px;
            padding:26px;
        }

        /* SECTIONS */
        section{padding:70px 20px}
        .container{max-width:1200px;margin:auto}
        h2{font-size:28px;margin-bottom:28px}

        /* GRID */
        .grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
            gap:22px;
        }

        /* CTA */
        .cta-pro{
            background:linear-gradient(135deg,#5b6cff,#38bdf8);
            color:#020617;
            padding:64px 28px;
            border-radius:26px;
            text-align:center;
        }

        /* CONTACT */
        .contact-pro{
            background:linear-gradient(180deg,rgba(20,30,80,.7),rgba(10,15,40,.7));
            border:1px solid var(--border);
            border-radius:20px;
            padding:32px;
        }
        .contact-details div{
            display:flex;
            gap:10px;
            margin-bottom:8px;
        }
        .contact-socials{
            display:flex;
            gap:14px;
            margin-top:16px;
        }
        .contact-socials a{
            width:42px;
            height:42px;
            border-radius:12px;
            display:flex;
            align-items:center;
            justify-content:center;
            color:#cbd5f5;
            background:rgba(255,255,255,.06);
            text-decoration:none;
        }

        /* FOOTER */
        footer{
            text-align:center;
            padding:26px;
            color:#9ca3af;
            font-size:14px;
        }

        /* WHATSAPP */
        .whatsapp{
            position:fixed;
            right:18px;
            bottom:18px;
            width:56px;
            height:56px;
            background:#25D366;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            color:#fff;
            font-size:22px;
        }

        /* MOBILE */
        @media(max-width:900px){
            .hero{grid-template-columns:1fr;padding-top:110px}
            .hero h1{font-size:38px}
        }
        /* CTA SECTION */
        .cta-wrapper{
            padding:90px 20px;
        }

        .cta-pro h2{
            font-size:34px;
            margin-bottom:14px;
        }

        .cta-pro p{
            max-width:680px;
            margin:0 auto 26px;
            font-size:16px;
        }

        .cta-actions{
            display:flex;
            gap:16px;
            justify-content:center;
            flex-wrap:wrap;
        }

        .cta-btn{
            padding:15px 28px;
            border-radius:12px;
            font-weight:600;
            text-decoration:none;
            display:flex;
            align-items:center;
            gap:10px;
        }

        .cta-btn.primary{
            background:#020617;
            color:#fff;
        }

        .cta-btn.secondary{
            border:1px solid rgba(0,0,0,.3);
            color:#020617;
        }

        .cta-note{
            display:block;
            margin-top:22px;
            font-size:13px;
            opacity:.85;
        }
        /* CONTACT SECTION */
        .contact-pro h2{
            font-size:30px;
            margin-bottom:10px;
        }

        .contact-sub{
            max-width:520px;
            margin-bottom:26px;
            color:var(--muted);
            font-size:15px;
        }

        .contact-details{
            margin-bottom:24px;
        }

        .contact-details div{
            display:flex;
            align-items:center;
            gap:12px;
            margin-bottom:10px;
            font-size:15px;
        }

        .contact-details i{
            color:var(--accent);
        }

        .contact-actions{
            display:flex;
            gap:14px;
            flex-wrap:wrap;
        }

        .contact-btn{
            padding:12px 20px;
            border-radius:12px;
            font-size:14px;
            font-weight:600;
            text-decoration:none;
            display:flex;
            align-items:center;
            gap:8px;
        }

        .contact-btn.whatsapp{
            background:#25D366;
            color:#020617;
        }

        .contact-btn.email{
            border:1px solid var(--border);
            color:#e5e7eb;
        }
        /* SOCIAL MEDIA SECTION */
        .social-pro{
            background:linear-gradient(180deg,rgba(20,30,80,.6),rgba(10,15,40,.6));
            border:1px solid var(--border);
            border-radius:22px;
            padding:48px 28px;
            text-align:center;
        }

        .social-pro h2{
            font-size:30px;
            margin-bottom:10px;
        }

        .social-sub{
            max-width:620px;
            margin:0 auto 28px;
            color:var(--muted);
            font-size:15px;
        }

        .social-links{
            display:flex;
            gap:14px;
            justify-content:center;
            flex-wrap:wrap;
        }

        .social-btn{
            padding:12px 22px;
            border-radius:999px;
            font-size:14px;
            font-weight:600;
            text-decoration:none;
            display:flex;
            align-items:center;
            gap:8px;
            color:#020617;
        }

        /* Brand Colors */
        .social-btn.fb{background:#1877F2;color:#fff}
        .social-btn.ig{background:linear-gradient(45deg,#f58529,#dd2a7b,#8134af,#515bd4);color:#fff}
        .social-btn.li{background:#0A66C2;color:#fff}
        .social-btn.x{background:#000;color:#fff}
        .social-btn.yt{background:#FF0000;color:#fff}

    </style>
</head>

<body>

<nav>
    <div class="nav">
        <img src="logo.png" alt="Askiviki Logo" class="site-logo">
        <div>
            <a href="#services">Services</a>
            <a href="#training">Training</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</nav>

<div class="hero">
    <div>
        <h1>Complete A–Z Business Solutions</h1>
        <p>Helping businesses start, automate and grow with IT solutions, software systems and skill development training.</p>
        <div class="buttons">
            <a class="btn btn-primary" href="https://wa.me/<?= $wa ?>" target="_blank">WhatsApp</a>
            <a class="btn btn-outline" href="mailto:<?= $email ?>">Email</a>
        </div>
    </div>

    <div class="card">
        <h3><?= $name ?></h3>
        <p style="margin-top:8px;color:var(--muted);font-size:14px;">
            IT Consultant & Skill Development Trainer<br>
            Practical solutions for shops, startups & professionals.
        </p>
    </div>
</div>

<section id="services">
    <div class="container">
        <h2>A–Z Business Services</h2>
        <div class="grid">
            <div class="card"><h3>Printing & Branding</h3><p>Visiting card, letterhead, rubber stamp.</p></div>
            <div class="card"><h3>Computers & Printers</h3><p>Desktop, laptop, printer setup.</p></div>
            <div class="card"><h3>Billing Software</h3><p>GST, inventory & accounting.</p></div>
            <div class="card"><h3>POS & ERP</h3><p>Retail & restaurant systems.</p></div>
            <div class="card"><h3>Custom Applications</h3><p>Business-specific software.</p></div>
            <div class="card"><h3>Automation</h3><p>Barcode & silent printing.</p></div>
        </div>
    </div>
</section>

<section id="training">
    <div class="container">
        <h2>Skill Development Training</h2>
        <div class="grid">
            <div class="card"><h3>Computer Basics</h3></div>
            <div class="card"><h3>Software Training</h3></div>
            <div class="card"><h3>Web & Programming</h3></div>
            <div class="card"><h3>Online / Offline</h3></div>
        </div>
    </div>
</section>
<section class="cta-wrapper">
    <div class="container">
        <div class="cta-pro">
            <h2>Ready to Start or Upgrade Your Business?</h2>
            <p>
                From visiting cards to complete ERP systems —
                get everything under one roof with expert guidance.
            </p>

            <div class="cta-actions">
                <a href="https://wa.me/<?= $wa ?>" target="_blank" class="cta-btn primary">
                    <i class="fa-brands fa-whatsapp"></i> Talk on WhatsApp
                </a>
                <a href="mailto:<?= $email ?>" class="cta-btn secondary">
                    <i class="fa-solid fa-envelope"></i> Get Free Consultation
                </a>
            </div>

            <small class="cta-note">
                ✔ Trusted by shops, startups & professionals
                ✔ Local support • Practical solutions • Affordable pricing
            </small>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="contact-pro">
            <h2>Let’s Work Together</h2>
            <p class="contact-sub">
                Need business setup, software, automation or training?
                Reach out for practical, affordable solutions.
            </p>

            <div class="contact-details">
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <span><?= $phone ?></span>
                </div>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <span><?= $email ?></span>
                </div>
            </div>

            <div class="contact-actions">
                <a href="https://wa.me/<?= $wa ?>" target="_blank" class="contact-btn whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> WhatsApp Now
                </a>
                <a href="mailto:<?= $email ?>" class="contact-btn email">
                    <i class="fa-solid fa-envelope"></i> Send Email
                </a>
            </div>
        </div>
    </div>
</section>
<section id="social">
    <div class="container">
        <div class="social-pro">
            <h2>Connect With Askiviki</h2>
            <p class="social-sub">
                Follow us for updates, training programs, business tips & tech solutions.
            </p>

            <div class="social-links">
                <a href="https://www.facebook.com/askiviki" target="_blank" class="social-btn fb">
                    <i class="fa-brands fa-facebook-f"></i> Facebook
                </a>

                <a href="https://www.instagram.com/askiviki" target="_blank" class="social-btn ig">
                    <i class="fa-brands fa-instagram"></i> Instagram
                </a>

                <a href="https://www.linkedin.com/in/askiviki" target="_blank" class="social-btn li">
                    <i class="fa-brands fa-linkedin-in"></i> LinkedIn
                </a>

                <a href="https://x.com/askiviki" target="_blank" class="social-btn x">
                    <i class="fa-brands fa-x-twitter"></i> X (Twitter)
                </a>

                <a href="https://www.youtube.com/@askiviki" target="_blank" class="social-btn yt">
                    <i class="fa-brands fa-youtube"></i> YouTube
                </a>
            </div>
        </div>
    </div>
</section>


<footer>
    © <?= date("Y") ?> <?= $brand ?> – A–Z Business Solutions
</footer>

<a class="whatsapp" href="https://wa.me/<?= $wa ?>" target="_blank">
    <i class="fa-brands fa-whatsapp"></i>
</a>

</body>
</html>
