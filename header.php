<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $brand ?> – Premium WordPress Developer, WooCommerce Developer, Full Stack PHP Developer & Technical SEO Expert. Helping global businesses grow with scalable digital solutions.">
    <meta name="keywords" content="WordPress Developer, WooCommerce Developer, Full Stack PHP Developer, Technical SEO Expert, Remote Web Developer, eCommerce Website Developer, WordPress SEO Optimization">
    <meta property="og:title" content="<?= $brand ?> | Premium WordPress & Full Stack PHP Developer">
    <meta property="og:description" content="Building high-performance websites & digital experiences for global businesses.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $domain ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $brand ?> | Premium WordPress & Full Stack PHP Developer">
    <title><?= $brand ?> | WordPress & Full Stack PHP Developer</title>
    <link rel="canonical" href="<?= $domain ?>">
    <meta name="theme-color" content="#050505">
    <meta name="author" content="<?= $name ?>">
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/png" href="logo.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,600&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- AOS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- Swiper -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">

    <style>
        :root {
            --gold: #D4AF37;
            --gold-light: #f0d060;
            --gold-dark: #a07c10;
            --black: #050505;
            --black2: #111111;
            --black3: #1a1a1a;
            --white: #ffffff;
            --text-muted: #888;
            --glass: rgba(212,175,55,0.07);
            --glass-border: rgba(212,175,55,0.18);
            --font: 'DM Sans', sans-serif;
            --display: 'Cormorant Garamond', serif;
            --mono: 'JetBrains Mono', monospace;
        }

        *{margin:0;padding:0;box-sizing:border-box;}
        html{scroll-behavior:smooth;}
        body{background:var(--black);color:var(--white);font-family:var(--font);overflow-x:hidden;}
        ::selection{background:var(--gold);color:var(--black);}

        /* SCROLLBAR */
        ::-webkit-scrollbar{width:6px;}
        ::-webkit-scrollbar-track{background:var(--black);}
        ::-webkit-scrollbar-thumb{background:var(--gold);border-radius:3px;}

        /* UTILITIES */
        .gold{color:var(--gold);}
        .section-pad{padding:100px 0;}
        .section-label{font-family:var(--mono);font-size:11px;letter-spacing:5px;color:var(--gold);text-transform:uppercase;margin-bottom:16px;display:block;opacity:0.9;}
        .section-title{font-size:clamp(2rem,4vw,3rem);font-weight:700;line-height:1.1;margin-bottom:20px;letter-spacing:-0.02em;}
        .section-title .gold{font-family:var(--display);font-style:italic;font-weight:600;font-size:110%;}
        .gold-line{width:60px;height:3px;background:linear-gradient(90deg,var(--gold),transparent);margin-bottom:40px;}
        .btn-gold{background:linear-gradient(135deg,var(--gold),var(--gold-dark));color:var(--black);font-weight:600;padding:14px 32px;border-radius:4px;border:none;cursor:pointer;transition:all .3s;font-family:var(--mono);font-size:12px;letter-spacing:2px;text-transform:uppercase;text-decoration:none;display:inline-flex;align-items:center;gap:8px;}
        .btn-gold:hover{transform:translateY(-2px);box-shadow:0 10px 40px rgba(212,175,55,.4);color:var(--black);}
        .btn-outline-gold{background:transparent;color:var(--gold);border:1px solid var(--gold);font-weight:500;padding:13px 32px;border-radius:4px;cursor:pointer;transition:all .3s;font-family:var(--mono);font-size:12px;letter-spacing:2px;text-transform:uppercase;text-decoration:none;display:inline-flex;align-items:center;gap:8px;}
        .btn-outline-gold:hover{background:var(--gold);color:var(--black);}
        .glass-card{background:var(--glass);border:1px solid var(--glass-border);backdrop-filter:blur(20px);border-radius:12px;}

        /* PARTICLES */
        #particles-canvas{position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:0;opacity:.5;}

        /* NAVBAR */
        #navbar{position:fixed;top:0;left:0;right:0;z-index:1000;padding:20px 0;transition:all .4s;}
        #navbar.scrolled{background:rgba(5,5,5,.85);backdrop-filter:blur(20px);border-bottom:1px solid var(--glass-border);padding:12px 0;}
        .nav-brand img{height:40px;width:auto;}
        .nav-brand span{font-size:20px;font-weight:700;color:var(--gold);letter-spacing:3px;margin-left:10px;font-family:var(--display);font-style:italic;}
        .nav-link{color:var(--text-muted)!important;font-size:13px;font-weight:500;letter-spacing:1px;text-transform:uppercase;padding:8px 16px!important;transition:color .3s;position:relative;}
        .nav-link::after{content:'';position:absolute;bottom:0;left:50%;right:50%;height:1px;background:var(--gold);transition:all .3s;}
        .nav-link:hover{color:var(--gold)!important;}
        .nav-link:hover::after{left:16px;right:16px;}
        .navbar-toggler{border:1px solid var(--glass-border)!important;color:var(--gold)!important;}
        .navbar-toggler-icon{filter:invert(1);}

        /* HERO */
        #hero{min-height:100vh;display:flex;align-items:center;position:relative;overflow:hidden;padding:120px 0 80px;}
        .hero-grid-bg{position:absolute;inset:0;background-image:linear-gradient(rgba(212,175,55,.05) 1px,transparent 1px),linear-gradient(90deg,rgba(212,175,55,.05) 1px,transparent 1px);background-size:60px 60px;z-index:1;}
        .hero-glow{position:absolute;width:600px;height:600px;border-radius:50%;background:radial-gradient(circle,rgba(212,175,55,.12),transparent 70%);top:-10%;right:-10%;z-index:1;animation:pulse-glow 4s ease-in-out infinite;}
        .hero-glow2{position:absolute;width:400px;height:400px;border-radius:50%;background:radial-gradient(circle,rgba(212,175,55,.08),transparent 70%);bottom:-10%;left:-5%;z-index:1;animation:pulse-glow 4s ease-in-out infinite reverse;}
        @keyframes pulse-glow{0%,100%{transform:scale(1);opacity:.6;}50%{transform:scale(1.1);opacity:1;}}
        .hero-content{position:relative;z-index:2;}
        .hero-badge{display:inline-flex;align-items:center;gap:8px;background:var(--glass);border:1px solid var(--glass-border);padding:8px 20px;border-radius:50px;font-size:12px;font-family:var(--mono);color:var(--gold);margin-bottom:30px;letter-spacing:2px;}
        .hero-badge .dot{width:8px;height:8px;border-radius:50%;background:var(--gold);animation:blink 1.5s infinite;}
        @keyframes blink{0%,100%{opacity:1;}50%{opacity:.3;}}
        .hero-title{font-size:clamp(2.5rem,5vw,4rem);font-weight:700;line-height:1.05;margin-bottom:24px;letter-spacing:-0.03em;}
        .hero-title .line{display:block;overflow:hidden;}
        .hero-title .highlight{color:var(--gold);position:relative;}
        .hero-sub{color:var(--text-muted);font-size:17px;line-height:1.85;max-width:520px;margin-bottom:40px;font-weight:300;}
        .hero-btns{display:flex;gap:16px;flex-wrap:wrap;margin-bottom:60px;}
        .hero-stats{display:flex;gap:40px;flex-wrap:wrap;}
        .stat-item{text-align:center;}
        .stat-num{font-size:2rem;font-weight:700;color:var(--gold);font-family:var(--mono);display:block;line-height:1;}
        .stat-label{font-size:11px;color:var(--text-muted);letter-spacing:2px;text-transform:uppercase;margin-top:4px;}
        .stat-sep{width:1px;background:var(--glass-border);align-self:stretch;}

        /* HERO RIGHT */
        .hero-visual{position:relative;display:flex;align-items:center;justify-content:center;height:500px;}
        .hero-device{position:relative;z-index:3;}
        .device-frame{width:340px;background:var(--black2);border:1px solid var(--glass-border);border-radius:16px;overflow:hidden;box-shadow:0 40px 100px rgba(0,0,0,.6),0 0 60px rgba(212,175,55,.1);}
        .device-bar{background:var(--black3);padding:12px 16px;display:flex;gap:6px;align-items:center;}
        .device-dot{width:10px;height:10px;border-radius:50%;}
        .device-screen{padding:20px;background:var(--black);}
        .device-code{font-family:var(--mono);font-size:11px;line-height:1.8;color:#555;}
        .device-code .c-gold{color:var(--gold);}
        .device-code .c-white{color:#ccc;}
        .device-code .c-green{color:#4ade80;}
        .device-code .c-blue{color:#60a5fa;}

        .orbit-ring{position:absolute;border-radius:50%;border:1px dashed rgba(212,175,55,.2);animation:orbit-spin 20s linear infinite;}
        .orbit-ring:nth-child(1){width:420px;height:420px;top:50%;left:50%;transform:translate(-50%,-50%);}
        .orbit-ring:nth-child(2){width:320px;height:320px;top:50%;left:50%;transform:translate(-50%,-50%);animation-duration:15s;animation-direction:reverse;}
        @keyframes orbit-spin{from{transform:translate(-50%,-50%) rotate(0deg);}to{transform:translate(-50%,-50%) rotate(360deg);}}

        .tech-orbit-icon{position:absolute;width:44px;height:44px;border-radius:50%;background:var(--black2);border:1px solid var(--glass-border);display:flex;align-items:center;justify-content:center;font-size:18px;color:var(--gold);animation:float-icon 3s ease-in-out infinite;}
        .tech-orbit-icon:nth-child(1){top:5%;left:50%;animation-delay:0s;}
        .tech-orbit-icon:nth-child(2){top:25%;right:2%;animation-delay:.5s;}
        .tech-orbit-icon:nth-child(3){bottom:5%;left:50%;animation-delay:1s;}
        .tech-orbit-icon:nth-child(4){top:25%;left:2%;animation-delay:1.5s;}
        .tech-orbit-icon:nth-child(5){top:50%;right:0%;animation-delay:2s;}
        .tech-orbit-icon:nth-child(6){top:50%;left:0%;animation-delay:2.5s;}
        @keyframes float-icon{0%,100%{transform:translateY(0);}50%{transform:translateY(-8px);}}

        /* ABOUT */
        #about{background:var(--black2);}
        .about-img-wrap{position:relative;display:inline-block;}
        .about-img{width:100%;max-width:380px;border-radius:16px;border:2px solid var(--glass-border);display:block;}
        .about-img-glow{position:absolute;inset:-2px;border-radius:18px;background:linear-gradient(135deg,var(--gold),transparent,var(--gold));opacity:.3;pointer-events:none;}
        .exp-badge{position:absolute;bottom:-20px;right:-20px;background:var(--gold);color:var(--black);padding:20px;border-radius:12px;text-align:center;font-weight:900;}
        .exp-badge .num{font-size:2.5rem;display:block;line-height:1;}
        .exp-badge .lbl{font-size:10px;letter-spacing:1px;text-transform:uppercase;}
        .about-highlight{background:var(--glass);border:1px solid var(--glass-border);border-radius:8px;padding:16px;margin-bottom:12px;display:flex;align-items:center;gap:12px;transition:all .3s;}
        .about-highlight:hover{border-color:var(--gold);transform:translateX(4px);}
        .about-highlight i{color:var(--gold);font-size:18px;width:24px;}

        /* SERVICES */
        .service-card{background:var(--black2);border:1px solid var(--glass-border);border-radius:12px;padding:36px 28px;transition:all .4s;position:relative;overflow:hidden;height:100%;}
        .service-card::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,rgba(212,175,55,.08),transparent);opacity:0;transition:opacity .4s;}
        .service-card:hover::before{opacity:1;}
        .service-card:hover{border-color:var(--gold);transform:translateY(-6px);box-shadow:0 20px 60px rgba(212,175,55,.15);}
        .service-icon{width:60px;height:60px;border-radius:12px;background:linear-gradient(135deg,rgba(212,175,55,.15),rgba(212,175,55,.05));display:flex;align-items:center;justify-content:center;font-size:24px;color:var(--gold);margin-bottom:24px;transition:all .3s;}
        .service-card:hover .service-icon{background:var(--gold);color:var(--black);transform:scale(1.1);}
        .service-card h4{font-size:18px;font-weight:600;margin-bottom:12px;letter-spacing:-0.01em;}
        .service-card p{color:var(--text-muted);font-size:14px;line-height:1.7;margin-bottom:20px;}
        .service-link{color:var(--gold);font-size:13px;font-weight:600;text-decoration:none;letter-spacing:1px;text-transform:uppercase;display:flex;align-items:center;gap:6px;transition:gap .3s;}
        .service-link:hover{gap:12px;color:var(--gold);}

        /* SKILLS */
        #skills{background:var(--black2);}
        .skill-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(110px,1fr));gap:16px;}
        .skill-chip{background:var(--glass);border:1px solid var(--glass-border);border-radius:10px;padding:20px 12px;text-align:center;transition:all .3s;cursor:default;}
        .skill-chip:hover{border-color:var(--gold);background:rgba(212,175,55,.1);transform:translateY(-4px);}
        .skill-chip i,.skill-chip .skill-icon{font-size:28px;color:var(--gold);margin-bottom:10px;display:block;}
        .skill-chip span{font-size:11px;font-weight:600;letter-spacing:.5px;color:var(--text-muted);display:block;}
        .skill-chip:hover span{color:var(--white);}

        /* TIMELINE */
        #experience{position:relative;}
        .timeline{position:relative;padding-left:30px;}
        .timeline::before{content:'';position:absolute;left:0;top:0;bottom:0;width:1px;background:linear-gradient(180deg,transparent,var(--gold),var(--gold),transparent);}
        .tl-item{position:relative;padding-bottom:60px;padding-left:40px;}
        .tl-item:last-child{padding-bottom:0;}
        .tl-dot{position:absolute;left:-39px;top:4px;width:18px;height:18px;border-radius:50%;background:var(--gold);border:3px solid var(--black);box-shadow:0 0 20px var(--gold);}
        .tl-card{background:var(--black2);border:1px solid var(--glass-border);border-radius:12px;padding:28px;transition:all .3s;}
        .tl-card:hover{border-color:var(--gold);}
        .tl-date{font-family:var(--mono);font-size:11px;color:var(--gold);letter-spacing:2px;margin-bottom:8px;display:block;}
        .tl-role{font-size:12px;color:var(--text-muted);margin-bottom:4px;}
        .tl-company{font-size:20px;font-weight:600;margin-bottom:16px;font-family:var(--display);font-style:italic;letter-spacing:0.01em;}
        .tl-item ul{list-style:none;padding:0;}
        .tl-item li{color:var(--text-muted);font-size:13px;padding:4px 0;display:flex;align-items:flex-start;gap:8px;}
        .tl-item li::before{content:'▸';color:var(--gold);flex-shrink:0;margin-top:2px;}

        /* PROJECTS */
        .project-card{background:var(--black2);border:1px solid var(--glass-border);border-radius:12px;overflow:hidden;transition:all .4s;height:100%;}
        .project-card:hover{border-color:var(--gold);transform:translateY(-6px);box-shadow:0 20px 60px rgba(212,175,55,.15);}
        .project-img{height:200px;overflow:hidden;position:relative;background:var(--black3);}
        .project-img-placeholder{width:100%;height:100%;display:flex;align-items:center;justify-content:center;font-size:48px;color:var(--gold);opacity:.3;}
        .project-img::after{content:'';position:absolute;inset:0;background:linear-gradient(180deg,transparent 40%,rgba(5,5,5,.9));pointer-events:none;}
        .project-overlay{position:absolute;inset:0;background:rgba(212,175,55,.85);display:flex;flex-direction:column;align-items:center;justify-content:center;opacity:0;transition:opacity .3s;z-index:5;}
        .project-card:hover .project-overlay{opacity:1;}
        .project-body{padding:24px;}
        .project-tags{display:flex;flex-wrap:wrap;gap:6px;margin-bottom:12px;}
        .tag{background:rgba(212,175,55,.1);color:var(--gold);border:1px solid rgba(212,175,55,.2);font-size:10px;font-weight:600;padding:3px 10px;border-radius:50px;letter-spacing:.5px;text-transform:uppercase;}
        .project-body h4{font-size:17px;font-weight:600;margin-bottom:8px;letter-spacing:-0.01em;}
        .project-body p{font-size:13px;color:var(--text-muted);line-height:1.6;}

        /* STATS */
        #stats{background:linear-gradient(135deg,var(--black2),var(--black));}
        .stat-card{text-align:center;padding:40px 20px;}
        .stat-card .big-num{font-size:clamp(2.5rem,5vw,4rem);font-weight:900;color:var(--gold);font-family:var(--mono);display:block;line-height:1;}
        .stat-card p{font-size:13px;color:var(--text-muted);margin-top:8px;letter-spacing:1px;text-transform:uppercase;}

        /* TESTIMONIALS */
        #testimonials{background:var(--black2);}
        .swiper-slide{padding:10px;}
        .testimonial-card{background:var(--glass);border:1px solid var(--glass-border);border-radius:16px;padding:36px;transition:all .3s;position:relative;}
        .testimonial-card::before{content:'\201C';font-size:80px;color:var(--gold);opacity:.2;position:absolute;top:-10px;left:20px;font-family:Georgia,serif;line-height:1;}
        .testimonial-card:hover{border-color:rgba(212,175,55,.4);}
        .testimonial-text{font-size:16px;color:#ccc;line-height:1.85;margin-bottom:24px;position:relative;z-index:1;font-family:var(--display);font-weight:400;}
        .testimonial-author{display:flex;align-items:center;gap:14px;}
        .author-avatar{width:48px;height:48px;border-radius:50%;background:linear-gradient(135deg,var(--gold),var(--gold-dark));display:flex;align-items:center;justify-content:center;font-weight:700;color:var(--black);font-size:16px;flex-shrink:0;}
        .author-name{font-weight:700;font-size:14px;}
        .author-role{font-size:12px;color:var(--text-muted);}
        .stars{color:var(--gold);font-size:12px;margin-bottom:4px;}
        .swiper-pagination-bullet{background:var(--text-muted)!important;}
        .swiper-pagination-bullet-active{background:var(--gold)!important;}

        /* FAQ */
        .faq-item{border:1px solid var(--glass-border);border-radius:8px;margin-bottom:12px;overflow:hidden;transition:border-color .3s;}
        .faq-item.open{border-color:var(--gold);}
        .faq-btn{background:var(--black2);border:none;width:100%;text-align:left;padding:20px 24px;color:var(--white);font-family:var(--font);font-size:15px;font-weight:500;cursor:pointer;display:flex;align-items:center;justify-content:space-between;gap:16px;transition:color .3s;letter-spacing:-0.01em;}
        .faq-btn:hover{color:var(--gold);}
        .faq-icon{font-size:18px;color:var(--gold);transition:transform .3s;flex-shrink:0;}
        .faq-item.open .faq-icon{transform:rotate(45deg);}
        .faq-body{background:var(--black3);padding:0 24px;max-height:0;overflow:hidden;transition:max-height .4s ease,padding .4s;}
        .faq-item.open .faq-body{max-height:200px;padding:20px 24px;}
        .faq-body p{color:var(--text-muted);font-size:14px;line-height:1.7;}

        /* CONTACT */
        #contact{background:var(--black2);}
        .contact-form input,.contact-form textarea,.contact-form select{background:var(--black3);border:1px solid var(--glass-border);color:var(--white);padding:14px 18px;border-radius:8px;width:100%;font-family:var(--font);font-size:14px;transition:border-color .3s;outline:none;margin-bottom:16px;}
        .contact-form input:focus,.contact-form textarea:focus{border-color:var(--gold);box-shadow:0 0 0 3px rgba(212,175,55,.1);}
        .contact-form textarea{min-height:140px;resize:vertical;}
        .contact-info-card{background:var(--glass);border:1px solid var(--glass-border);border-radius:12px;padding:28px;margin-bottom:16px;display:flex;align-items:center;gap:16px;transition:all .3s;}
        .contact-info-card:hover{border-color:var(--gold);}
        .contact-info-card .icon{width:48px;height:48px;border-radius:10px;background:rgba(212,175,55,.1);display:flex;align-items:center;justify-content:center;font-size:20px;color:var(--gold);flex-shrink:0;}
        .contact-info-card a{color:var(--white);text-decoration:none;font-size:15px;font-weight:600;display:block;}
        .contact-info-card a:hover{color:var(--gold);}
        .contact-info-card small{color:var(--text-muted);font-size:12px;}

        /* FOOTER */
        footer{background:var(--black);border-top:1px solid var(--glass-border);padding:60px 0 30px;}
        .footer-logo img{height:36px;width:auto;}
        .footer-logo span{font-size:18px;font-weight:800;color:var(--gold);margin-left:8px;}
        footer p{color:var(--text-muted);font-size:13px;line-height:1.7;}
        .footer-title{font-size:13px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--gold);margin-bottom:20px;}
        .footer-links{list-style:none;padding:0;}
        .footer-links li{margin-bottom:8px;}
        .footer-links a{color:var(--text-muted);text-decoration:none;font-size:13px;transition:color .3s;}
        .footer-links a:hover{color:var(--gold);}
        .social-links{display:flex;gap:12px;margin-top:16px;}
        .social-link{width:38px;height:38px;border-radius:8px;background:var(--glass);border:1px solid var(--glass-border);display:flex;align-items:center;justify-content:center;color:var(--text-muted);text-decoration:none;font-size:15px;transition:all .3s;}
        .social-link:hover{background:var(--gold);color:var(--black);border-color:var(--gold);}
        .footer-bottom{border-top:1px solid var(--glass-border);margin-top:40px;padding-top:24px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;}
        .footer-bottom p{margin:0;font-size:12px;}
        .back-top{width:40px;height:40px;border-radius:8px;background:var(--gold);color:var(--black);display:flex;align-items:center;justify-content:center;text-decoration:none;font-size:16px;transition:all .3s;}
        .back-top:hover{transform:translateY(-3px);color:var(--black);}

        /* WHATSAPP FLOAT */
        .wa-float{position:fixed;bottom:30px;right:30px;z-index:999;width:56px;height:56px;border-radius:50%;background:#25d366;display:flex;align-items:center;justify-content:center;font-size:24px;color:#fff;text-decoration:none;box-shadow:0 4px 20px rgba(37,211,102,.4);animation:float-icon 2s ease-in-out infinite;}
        .wa-float:hover{color:#fff;transform:scale(1.1);}

        /* SUCCESS TOAST */
        .toast-msg{position:fixed;bottom:100px;right:30px;background:linear-gradient(135deg,var(--gold),var(--gold-dark));color:var(--black);padding:16px 24px;border-radius:8px;font-weight:700;font-size:14px;z-index:9999;transform:translateY(80px);opacity:0;transition:all .4s;display:flex;align-items:center;gap:8px;}
        .toast-msg.show{transform:translateY(0);opacity:1;}

        /* RESPONSIVE */
        @media(max-width:991px){
            .hero-visual{height:360px;margin-top:40px;}
            .device-frame{width:280px;}
        }
        @media(max-width:767px){
            .section-pad{padding:70px 0;}
            .hero-stats{gap:24px;}
            .exp-badge{bottom:-10px;right:-10px;padding:14px;}
            .stat-sep{display:none;}
        }

        /* GSAP initial states */
        .gsap-fade{opacity:0;transform:translateY(40px);}
        .gsap-left{opacity:0;transform:translateX(-40px);}
        .gsap-right{opacity:0;transform:translateX(40px);}
        /* STATS */
        #stats { background: #080808; padding: 80px 0; }

        .stats-eyebrow { text-align: center; font-family: var(--mono); font-size: 11px;
            letter-spacing: 5px; color: var(--gold); text-transform: uppercase;
            margin-bottom: 12px; opacity: .85; }

        .stats-heading { text-align: center; font-family: var(--display); font-style: italic;
            font-size: 32px; font-weight: 600; color: var(--white); margin-bottom: 52px; }

        .stats-heading span { color: var(--gold); }

        .stats-row { display: grid; grid-template-columns: repeat(5, 1fr); gap: 0;
            border: 1px solid rgba(212,175,55,.15); border-radius: 16px; overflow: hidden; }

        .stat-block { position: relative; padding: 40px 20px 36px; text-align: center;
            border-right: 1px solid rgba(212,175,55,.12); background: #0e0e0e;
            transition: background .35s; }
        .stat-block:last-child { border-right: none; }
        .stat-block::before { content: ''; position: absolute; top: 0; left: 0; right: 0;
            height: 2px; background: linear-gradient(90deg, transparent, var(--gold), transparent);
            transform: scaleX(0); transition: transform .4s ease; }
        .stat-block:hover { background: #141200; }
        .stat-block:hover::before { transform: scaleX(1); }

        .stat-icon { font-size: 22px; color: rgba(212,175,55,.4); margin-bottom: 16px;
            display: block; transition: color .35s; }
        .stat-block:hover .stat-icon { color: var(--gold); }

        .stat-value-row { display: flex; align-items: flex-start; justify-content: center; }
        .big-num { font-family: var(--mono); font-size: 48px; font-weight: 700;
            color: var(--gold); line-height: 1; display: inline-block; }
        .stat-suffix { font-family: var(--mono); font-size: 28px; font-weight: 700;
            color: var(--gold); margin-top: 4px; margin-left: 2px; opacity: .7; }

        .stat-card p { font-size: 10px; letter-spacing: 2.5px; color: rgba(255,255,255,.35);
            text-transform: uppercase; margin-top: 10px; transition: color .35s; }
        .stat-block:hover p { color: rgba(212,175,55,.6); }

        .stat-bar { position: absolute; bottom: 0; left: 0; right: 0; height: 2px;
            background: rgba(212,175,55,.08); overflow: hidden; }
        .stat-bar-fill { height: 100%; background: var(--gold); width: 0%;
            transition: width 1.4s cubic-bezier(0.22,1,0.36,1); }

        @media(max-width:767px){
            .stats-row { grid-template-columns: repeat(2,1fr); }
            .stat-block { border-right: 1px solid rgba(212,175,55,.12); border-bottom: 1px solid rgba(212,175,55,.12); }
            .stat-block:nth-child(2n) { border-right: none; }
        }
        .hero-stats {
            display: flex;
            align-items: stretch;
            border: 1px solid rgba(212,175,55,.14);
            border-radius: 14px;
            overflow: hidden;
            width: fit-content;
            background: rgba(14,13,0,.6);
            backdrop-filter: blur(10px);
        }

        .hstat {
            position: relative;
            padding: 22px 36px;
            text-align: center;
            border-right: 1px solid rgba(212,175,55,.1);
            transition: background .3s;
            min-width: 130px;
        }
        .hstat:last-child { border-right: none; }
        .hstat::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
            transform: scaleX(0);
            transition: transform .4s ease;
        }
        .hstat:hover { background: rgba(212,175,55,.05); }
        .hstat:hover::after { transform: scaleX(1); }

        .hstat-icon {
            display: block; font-size: 14px;
            color: rgba(212,175,55,.35);
            margin-bottom: 8px; transition: color .3s;
        }
        .hstat:hover .hstat-icon { color: rgba(212,175,55,.75); }

        .hstat-value { display: flex; align-items: flex-start; justify-content: center; gap: 1px; margin-bottom: 6px; }
        .hstat-num { font-family: var(--mono); font-size: 36px; font-weight: 700; color: var(--gold); line-height: 1; }
        .hstat-suffix { font-family: var(--mono); font-size: 20px; font-weight: 700; color: var(--gold); opacity: .6; margin-top: 3px; }
        .hstat-label { font-size: 9px; letter-spacing: 2.5px; text-transform: uppercase; color: rgba(255,255,255,.3); }

        @media(max-width:767px){
            .hstat { padding: 18px 24px; min-width: 100px; }
            .hstat-num { font-size: 28px; }
        }
        .wa-float{
            position: fixed !important;
            bottom: 25px !important;
            right: 25px !important;
            width: 60px;
            height: 60px;
            background: #25D366;
            color: #fff !important;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            display: flex !important;
            align-items: center;
            justify-content: center;
            z-index: 999999 !important;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0,0,0,.25);
            pointer-events: auto !important;
        }

        .wa-float:hover{
            transform: scale(1.08);
            color: #fff;
        }

        .wa-float i{
            pointer-events: none;
        }
        .back-top{
            position: relative;
            z-index: 99999 !important;
            pointer-events: auto !important;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            text-decoration: none;
            cursor: pointer;
        }
        #toast{
            position:fixed;
            top:30px;
            right:30px;
            min-width:300px;
            padding:16px 22px;
            border-radius:12px;
            color:#fff;
            font-size:14px;
            font-weight:500;
            z-index:999999;
            opacity:0;
            visibility:hidden;
            transform:translateY(-20px);
            transition:all .35s ease;
            box-shadow:0 10px 30px rgba(0,0,0,.35);
        }

        #toast.show{
            opacity:1;
            visibility:visible;
            transform:translateY(0);
        }

        #toast.success{
            background:linear-gradient(135deg,#0f5132,#198754);
        }

        #toast.error{
            background:linear-gradient(135deg,#842029,#dc3545);
        }

    </style>
</head>
<body>
<!-- PARTICLES CANVAS -->
<canvas id="particles-canvas"></canvas>

<!-- NAVBAR -->
<nav id="navbar" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand nav-brand d-flex align-items-center" href="#hero">
            <img src="logo.png" alt="<?= $brand ?>" class="about-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <i class="fas fa-bars" style="color:var(--gold)"></i>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-center gap-1">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item ms-2"><a class="btn-gold" href="#contact">Hire Me <i class="fas fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
