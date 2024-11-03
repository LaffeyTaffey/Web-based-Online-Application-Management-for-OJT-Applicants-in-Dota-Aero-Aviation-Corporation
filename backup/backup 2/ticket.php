<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
    <link rel="stylesheet" href="public/css/landing.css" type="text/css">
    <link rel="stylesheet" href="public/css/ticket-iframe-ct.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <script src="public/js/landing.js"></script>
    <script src="public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <title>Ticket</title>
</head>

<body>
    <header id="header">
        <div class="logo-container">
            <img src="public/assets/img/dota_logo.png" alt="DOTA" id="header-img">
            <h1>DOTA Aero Aviation Service, Inc.</h1>
            <div class="logo-container">
                <img src="public/assets/img/airplane.png" alt="DOTA" id="header-img">
                <h1>Excellence in Aviation Services</h1>
            </div>
        </div>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div> <!-- Hamburger icon -->
        <nav id="nav-bar">
            <ul>
                <br>
                <li><a class="nav-link" href="landing.php">Homepage</a></li>
                <li><a class="nav-link" href="landing.php#ne&up">News updates</a></li>
                <li><a class="nav-link" href="landing.php#networks">Partnership Network</a></li>
                <li class="dropdown">
                    <a href="#" class="nav-link">Admissions <span class="arrow-down-icon">&#9660;</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="landing.php#Credentials">Credentials</a></li>
                        <li><a href="landing.php#ojt-adm">OJT Admission</a></li>
                        <li><a href="ojt-adm-results.php">OJT Admission Results</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="landing.php#about">About us</a></li>
            </ul>
        </nav>
    </header>

    <script>
        // JavaScript to toggle menu
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var navBar = document.getElementById('nav-bar');
            if (navBar.classList.contains('active')) {
                navBar.classList.remove('active');
                navBar.classList.add('reverse-active');
                setTimeout(function() {
                    navBar.classList.remove('reverse-active');
                }, 300); // Adjust the timeout to match animation duration
            } else {
                navBar.classList.add('active');
            }
        });
        // JavaScript to handle smooth scrolling animation and close the hamburger menu for internal links
        document.addEventListener('DOMContentLoaded', function() {
            var navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(function(navLink) {
                navLink.addEventListener('click', function(event) {
                    // Check if the href starts with '#' (internal link)
                    if (this.getAttribute('href').startsWith('#')) {
                        event.preventDefault();
                        var targetId = this.getAttribute('href').substring(1);
                        var targetElement = document.getElementById(targetId);
                        if (targetElement) {
                            var headerOffset = document.getElementById('header').offsetHeight;
                            var targetOffset = targetElement.offsetTop - headerOffset;
                            window.scrollTo({
                                top: targetOffset,
                                behavior: 'smooth'
                            });
                            // Close the hamburger menu
                            document.getElementById('nav-bar').classList.remove('active');
                        }
                    }
                });
            });
        });

        document.querySelectorAll('.dropdown > a').forEach(function(item) {
            item.addEventListener('click', function(event) {
                event.preventDefault();
                var dropdownMenu = item.nextElementSibling;
                if (dropdownMenu.style.display === 'block') {
                    dropdownMenu.style.display = 'none';
                } else {
                    dropdownMenu.style.display = 'block';
                }
            });
        });
    </script>

    <main class="fade-in">
        <br><br><br><br><br><br>
        <div class="iframe-container">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeN05LM3tHCtUW81roVmwjN3G2q2durGrDVrgT7nemuG0swiw/viewform?embedded=true" frameborder="0" id="ticket"><b>Loading Form…</b></iframe>
        </div>

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
            drift.load('e89d849i852c');
        </script>
        <!-- End of Async Drift Code -->
        <br>
        <footer>
            <h1>Contact Us</h1>
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

    </main>
    <script src="public/js/landing.js"></script>
    <script src="public/js/global.js"></script>
</body>

</html>