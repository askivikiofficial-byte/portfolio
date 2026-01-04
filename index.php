<?php
$brand = "Askiviki";
$name  = "Vigneshwaran P";
$phone = "+91 87540 57494";
$email = "askiviki.official@gmail.com";
$wa    = "918754057494";
$domain = "https://askiviki.simpletechgroups.com";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $brand; ?> | A–Z Business Solutions</title>
    <meta name="description" content="Askiviki provides complete A–Z Business Solutions including IT consulting, software systems, automation and skill development training.">
    <meta name="robots" content="index, follow">

    <!-- FAVICONS -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- OPEN GRAPH -->
    <meta property="og:title" content="Askiviki – A–Z Business Solutions">
    <meta property="og:description" content="Complete business setup, IT solutions & skill development training.">
    <meta property="og:image" content="<?php echo $domain; ?>/og-image.png">
    <meta property="og:url" content="<?php echo $domain; ?>">

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />

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

        .site-logo{
            height:44px;
            width:auto;
        }

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
            align-items:center;
        }

        .hero h1{
            font-size:52px;
            line-height:1.15;
        }

        .hero p{
            margin-top:16px;
            max-width:520px;
            color:var(--muted);
        }

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
            box-shadow:0 20px 60px rgba(56,189,248,.25);
        }

        .cta-btn{
            display:inline-block;
            margin-top:22px;
            padding:14px 34px;
            background:#020617;
            color:#fff;
            border-radius:999px;
            font-weight:600;
            text-decoration:none;
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
            align-items:center;
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

        .contact-socials a:hover{
            color:var(--accent);
            background:rgba(56,189,248,.18);
            transform:translateY(-3px);
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
    </style>
</head>

<body>

<nav>
    <div class="nav">
        <img src="/logo.png" srcset="/logo@2x.png 2x" alt="Askiviki Logo" class="site-logo">
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
            <a class="btn btn-primary" href="https://wa.me/<?php echo $wa; ?>" target="_blank">WhatsApp</a>
            <a class="btn btn-outline" href="mailto:<?php echo $email; ?>">Email</a>
        </div>
    </div>

    <div class="card">
        <h3><?php echo $name; ?></h3>
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
            <div class="card"><h3>Computer Basics</h3><p>For students & shop owners.</p></div>
            <div class="card"><h3>Software Training</h3><p>Billing, POS, ERP tools.</p></div>
            <div class="card"><h3>Web & Programming</h3><p>WordPress & PHP.</p></div>
            <div class="card"><h3>Online / Offline</h3><p>Classroom & Zoom sessions.</p></div>
        </div>
    </div>
</section>

<section class="container">
    <div class="cta-pro">
        <h2>Need a Reliable Business Partner?</h2>
        <p>Get expert guidance for business setup, automation and IT solutions.</p>
        <a class="cta-btn" href="https://wa.me/<?php echo $wa; ?>" target="_blank">🚀 Start Consultation</a>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="contact-pro">
            <h2>Contact</h2>
            <div class="contact-details">
                <div><i class="fa-solid fa-phone"></i> <?php echo $phone; ?></div>
                <div><i class="fa-solid fa-envelope"></i> <?php echo $email; ?></div>
            </div>
            <div class="contact-socials">
                <a href="https://www.facebook.com/profile.php?id=61579770188203" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/askiviki/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://x.com/askiviki" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://www.linkedin.com/in/vigneshwaran-askiviki/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://mastodon.social/@askiviki" target="_blank"><i class="fa-brands fa-mastodon"></i></a>
                <a href="https://www.reddit.com/user/AskIViki/" target="_blank"><i class="fa-brands fa-reddit-alien"></i></a>
            </div>
        </div>
    </div>
</section>

<footer>
    © <?php echo date("Y"); ?> <?php echo $brand; ?> – A–Z Business Solutions
</footer>

<a class="whatsapp" href="https://wa.me/<?php echo $wa; ?>" target="_blank">
    <i class="fa-brands fa-whatsapp"></i>
</a>

</body>
</html>
