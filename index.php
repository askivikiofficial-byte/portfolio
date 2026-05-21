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

<!-- HERO -->
<section id="hero">
    <div class="hero-grid-bg"></div>
    <div class="hero-glow"></div>
    <div class="hero-glow2"></div>
    <div class="container position-relative" style="z-index:2;">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-content">
                <div class="hero-badge gsap-fade">
                    <span class="dot"></span>
                    Available for Projects
                </div>
                <h1 class="hero-title gsap-fade">
                    Building <span class="highlight" style="font-family:var(--display);font-style:italic;font-weight:600;">High-Performance</span><br>
                    Websites &amp; Digital<br>
                    Experiences
                </h1>
                <p class="hero-sub gsap-fade">Helping businesses grow with scalable WordPress, WooCommerce, Full Stack PHP, and SEO optimized solutions that drive real results.</p>
                <div class="hero-btns gsap-fade">
                    <a href="#contact" class="btn-gold">Hire Me <i class="fas fa-paper-plane"></i></a>
                    <a href="#projects" class="btn-outline-gold">View Projects <i class="fas fa-eye"></i></a>
                </div>
                <div class="hero-stats gsap-fade">
                    <div class="hstat">
                        <i class="fas fa-calendar-alt hstat-icon"></i>
                        <div class="hstat-value">
                            <span class="hstat-num counter" data-target="6">0</span>
                            <span class="hstat-suffix">+</span>
                        </div>
                        <div class="hstat-label">Years Exp.</div>
                    </div>
                    <div class="hstat">
                        <i class="fas fa-th-large hstat-icon"></i>
                        <div class="hstat-value">
                            <span class="hstat-num counter" data-target="50">0</span>
                            <span class="hstat-suffix">+</span>
                        </div>
                        <div class="hstat-label">Projects</div>
                    </div>
                    <div class="hstat">
                        <i class="fas fa-heart hstat-icon"></i>
                        <div class="hstat-value">
                            <span class="hstat-num counter" data-target="99">0</span>
                            <span class="hstat-suffix">%</span>
                        </div>
                        <div class="hstat-label">Satisfaction</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-visual gsap-right">
                    <div class="orbit-ring"></div>
                    <div class="orbit-ring"></div>
                    <div class="tech-orbit-icon"><i class="fab fa-wordpress"></i></div>
                    <div class="tech-orbit-icon"><i class="fab fa-php"></i></div>
                    <div class="tech-orbit-icon"><i class="fab fa-aws"></i></div>
                    <div class="tech-orbit-icon"><i class="fab fa-js"></i></div>
                    <div class="tech-orbit-icon"><i class="fas fa-search"></i></div>
                    <div class="tech-orbit-icon"><i class="fas fa-database"></i></div>
                    <div class="hero-device">
                        <div class="device-frame">
                            <div class="device-bar">
                                <div class="device-dot" style="background:#ff5f57"></div>
                                <div class="device-dot" style="background:#febc2e"></div>
                                <div class="device-dot" style="background:#28c840"></div>
                            </div>
                            <div class="device-screen">
                                <div class="device-code">
                                    <div><span class="c-blue">&lt;?php</span></div>
                                    <div><span class="c-gold">class</span> <span class="c-white"><?= $brand ?></span> {</div>
                                    <div>&nbsp;&nbsp;<span class="c-gold">private</span> $skills = [</div>
                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c-green">'WordPress'</span>,</div>
                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c-green">'WooCommerce'</span>,</div>
                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c-green">'Laravel'</span>,</div>
                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c-green">'Technical SEO'</span>,</div>
                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c-green">'AWS Cloud'</span></div>
                                    <div>&nbsp;&nbsp;];</div>
                                    <div>&nbsp;&nbsp;<span class="c-gold">public function</span> <span class="c-blue">deliver</span>() {</div>
                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c-gold">return</span> <span class="c-green">'excellence'</span>;</div>
                                    <div>&nbsp;&nbsp;}</div>
                                    <div>}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="section-pad">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="about-img-wrap text-center">
                    <img src="<?= $profile_photo?>" alt="<?= $brand ?> – Full Stack PHP Developer" class="about-img" style="width:100%;max-width:350px;border-radius:16px;border:2px solid var(--glass-border);">
                    <div class="about-img-glow"></div>
                    <div class="exp-badge">
                        <span class="num">6+</span>
                        <span class="lbl">Years<br>Experience</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <span class="section-label">Who I Am</span>
                <h2 class="section-title">Crafting Digital Solutions That<br><span class="gold">Drive Growth</span></h2>
                <div class="gold-line"></div>
                <p style="color:var(--text-muted);line-height:1.8;margin-bottom:28px;">With over 6 years of hands-on experience, I specialize in building high-performance WordPress, WooCommerce, and Full Stack PHP solutions for international businesses. My expertise spans from pixel-perfect frontend development to complex server infrastructure on AWS.</p>
                <div class="row g-2 mb-4">
                    <div class="col-md-6">
                        <div class="about-highlight">
                            <i class="fab fa-wordpress"></i>
                            <div><strong style="font-family:var(--font);font-weight:600;">WordPress Expert</strong><br><small style="color:var(--text-muted);">Custom themes, plugins & optimization</small></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-highlight">
                            <i class="fas fa-shopping-cart"></i>
                            <div><strong>WooCommerce Specialist</strong><br><small style="color:var(--text-muted);">End-to-end eCommerce solutions</small></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-highlight">
                            <i class="fab fa-aws"></i>
                            <div><strong>AWS & Linux Server</strong><br><small style="color:var(--text-muted);">Cloud infrastructure & management</small></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-highlight">
                            <i class="fas fa-chart-line"></i>
                            <div><strong>Technical SEO</strong><br><small style="color:var(--text-muted);">Core Web Vitals & ranking optimization</small></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="#contact" class="btn-gold">Let's Work Together <i class="fas fa-handshake"></i></a>
                    <a href="<?= $resume ?>" download class="btn-outline-gold">Download CV <i class="fas fa-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section id="services" class="section-pad" style="background:var(--black2);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-label">What I Offer</span>
            <h2 class="section-title">Premium <span class="gold">Services</span></h2>
            <div class="gold-line mx-auto"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card">
                    <div class="service-icon"><i class="fab fa-wordpress"></i></div>
                    <h4>WordPress Development</h4>
                    <p>Custom WordPress websites built for performance, security, and scalability. From theme development to complex plugin customizations.</p>
                    <a href="#contact" class="service-link">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-shopping-bag"></i></div>
                    <h4>WooCommerce Development</h4>
                    <p>Complete eCommerce solutions with custom checkout flows, payment integrations, inventory systems, and conversion-optimized designs.</p>
                    <a href="#contact" class="service-link">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon"><i class="fab fa-php"></i></div>
                    <h4>Full Stack PHP Development</h4>
                    <p>Robust backend systems using Laravel, CodeIgniter, and Symfony. REST APIs, database architecture, and scalable application development.</p>
                    <a href="#contact" class="service-link">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-search-dollar"></i></div>
                    <h4>Technical SEO</h4>
                    <p>Core Web Vitals optimization, structured data, schema markup, site audit, and comprehensive keyword strategy to dominate search rankings.</p>
                    <a href="#contact" class="service-link">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon"><i class="fab fa-aws"></i></div>
                    <h4>AWS Cloud Hosting</h4>
                    <p>EC2, RDS, S3, CloudFront, and full Linux server management. Secure, scalable cloud infrastructure with 99.9% uptime guarantees.</p>
                    <a href="#contact" class="service-link">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <h4>Website Speed Optimization</h4>
                    <p>PageSpeed 90+ scores, lazy loading, CDN setup, caching strategy, image optimization, and database query tuning for blazing-fast sites.</p>
                    <a href="#contact" class="service-link">Get Started <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SKILLS -->
<section id="skills" class="section-pad">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-label">Tech Stack</span>
            <h2 class="section-title">Skills & <span class="gold">Technologies</span></h2>
            <div class="gold-line mx-auto"></div>
        </div>
        <div class="skill-grid" data-aos="fade-up">
            <div class="skill-chip"><i class="fab fa-php skill-icon"></i><span>PHP</span></div>
            <div class="skill-chip"><i class="fab fa-wordpress skill-icon"></i><span>WordPress</span></div>
            <div class="skill-chip"><i class="fas fa-shopping-cart skill-icon"></i><span>WooCommerce</span></div>
            <div class="skill-chip"><i class="fas fa-brands fa-laravel skill-icon"></i><span>Laravel</span></div>
            <div class="skill-chip"><i class="fas fa-fire skill-icon"></i><span>CodeIgniter</span></div>
            <div class="skill-chip"><i class="fas fa-brands fa-symfony skill-icon"></i><span>Symfony</span></div>
            <div class="skill-chip"><i class="fab fa-js skill-icon"></i><span>JavaScript</span></div>
            <div class="skill-chip"><i class="fas fa-dollar-sign skill-icon"></i><span>jQuery</span></div>
            <div class="skill-chip"><i class="fas fa-database skill-icon"></i><span>MySQL</span></div>
            <div class="skill-chip"><i class="fab fa-aws skill-icon"></i><span>AWS</span></div>
            <div class="skill-chip"><i class="fab fa-linux skill-icon"></i><span>Linux</span></div>
            <div class="skill-chip"><i class="fas fa-paint-brush skill-icon"></i><span>Elementor</span></div>
            <div class="skill-chip"><i class="fab fa-html5 skill-icon"></i><span>HTML5</span></div>
            <div class="skill-chip"><i class="fab fa-css3-alt skill-icon"></i><span>CSS3</span></div>
        </div>
    </div>
</section>

<!-- EXPERIENCE -->
<section id="experience" class="section-pad" style="background:var(--black2);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-label">My Journey</span>
            <h2 class="section-title">Professional <span class="gold">Experience</span></h2>
            <div class="gold-line mx-auto"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="timeline">
                    <!-- CURRENT -->
                    <div class="tl-item" data-aos="fade-up">
                        <div class="tl-dot"></div>

                        <div class="tl-card current-role">
                            <span class="tl-date">May 2025 – Present</span>

                            <div class="tl-role">
                                Freelance Full Stack Developer & Cloud Consultant
                            </div>

                            <div class="tl-company">
                                Self-Employed / Ask I Viki
                            </div>

                            <ul>
                                <li>Building scalable WordPress, WooCommerce & custom PHP solutions for global clients</li>

                                <li>Developing business automation systems, CRM dashboards & API integrations</li>

                                <li>Managing AWS cloud infrastructure, Linux servers, hosting & deployment pipelines</li>

                                <li>Providing technical SEO, Core Web Vitals optimization & performance engineering</li>

                                <li>Working on modern digital products including SaaS platforms, booking systems & AI-powered solutions</li>
                            </ul>
                        </div>
                    </div>

                    <!-- HITAM -->
                    <div class="tl-item" data-aos="fade-up">
                        <div class="tl-dot"></div>
                        <div class="tl-card">
                            <span class="tl-date">Jul 2024 – May 2025</span>
                            <div class="tl-role">Senior Web Solutions Engineer</div>
                            <div class="tl-company">Hitam Newgen Evolutions Pvt Ltd</div>
                            <ul>
                                <li>Led end-to-end development and deployment of WordPress & WooCommerce platforms</li>
                                <li>Developed 5+ custom CRM dashboards using CodeIgniter & MySQL</li>
                                <li>Managed AWS infrastructure including EC2, RDS & SES environments</li>
                                <li>Implemented Core Web Vitals & technical SEO optimizations improving page speed by 30%</li>
                                <li>Configured Linux servers, SSL certificates, hosting & domain migrations</li>
                            </ul>
                        </div>
                    </div>

                    <!-- VENTUREWICKS -->
                    <div class="tl-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="tl-dot"></div>
                        <div class="tl-card">
                            <span class="tl-date">May 2022 – Sep 2024</span>
                            <div class="tl-role">WordPress Developer</div>
                            <div class="tl-company">VentureWicks Resources</div>
                            <ul>
                                <li>Developed and deployed 15+ WordPress & WooCommerce websites</li>
                                <li>Built custom plugins including booking systems & API integrations</li>
                                <li>Integrated Razorpay, Stripe & PayPal payment gateways</li>
                                <li>Reduced website load time by 40% using CDN, caching & optimization</li>
                                <li>Ensured full mobile responsiveness & cross-browser compatibility</li>
                            </ul>
                        </div>
                    </div>

                    <!-- THINKBIG -->
                    <div class="tl-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="tl-dot"></div>
                        <div class="tl-card">
                            <span class="tl-date">Aug 2021 – Apr 2022</span>
                            <div class="tl-role">Application Developer</div>
                            <div class="tl-company">ThinkBiG Software Solutions</div>
                            <ul>
                                <li>Developed secure FinTech application modules using PHP & PGP encryption</li>
                                <li>Enhanced backend security & optimized PHP application stability</li>
                                <li>Built scalable backend workflows using PHP & MySQL</li>
                                <li>Improved maintainability and reduced production incidents through code optimization</li>
                            </ul>
                        </div>
                    </div>

                    <!-- CRATIO -->
                    <div class="tl-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="tl-dot"></div>
                        <div class="tl-card">
                            <span class="tl-date">Jun 2019 – Jun 2021</span>
                            <div class="tl-role">Associate Software Engineer</div>
                            <div class="tl-company">Cratio CRM</div>
                            <ul>
                                <li>Developed 5+ CRM modules for 1,000+ users using Symfony framework</li>
                                <li>Managed AWS EC2 servers & Linux hosting environments</li>
                                <li>Built responsive frontend interfaces using HTML, CSS, JS & jQuery</li>
                                <li>Resolved production issues improving CRM platform reliability & uptime</li>
                                <li>Integrated email marketing workflows & lead management features</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects" class="section-pad">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-label">Portfolio</span>
            <h2 class="section-title">Featured <span class="gold">Projects</span></h2>
            <div class="gold-line mx-auto"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="project-card">
                    <div class="project-img" style="background:linear-gradient(135deg,#1a1a2e,#16213e);">
                        <div class="project-img-placeholder"><i class="fas fa-hands-helping"></i></div>
                        <div class="project-overlay">
                            <a href="https://angalaammantrust.org/" target="_blank" rel="noopener" class="btn-gold mb-3">Live Preview <i class="fas fa-external-link-alt"></i></a>
                            <span style="font-size:12px;color:var(--black);font-weight:600;">angalaammantrust.org</span>
                        </div>
                    </div>
                    <div class="project-body">
                        <div class="project-tags"><span class="tag">WordPress</span><span class="tag">PHP</span><span class="tag">SEO</span></div>
                        <h4>Angalaamman Trust</h4>
                        <p>A non-profit organization website with donation system, event management, and multi-lingual SEO optimization for maximum reach.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="project-card">
                    <div class="project-img" style="background:linear-gradient(135deg,#1a0a00,#3d1f00);">
                        <div class="project-img-placeholder"><i class="fas fa-store"></i></div>
                        <div class="project-overlay">
                            <a href="https://olirweaves.com/" target="_blank" rel="noopener" class="btn-gold mb-3">Live Preview <i class="fas fa-external-link-alt"></i></a>
                            <span style="font-size:12px;color:var(--black);font-weight:600;">olirweaves.com</span>
                        </div>
                    </div>
                    <div class="project-body">
                        <div class="project-tags"><span class="tag">WooCommerce</span><span class="tag">WordPress</span><span class="tag">Speed</span></div>
                        <h4>Olir Weaves</h4>
                        <p>Premium eCommerce store for handloom fabrics with custom product configurator, bulk ordering system, and payment gateway integration.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="project-card">
                    <div class="project-img" style="background:linear-gradient(135deg,#001f1f,#003333);">
                        <div class="project-img-placeholder"><i class="fas fa-fish"></i></div>
                        <div class="project-overlay">
                            <a href="https://aquatikangels.com/" target="_blank" rel="noopener" class="btn-gold mb-3">
                                Live Preview <i class="fas fa-external-link-alt"></i>
                            </a>
                            <span style="font-size:12px;color:var(--black);font-weight:600;">Aquarium Website</span>
                        </div>
                    </div>
                    <div class="project-body">
                        <div class="project-tags">
                            <span class="tag">E-Commerce</span>
                            <span class="tag">UI/UX</span>
                            <span class="tag">SEO</span>
                        </div>
                        <h4>Aquatik Angels</h4>
                        <p>A premium aquatic ecommerce platform designed for exotic fish lovers — featuring modern UI, responsive performance, SEO optimization, and seamless product browsing experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATS -->
<section id="stats" class="section-pad">
    <div class="container">
        <div class="stats-eyebrow">By The Numbers</div>
        <div class="stats-heading">Delivering <span>measurable</span> results</div>
        <div class="stats-row">
            <div class="stat-block">
                <i class="fas fa-calendar-alt stat-icon"></i>
                <div class="stat-value-row">
                    <span class="big-num counter" data-target="6">0</span><span class="stat-suffix">+</span>
                </div>
                <p>Years Experience</p>
                <div class="stat-bar"><div class="stat-bar-fill" data-pct="60"></div></div>
            </div>
            <div class="stat-block">
                <i class="fas fa-th-large stat-icon"></i>
                <div class="stat-value-row">
                    <span class="big-num counter" data-target="50">0</span><span class="stat-suffix">+</span>
                </div>
                <p>Projects Delivered</p>
                <div class="stat-bar"><div class="stat-bar-fill" data-pct="85"></div></div>
            </div>
            <div class="stat-block">
                <i class="fas fa-heart stat-icon"></i>
                <div class="stat-value-row">
                    <span class="big-num counter" data-target="99">0</span><span class="stat-suffix">%</span>
                </div>
                <p>Client Satisfaction</p>
                <div class="stat-bar"><div class="stat-bar-fill" data-pct="99"></div></div>
            </div>
            <div class="stat-block">
                <i class="fas fa-bolt stat-icon"></i>
                <div class="stat-value-row">
                    <span class="big-num counter" data-target="90">0</span><span class="stat-suffix">+</span>
                </div>
                <p>Performance Score</p>
                <div class="stat-bar"><div class="stat-bar-fill" data-pct="90"></div></div>
            </div>
            <div class="stat-block">
                <i class="fas fa-search stat-icon"></i>
                <div class="stat-value-row">
                    <span class="big-num counter" data-target="30">0</span><span class="stat-suffix">+</span>
                </div>
                <p>SEO Optimised Sites</p>
                <div class="stat-bar"><div class="stat-bar-fill" data-pct="70"></div></div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials" class="section-pad">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-label">Client Love</span>
            <h2 class="section-title">What Clients <span class="gold">Say</span></h2>
            <div class="gold-line mx-auto"></div>
        </div>
        <div class="swiper testimonialSwiper" data-aos="fade-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p class="testimonial-text">"Outstanding work! The WooCommerce store he built for us increased our online revenue by 3x in just 3 months. Exceptional attention to detail and always delivers on time."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">MK</div>
                            <div>
                                <div class="author-name">Michael K.</div>
                                <div class="author-role">CEO, eCommerce Brand – USA</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p class="testimonial-text">"Our website's PageSpeed score went from 32 to 96 after his optimization. The SEO improvements brought us to the first page of Google for our key terms."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">SR</div>
                            <div>
                                <div class="author-name">Sarah R.</div>
                                <div class="author-role">Founder, Digital Agency – UK</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p class="testimonial-text">"Best remote developer I've worked with. His AWS setup and Laravel backend handling our enterprise application is rock-solid. Zero downtime in 18 months."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">AJ</div>
                            <div>
                                <div class="author-name">Ahmed J.</div>
                                <div class="author-role">CTO, SaaS Startup – UAE</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="stars">★★★★★</div>
                        <p class="testimonial-text">"Delivered a complete WordPress multisite in record time. His communication throughout the project was excellent and the result exceeded all our expectations."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">LP</div>
                            <div>
                                <div class="author-name">Laura P.</div>
                                <div class="author-role">Marketing Director – Australia</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination mt-4"></div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="section-pad" style="background:var(--black2);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="section-label">Questions</span>
                    <h2 class="section-title">Frequently Asked <span class="gold">Questions</span></h2>
                    <div class="gold-line mx-auto"></div>
                </div>
                <div data-aos="fade-up">
                    <div class="faq-item">
                        <button class="faq-btn">Why hire a remote developer?<span class="faq-icon">+</span></button>
                        <div class="faq-body"><p>Remote developers like myself offer top-tier talent without geographic limitations or overhead costs. You get access to specialized expertise, flexible timezone coverage, and significantly better value compared to local agencies — without compromising on quality or communication.</p></div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-btn">Do you work with international businesses?<span class="faq-icon">+</span></button>
                        <div class="faq-body"><p>Absolutely. I collaborate with clients across the USA, UK, UAE, Australia, and Europe daily. I'm comfortable with async communication via Slack, Notion, or email, and I schedule calls to accommodate different time zones seamlessly.</p></div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-btn">Can you optimize an existing WooCommerce website?<span class="faq-icon">+</span></button>
                        <div class="faq-body"><p>Yes. I offer comprehensive WooCommerce audits covering performance, conversion rate optimization, payment gateway reliability, inventory management, and mobile UX. Most clients see significant improvement in speed and sales after optimization.</p></div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-btn">Do you provide SEO optimization services?<span class="faq-icon">+</span></button>
                        <div class="faq-body"><p>Yes — technical SEO is one of my core specialties. This includes Core Web Vitals optimization, structured data implementation, crawlability fixes, meta strategy, keyword research, on-page SEO, and monthly reporting with measurable KPIs.</p></div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-btn">Do you manage AWS servers and infrastructure?<span class="faq-icon">+</span></button>
                        <div class="faq-body"><p>Yes. I manage complete AWS infrastructure including EC2 instances, RDS databases, S3 storage, CloudFront CDN, SSL/TLS certificates, security groups, and automated backup systems. I also handle Linux server administration on both AWS and VPS environments.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="section-pad">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-label">Get In Touch</span>
            <h2 class="section-title">Let's Build Something <span class="gold">Great</span></h2>
            <div class="gold-line mx-auto"></div>
        </div>
        <div class="row g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="contact-info-card">
                    <div class="icon"><i class="fab fa-whatsapp"></i></div>
                    <div>
                        <small>WhatsApp</small>
                        <a href="https://wa.me/<?= $wa ?>" target="_blank">Send a message</a>
                    </div>
                </div>
                <div class="contact-info-card">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <small>Email</small>
                        <a href="mailto:<?= $email ?>"><?= $email ?></a>
                    </div>
                </div>
                <div class="contact-info-card">
                    <div class="icon"><i class="fab fa-linkedin"></i></div>
                    <div>
                        <small>LinkedIn</small>
                        <a href="https://linkedin.com/in/askiviki" target="_blank">linkedin.com/in/askiviki</a>
                    </div>
                </div>
                <div class="contact-info-card">
                    <div class="icon"><i class="fas fa-globe"></i></div>
                    <div>
                        <small>Portfolio</small>
                        <a href="https://askiviki.simpletechgroups.com/" target="_blank">askiviki.simpletechgroups.com</a>
                    </div>
                </div>
                <div class="mt-4 p-4 glass-card">
                    <p style="font-size:13px;color:var(--text-muted);margin-bottom:0;line-height:1.8;"><i class="fas fa-clock gold me-2"></i>Response time: <strong style="color:var(--white);">within 24 hours</strong><br><i class="fas fa-globe-americas gold me-2"></i>Available for: <strong style="color:var(--white);">Remote work worldwide</strong><br><i class="fas fa-check-circle gold me-2"></i>Currently: <strong style="color:#4ade80;">Open to projects</strong></p>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <form class="contact-form" id="contactForm">

                    <div class="row g-3">

                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="Your Name *" required>
                        </div>

                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="Email Address *" required>
                        </div>

                        <div class="col-md-6">
                            <input type="tel"
                                   name="phone"
                                   placeholder="Phone Number *"
                                   required
                                   pattern="[0-9]{10}"
                                   title="Enter a valid 10 digit phone number">
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="company" placeholder="Company / Website URL">
                        </div>

                        <div class="col-12">
                            <select name="service"
                                    style="background:var(--black3);
                border:1px solid var(--glass-border);
                color:var(--text-muted);
                padding:14px 18px;
                border-radius:8px;
                width:100%;
                font-family:var(--font);
                font-size:14px;
                outline:none;">

                                <option value="">Select Service Needed</option>
                                <option>WordPress Development</option>
                                <option>WooCommerce Development</option>
                                <option>Full Stack PHP Development</option>
                                <option>Technical SEO</option>
                                <option>AWS Cloud Management</option>
                                <option>Website Speed Optimization</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="col-12 mt-3">
                            <textarea name="message" placeholder="Tell me about your project..." required></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn-gold w-100" style="justify-content:center;">
                                Send Message <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>

                        <div class="col-12">
                            <div id="toast"></div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="footer-logo d-flex align-items-center mb-16" style="margin-bottom:16px;">
                    <img src="data:image/jpeg;base64,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9y0NpKiWUtkjA+64/fA8Oh9SodrzcrUOralz6ypcyEn3YGHhjZ8G+PxKhCKnHh+NGzxFDqT+028vLsk2lNdan0y8i23KQ07ncT6Wb9ZC8+rTyHxGCra0juNYtUV9LbZ7fNa7pUO4GBjg+ne/wwThzc+GcrP699vqZaKvp6yFxbLBK2Rjh1Bacg/guMvh1OQm2tS9TqnKsqfR9DUwmAdw94DjxUgsBa5uXOJPxUdikFREyqb9iZokb8HDI/ArtrLVdzK0Ecvgvin06G73LFsRDyIwDg9OSj25m7Ng29uQt1fQT1lU6ISAREANB6ZJ6eK77T8wmc3gZw4GTgcysjdoa5y3HcK5SSSd4RN3QOfBgx+eVZ4fjRyr+SXYgvsdUHJEl192h9RXpz4bFA20Uzhg8LuKR3xcf7gq2tGvdXWq9Ou9DfKuKrf/ADjuMuEg8nA8nD4qMovsKsDHqjyxgjGnkWTe2zR+kt/LPW0gbq2ilpqyNhzLSt4o5T8OrSfmFXm5u6tw1Nx0FvDqK18WRA132/V5+8fwCrNFBXwrGrs8SMf0JJZlso8rZ5c4ucXOJJPUleERaRVCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiID3UVVU0VSyppJ5IJmHLZI3Frh8wu4/wx1R/rqrPxdldCi4nVCfxJM6jOUezJCNa6oBz+mKknGMkodaanJybtP8Ago8ij9lp/wCC/wAHfjWf8mc2rudbVTieacukD+84sc+LOcrm1+qL9cGBldcZahodxYkwefmulRdOit691dDnxJ99n6e4ucXOOSTklflEUpwEREAREQBERAEREAREQFg2DdrUdrtVNbJqa219PSxiKH2inHG1g6DiGCceq5zt47rx8Udltcfo1rsfmqwRUp8OxpvmcETrKtS0pFtM361fDHwUkFvpuXVkOT+OVWd7ulTd699ZVEGR5JJ8yTklcFFJTh00vdcdM5nfZNakwiIrJEEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQH/2Q==" alt="<?= $brand ?>">
                </div>
                <p>Premium WordPress Developer, WooCommerce Expert & Full Stack PHP Developer helping global businesses build high-performance digital solutions.</p>
                <div class="social-links mt-3">

                    <!-- Professional -->
                    <a href="https://www.linkedin.com/in/vigneshwaran-askiviki/" target="_blank" class="social-link" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a href="https://github.com/askivikiofficial-byte" target="_blank" class="social-link" aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>

                    <a href="https://orcid.org/0009-0009-4582-2263" target="_blank" class="social-link" aria-label="ORCID">
                        <i class="fab fa-orcid"></i>
                    </a>

                    <!-- Social -->
                    <a href="https://x.com/askiviki" target="_blank" class="social-link" aria-label="X Twitter">
                        <i class="fab fa-x-twitter"></i>
                    </a>

                    <a href="https://www.facebook.com/profile.php?id=61579770188203" target="_blank" class="social-link" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="https://www.instagram.com/askiviki/" target="_blank" class="social-link" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="https://mastodon.social/@askiviki" target="_blank" class="social-link" aria-label="Mastodon">
                        <i class="fab fa-mastodon"></i>
                    </a>

                    <a href="https://www.reddit.com/user/AskIViki/" target="_blank" class="social-link" aria-label="Reddit">
                        <i class="fab fa-reddit-alien"></i>
                    </a>

                    <!-- Community -->
                    <a href="https://whatsapp.com/channel/0029VbDVXdG47XeA0WwMtd0T" target="_blank" class="social-link" aria-label="WhatsApp Channel">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                </div>
            </div>
            <div class="col-lg-2 col-md-6 offset-lg-1">
                <div class="footer-title">Quick Links</div>
                <ul class="footer-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="footer-title">Services</div>
                <ul class="footer-links">
                    <li><a href="#services">WordPress Dev</a></li>
                    <li><a href="#services">WooCommerce</a></li>
                    <li><a href="#services">PHP Development</a></li>
                    <li><a href="#services">Technical SEO</a></li>
                    <li><a href="#services">AWS Hosting</a></li>
                    <li><a href="#services">Speed Optimization</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-title">Let's Connect</div>
                <p style="font-size:13px;">Ready to start your next project? I'd love to hear from you.</p>
                <a href="#contact" class="btn-gold mt-3" style="font-size:12px;padding:10px 20px;">Get In Touch <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© <?= date("Y")?> <span class="gold"><?= $brand ?></span>. All rights reserved. Built with ❤️ for global businesses.</p>
            <a href="#hero" class="back-top"><i class="fas fa-chevron-up"></i></a>
        </div>
    </div>
</footer>

<!-- WHATSAPP FLOAT -->
<a href="https://wa.me/<?= $wa ?>" class="wa-float" target="_blank" rel="noopener" title="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- SUCCESS TOAST -->
<div class="toast-msg" id="toast"><i class="fas fa-check-circle"></i> Message sent! I'll reply within 24 hours.</div>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script>

<script>
    // INIT AOS
    AOS.init({ duration: 800, once: true, offset: 80 });

    // GSAP REGISTER
    gsap.registerPlugin(ScrollTrigger);

    // NAVBAR SCROLL
    window.addEventListener('scroll', () => {
        document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 50);
    });

    // GSAP HERO ANIMATIONS
    gsap.timeline({ delay: 0.3 })
        .to('.hero-badge', { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' })
        .to('.hero-title', { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out' }, '-=0.3')
        .to('.hero-sub', { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' }, '-=0.4')
        .to('.hero-btns', { opacity: 1, y: 0, duration: 0.6, ease: 'power3.out' }, '-=0.4')
        .to('.hero-stats', { opacity: 1, y: 0, duration: 0.6, ease: 'power3.out' }, '-=0.3')
        .to('.gsap-right', { opacity: 1, x: 0, duration: 1, ease: 'power3.out' }, '-=0.8');

    // PARTICLES
    (function() {
        const canvas = document.getElementById('particles-canvas');
        const ctx = canvas.getContext('2d');
        let particles = [];

        function resize() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        resize();
        window.addEventListener('resize', resize);

        for (let i = 0; i < 80; i++) {
            particles.push({
                x: Math.random() * window.innerWidth,
                y: Math.random() * window.innerHeight,
                r: Math.random() * 1.5 + 0.5,
                dx: (Math.random() - 0.5) * 0.4,
                dy: (Math.random() - 0.5) * 0.4,
                o: Math.random() * 0.5 + 0.1
            });
        }

        function draw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(p => {
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(212,175,55,${p.o})`;
                ctx.fill();
                p.x += p.dx;
                p.y += p.dy;
                if (p.x < 0 || p.x > canvas.width) p.dx *= -1;
                if (p.y < 0 || p.y > canvas.height) p.dy *= -1;
            });
            requestAnimationFrame(draw);
        }
        draw();
    })();

    // COUNTER ANIMATION
    function animateCounters() {
        document.querySelectorAll('.counter').forEach(el => {
            const target = +el.dataset.target;
            let current = 0;
            const step = target / 60;
            const timer = setInterval(() => {
                current = Math.min(current + step, target);
                el.textContent = Math.floor(current);
                if (current >= target) clearInterval(timer);
            }, 25);
        });
        // Animate bottom bars
        document.querySelectorAll('.stat-bar-fill').forEach(el => {
            el.style.width = el.dataset.pct + '%';
        });
    }

    // Trigger counters when hero is visible
    const heroObserver = new IntersectionObserver((entries) => {
        entries.forEach(e => { if (e.isIntersecting) { animateCounters(); heroObserver.disconnect(); } });
    }, { threshold: 0.3 });
    heroObserver.observe(document.getElementById('hero'));

    // SWIPER
    new Swiper('.testimonialSwiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: { delay: 4000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 2 } }
    });

    // FAQ ACCORDION
    document.querySelectorAll('.faq-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.parentElement;
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        });
    });

    // SMOOTH SCROLL for nav links
    document.querySelectorAll('a[href^="#"]').forEach(a => {
        a.addEventListener('click', e => {
            const target = document.querySelector(a.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const offset = 80;
                window.scrollTo({ top: target.offsetTop - offset, behavior: 'smooth' });
                // Close mobile menu
                const menu = document.getElementById('navMenu');
                if (menu.classList.contains('show')) {
                    document.querySelector('.navbar-toggler').click();
                }
            }
        });
    });

    // GSAP scroll animations for service cards
    gsap.utils.toArray('.service-card').forEach((card, i) => {
        gsap.from(card, {
            scrollTrigger: { trigger: card, start: 'top 85%' },
            y: 50, opacity: 0, duration: 0.7, delay: i * 0.1, ease: 'power2.out'
        });
    });
    function showToast(message, type = "success") {

        const toast = document.getElementById("toast");

        toast.className = "";
        toast.classList.add(type);
        toast.classList.add("show");

        toast.innerHTML = message;

        setTimeout(() => {
            toast.classList.remove("show");
        }, 4000);
    }

    document.getElementById("contactForm").addEventListener("submit", function(e) {

        e.preventDefault();

        let form = this;
        let formData = new FormData(form);

        fetch("send-mail.php", {
            method: "POST",
            body: formData
        })
            .then(response => response.json())
            .then(data => {

                if (data.status === "success") {

                    showToast(data.message, "success");
                    form.reset();

                } else {

                    showToast(data.message, "error");

                }

            })
            .catch(error => {

                showToast("Something went wrong. Please try again.", "error");

            });
    });
</script>

<!-- SCHEMA MARKUP -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "<?= $brand ?>",
        "jobTitle": "Full Stack PHP Developer & WordPress Expert",
        "url": "<?= $domain ?>",
        "description": "Premium WordPress Developer, WooCommerce Developer, Full Stack PHP Developer and Technical SEO Expert helping global businesses.",
        "knowsAbout": ["WordPress Development", "WooCommerce Development", "PHP Development", "Technical SEO", "AWS", "Laravel"],
        "offers": {
            "@type": "Offer",
            "description": "WordPress, WooCommerce, PHP Development, Technical SEO, AWS Management"
        }
    }
</script>

</body>
</html>