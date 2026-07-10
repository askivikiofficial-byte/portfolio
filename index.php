<?php include("header.php"); ?>
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
<?php include("footer.php"); ?>