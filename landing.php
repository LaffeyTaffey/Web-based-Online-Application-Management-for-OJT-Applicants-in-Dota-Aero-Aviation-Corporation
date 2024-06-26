<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
    <link rel="stylesheet" href="public/css/landing.css" type="text/css">
    <link rel="stylesheet" href="public/css/academics.css" type="text/css">
    <link rel="stylesheet" href="public/css/ojt-admission.css" type="text/css">
    <link rel="stylesheet" href="public/css/about-us.css" type="text/css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="public/js/landing.js"></script>
    <script src="public/js/academics.js"></script>
    <script src="public/js/menu-landing.js"></script>
    <script src="public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>Home</title>

</head>

<body>
    <header id="header">
        <div class="logo-container">
            <img src="public/assets/img/dota_logo.png" alt="DOTA" id="header-img">
            <h1>DOTA Aero Aviation Service, Inc.</h1>
        </div>
        <div class="logo-container">
            <h1>Philippine State College of Aeronautics</h1>
            <img src="public/assets/img/school_logo.png" alt="PSCA" id="header-img1">
        </div>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div> <!-- Hamburger icon -->
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="#home">Home</a></li>
                <li><a class="nav-link" href="#ne&up">News&Updates</a></li>
                <li><a class="nav-link" href="landing.php#academics">ACADEMICS</a></li>
                <li class="dropdown">
                    <a href="#" class="nav-link">Admissions <span class="arrow-down-icon">&#9660;</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#col-adm">College Admission</a></li>
                        <li><a href="#ojt-adm">OJT Admission</a></li>
                        <li><a href="ojt-adm-results.php">OJT Admission Results</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="ticket.php">Submit a ticket</a></li>
                <li><a class="nav-link" href="#about">About us</a></li>
                <li><a class="nav-link" href="index.php">Portal</a></li>
            </ul>
            <br><br><br>
            <a href="login.php"><button id="signin-button">Sign In →</button></a>
            <br>
        </nav>
    </header>

    <main class="fade-in">
        <script src="public/js/landing.js"></script>
        <br><br><br><br><br>
        <div class="wrapper">
            <div class="carousel" id="home">
                <div class="inner">
                    <div class="slide active">
                        <h1>ㅤ</h1>
                    </div>
                    <a href="https://www.philsca.edu.ph/latest-bulletin/amy-ip-awards-winner-mark-kennedy-bantugon/" target="_blank" class="slide">
                        <h1>ㅤ</h1>
                    </a>
                    <div class="slide">
                        <h1>ㅤ</h1>
                    </div>
                    <div class="slide">
                        <h1>ㅤ</h1>
                    </div>
                </div>
                <div class="arrow arrow-left"></div>
                <div class="arrow arrow-right"></div>
            </div>
        </div>
        <!--- news & updates --->
        <main>
            <div class="container1" id="ne&up">
                <h3>NEWS & UPDATES</h3>
                <div class="grid-container">
                    <div class="normal">
                        <p class="demo-title">Previous News</p>
                        <div class="module">
                            <a href="https://www.philsca.edu.ph/latest-bulletin/assessment-team-from-the-british-columbia-institute-of-technology-bcit-canada/" target="_blank">
                                <div class="thumbnail">
                                    <img src="public/assets/img/news&updates/prevnews3.jpg">
                                    <div class="date">
                                        <div>27</div>
                                        <div>Mar</div>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="category">School News</div>
                                    <h1 class="title">AT-British Columbia.</h1>
                                    <h2 class="sub-title">Institute of Technology, Canada</h2>
                                    <div class="description">It was an exciting day at PhilSCA as we welcomed the Assessment Team from the British ...
                                    </div>
                                    <div class="meta">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="hover">
                        <p class="demo-title">Previous Updates</p>
                        <div class="module">
                            <a href="https://www.philsca.edu.ph/latest-bulletin/congratulations-dr-j-prospero-popoy-e-devera-iii/" target="_blank">
                                <div class="thumbnail">
                                    <img src="public/assets/img/news&updates/prevupdates1.jpg">
                                    <div class="date">
                                        <div>1</div>
                                        <div>April</div>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="category">Higher ups Updates</div>
                                    <h1 class="title">Congratulations! DR. J. PROSPERO</h1>
                                    <h2 class="sub-title">“POPOY” E. DEVERA III</h2>
                                    <p class="description">Congratulations! DR. J PROSPERO “POPOY” E. DEVERA III recipient of the UP AWARD OBLATION.</p>
                                    <div class="meta">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="hover">
                        <p class="demo-title">Latest News</p>
                        <div class="module">
                            <a href="https://www.philsca.edu.ph/latest-bulletin/20-hectare-philsca-cerab-campus/" target="_blank">
                                <div class="thumbnail">
                                    <img src="public/assets/img/news&updates/latestnews2.jpg">
                                    <div class="date">
                                        <div>10</div>
                                        <div>April</div>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="category">Latest news program</div>
                                    <h1 class="title">20-Hectare PhilSCA</h1>
                                    <h2 class="sub-title">CERAB Campus</h2>
                                    <p class="description">Exciting day at the future 20-hectare PhilSCA-CERAB Campus with the amazing Philippine Air Force Team! PhilSCA President
                                        Marwin M. Dela ...</p>
                                    <div class="meta">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="hover">
                        <p class="demo-title">Latest Updates</p>
                        <div class="module">
                            <a href="https://www.philsca.edu.ph/latest-bulletin/amy-ip-awards-winner-mark-kennedy-bantugon/" target="_blank">
                                <div class="thumbnail">
                                    <img src="public/assets/img/news&updates/latestupdates2.jpg">
                                    <div class="date">
                                        <div>15</div>
                                        <div>April</div>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="category">certificates.</div>
                                    <h1 class="title">Energy Efficiency Excellence</h1>
                                    <h2 class="sub-title">Award 2023</h2>
                                    <p class="description">HOORAY! The Department of Energy awards the CERTIFICATE OF EXCELLENCE to Philippine State College of Aeronautics for
                                        winning the 2023 ...</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--Acads-->
        <div class="container-acad">
            <section id="timeline">
                <h1 id="academics">ACADEMICS</h1>
                <p class="leader">Streamlined educational pathways for aviation professionals, each offering specialized
                    expertise:</p>
                <div class="demo-card-wrapper">
                    <div class="demo-card demo-card--step1">
                        <div class="head">
                            <div class="number-box">
                                <span>01</span>
                            </div>
                            <h2><span class="small">ILAS</span>Institute of Liberal Arts and Sciences</h2>
                        </div>
                        <div class="body">
                            <p>The program aims to equip students with the knowledge and skills in the theory and practice of
                                communication applicable
                                in aviation professions and contexts.</p>
                            <img src="public/assets/img/academics_school_logos/ILAS1.png" alt="Graphic" width="100" height="200">
                        </div>
                    </div>

                    <div class="demo-card demo-card--step2">
                        <div class="head">
                            <div class="number-box">
                                <span>02</span>
                            </div>
                            <h2><span class="small">ICS</span>Institute of Computer Studies</h2>
                        </div>
                        <div class="body">
                            <p>This is a two-year program leading to 4-year BSIM Course which covers the principles, theory, and
                                methods of
                                information and computer application in the airline industry. </p>
                            <img src="public/assets/img/academics_school_logos/ICS1.png" alt="Graphic" width="100" height="200">
                        </div>
                    </div>

                    <div class="demo-card demo-card--step3">
                        <div class="head">
                            <div class="number-box">
                                <span>03</span>
                            </div>
                            <h2><span class="small">InET</span>Institute of Engineering and Technology</h2>
                        </div>
                        <div class="body">
                            <p>This course deals with the methods and theories/ principles of flight. It also covers basic
                                engineering sciences as
                                applied to research and development, manufacturing, operation, maintenance, repair and
                                modification of aircraft and its
                                components.</p>
                            <img src="public/assets/img/academics_school_logos/InET1.png" alt="Graphic" width="100" height="190">
                        </div>
                    </div>

                    <div class="demo-card demo-card--step4">
                        <div class="head">
                            <div class="number-box">
                                <span>04</span>
                            </div>
                            <h2><span class="small">IGS</span>Institute of Graduate Studies</h2>
                        </div>
                        <div class="body">
                            <p>The course exposes the students to various economic, political, socio- cultural and behavior
                                factors affecting public
                                administration not only in the Philippines but also in other countries.</p>
                            <img src="public/assets/img/academics_school_logos/IGS1.png" alt="Graphic" width="100" height="200">
                        </div>
                    </div>

                    <div class="demo-card demo-card--step5">
                        <div class="head">
                            <div class="number-box">
                                <span>05</span>
                            </div>
                            <h2><span class="small">PFS</span>​PhilSCA Flying School</h2>
                        </div>
                        <div class="body">
                            <p>Handles the flight training course of the BSAT program under the Institute of Engineering
                                Technology.</p>
                            <img src="public/assets/img/academics_school_logos/PFS1..png" alt="Graphic" width="100" height="200">
                        </div>
                    </div>

                    <div class="demo-card demo-card--step6">
                        <div class="head">
                            <div class="number-box">
                                <span>06</span>
                            </div>
                            <h2><span class="small">CAS</span>College of Arts and Science</h2>
                        </div>
                        <div class="body">
                            <p>Handles the flight training course of the BSAT program under the Institute of Engineering
                                Technology.</p>
                            <img src="public/assets/img/academics_school_logos/UDMCAS.png" alt="Graphic" width="100" height="200">
                        </div>

                    </div>

                </div>
            </section>
        </div>
        <!--College Admission-->

        <div class="background">
            <div class="container" id="col-adm">
                <h2 class="text-center">College Admission</h2>
                <div class="college-gallery">
                    <div><img src="public/assets/img/gallery/col1.png" data-image-hd="public/assets/img/col-adm-imgs/1-admission-scaled.jpg" alt="Step 1" onclick="showHdImage(this.getAttribute('data-image-hd'), this.alt);">
                    </div>
                    <div><img src="public/assets/img/gallery/col2.png" data-image-hd="public/assets/img/col-adm-imgs/2-admission-scaled.jpg" alt="Step 2" onclick="showHdImage(this.getAttribute('data-image-hd'), this.alt);">
                    </div>
                    <div><img src="public/assets/img/gallery/col3.png" data-image-hd="public/assets/img/col-adm-imgs/3-admission-scaled.jpg" alt="Step 3" onclick="showHdImage(this.getAttribute('data-image-hd'), this.alt);">
                    </div>
                    <div><img src="public/assets/img/gallery/col4.png" data-image-hd="public/assets/img/col-adm-imgs/4-admission-scaled.jpg" alt="Step 4" onclick="showHdImage(this.getAttribute('data-image-hd'), this.alt);">
                    </div>
                    <div><img src="public/assets/img/gallery/col5.png" data-image-hd="public/assets/img/col-adm-imgs/5-admission-scaled.jpg" alt="Step 5" onclick="showHdImage(this.getAttribute('data-image-hd'), this.alt);">
                    </div>
                    <div><img src="public/assets/img/gallery/col6.png" data-image-hd="public/assets/img/col-adm-imgs/6-admission-scaled.jpg" alt="Step 6" onclick="showHdImage(this.getAttribute('data-image-hd'), this.alt);">
                    </div>
                    <div><img src="public/assets/img/gallery/col7.png" data-image-hd="public/assets/img/col-adm-imgs/7-admission-scaled.jpg" alt="Step 7" onclick="showHdImage(this.getAttribute('data-image-hd'), this.alt);">
                    </div>
                </div>
                <br>
                <h3>The Admission Office</h3>
                <p>The Admission Office is envisioned to be the students' reference for entrance requirements in order to acquire
                    quality students responsive to the dynamic and emerging demands for world-class aviation professionals.</p>
                <br>
                <h3>Our Mission</h3>
                <p>Our main task is to acknowledge, screen and evaluate applicants that can be part of the student body who will
                    represent our Alma Mater to the aviation industry worldwide.</p>
                <br>
                <h2>Contact Information</h2>
                <div class="contact-container">
                    <h3>Villamor Campus</h3>
                    <p>Contact No.: 0960-562-9180</p>
                    <p>Email: philscaadmission.villamor@gmail.com</p>
                    <h3>Mactan & Medellin Campus</h3>
                    <p>Contact No.: 0995-912-5834</p>
                    <p>Email: philscamactan.osa@gmail.com</p>
                </div>
                <div class="contact-container">
                    <h3>FAB Campus</h3>
                    <p>Contact No.: 0997-267-1791</p>
                    <p>Email: osaphilscafab@gmail.com</p>
                    <h3>BASA Campus</h3>
                    <p>Contact No.: 0968-551-6451</p>
                    <p>Email: admission.bab@philsca.edu.ph</p>
                </div>
            </div>
        </div>
        <!--OJT Admission-->
        <section>
            <div class="container-ojt" id="ojt-adm">
                <div class="background-img">
                    <div class="box-ojt">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="content-ojt">
                            <h2>OJT Admission</h2>
                            <p><a>Applicants must provide necessary documents and information in order to proceed.</a></p>
                            <div class="ojt-button">
                                <a href="ojt-requirements.php">
                                    <button class="neumorphic active" title="Click here to register for OJT">
                                        <img src="public/assets/img/icons/material-symbols--how-to-reg.png" height="40px" width="40px">
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--About us-->
        <section id="team" class="team-area">
            <div class="container1" id="about">
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-heading text-center">
                            <h2>About <span>us</span></h2>
                            <h4>Meet the Research Team</h4>
                        </div>
                    </div>
                </div>
                <h3>Research team</h3>
                <br><br>
                <div class="team">
                    <div class="team_member">
                        <div class="team_img">
                            <img src="public/assets/img/about us/thesis-team/Abad.png" alt="Team_image">
                        </div>
                        <h3>Abad, Michael Luis Daniel</h3>
                        <p class="role">Research/System</p>
                        <p></p>
                    </div>
                    <div class="team_member">
                        <div class="team_img">
                            <img src="public/assets/img/about us/thesis-team/Ariel.jpg" alt="Team_image">
                        </div>
                        <h3>Nepomuceno, Ariel Jr.</h3>
                        <p class="role">Research/System</p>
                        <p></p>
                    </div>
                    <div class="team_member">
                        <div class="team_img">
                            <img src="public/assets/img/about us/thesis-team/errol2.png" alt="Team_image">
                        </div>
                        <h3>Pacites, Errol John</h3>
                        <p class="role">Research/System</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Start of Async Drift Code -->
    <script>
        "use strict";

        ! function() {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
                if (t.invoked) return void(window.console && console.error && console.error("Drift snippet included twice."));
                t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
                    t.factory = function(e) {
                        return function() {
                            var n = Array.prototype.slice.call(arguments);
                            return n.unshift(e), t.push(n), t;
                        };
                    }, t.methods.forEach(function(e) {
                        t[e] = t.factory(e);
                    }), t.load = function(t) {
                        var e = 3e5,
                            n = Math.ceil(new Date() / e) * e,
                            o = document.createElement("script");
                        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                        var i = document.getElementsByTagName("script")[0];
                        i.parentNode.insertBefore(o, i);
                    };
            }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('vf4skr37birm');
    </script>
    <!-- End of Async Drift Code -->

    <!-- Footer Section -->
    <footer>
        <h2>Contact Us</h2>
        <div class="footer-container">
            <div class="footer-content">
                <img src="public/assets/img/about us/thesis-team/Ariel.jpg" alt="Ariel Nepomuceno Jr." class="profile-img">
                <h3>Ariel Nepomuceno Jr.</h3>
                <p><i class="fa fa-envelope"></i> nepomucenojr.ariel@gmail.com</p>
                <p><i class="fa fa-phone"></i> 09668424122</p>
                <p><i class="fa fa-user"></i> Ariel Nepomuceno</p>
            </div>
            <div class="footer-content">
                <img src="public/assets/img/about us/thesis-team/Abad.png" alt="Michael Luis Daniel P Abad" class="profile-img">
                <h3>Michael Luis Daniel P Abad</h3>
                <p><i class="fa fa-envelope"></i> abad.michaelluisdaniel@gmail.com</p>
                <p><i class="fa fa-phone"></i> 09625412428</p>
                <p><i class="fa fa-user"></i> Michael Abad</p>
            </div>
            <div class="footer-content">
                <img src="public/assets/img/about us/thesis-team/errol2.png" alt="Errol John N. Pacites" class="profile-img">
                <h3>Errol John N. Pacites</h3>
                <p><i class="fa fa-envelope"></i> errolpacites25@gmail.com</p>
                <p><i class="fa fa-phone"></i> 09319548290</p>
                <p><i class="fa fa-user"></i> Errol Pacites</p>
            </div>
        </div>
    </footer>

    <script src="public/js/landing.js"></script>
    <script src="public/js/menu-landing.js"></script>
    <script src="public/js/global.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
</body>

</html>