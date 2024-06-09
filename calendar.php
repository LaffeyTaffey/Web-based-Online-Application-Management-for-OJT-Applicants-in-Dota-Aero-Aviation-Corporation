<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
    <link rel="stylesheet" href="public/css/landing.css" type="text/css">
    <link rel="stylesheet" href="public/css/index.css" type="text/css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="public/js/landing.js"></script>
    <script src="public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <title>Calendar</title>
</head>

<body background="public/assets/img/dark-bg2.png">
    <header id="header">
        <div class="logo-container">
            <img src="public/assets/img/dota_logo.png" alt="DOTA" id="header-img">
            <h1>DOTA Aero Aviation Service, Inc.</h1>
        </div>
        <div class="logo-container">
            <h1>Philippine State College of Aeronautics</h1>
            <img src="public/assets/img/school_logo.png" alt="PSCA" id="header-img">
        </div>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div> <!-- Hamburger icon -->
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="index.html">Portal</a></li>
                <li><a class="nav-link" href="Announcement.html">Announcement</a></li>
                <li><a class="nav-link" href="landing.html#about">About us</a></li>
                <li><a class="nav-link" href="landing.html">Homepage</a></li>
            </ul>
        <a href="login.html"><button id="signin-button">Sign In →</button></a>
        <br>
        </nav>
    </header>

    <script>
        // JavaScript to toggle menu
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('nav-bar').classList.toggle('active');
        });
    </script>

    <main class="fade-in">
<br>
        <div id="calendar-container">
        <iframe
            src="https://calendar.google.com/calendar/embed?height=1000&wkst=1&ctz=Asia%2FHong_Kong&bgcolor=%23039BE5&src=a2lvc2hpbWFzYW11bmVAZ21haWwuY29t&src=OWIxMDU2M2Y3NGI3MmU4OTkwODJlODE0YjJhNDczMjFlYWYzYWI1N2NjYTkzZDc3ZGQxNWFiNWZiODJlZmI5MkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%23D50000&color=%2333B679&color=%230B8043"
            style="border:solid 1px #777" width="800" height="500" frameborder="0" scrolling="no">
        </iframe>
        </div>

        <!-- Start of Async Drift Code -->
        <script>
            "use strict";

            !function () {
                var t = window.driftt = window.drift = window.driftt || [];
                if (!t.init) {
                    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
                    t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
                        t.factory = function (e) {
                            return function () {
                                var n = Array.prototype.slice.call(arguments);
                                return n.unshift(e), t.push(n), t;
                            };
                        }, t.methods.forEach(function (e) {
                            t[e] = t.factory(e);
                        }), t.load = function (t) {
                            var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
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
                    <img src="public/assets/img/about us/thesis-team/Abad.png" alt="Michael Luis Daniel P Abad"
                        class="profile-img">
                    <h3>Michael Luis Daniel P Abad</h3>
                    <p><i class="fa fa-envelope"></i> abad.michaelluisdaniel@gmail.com</p>
                    <p><i class="fa fa-phone"></i> 09625412428</p>
                    <p><i class="fa fa-user"></i> Michael Abad</p>
                </div>
                <div class="footer-content">
                    <img src="public/assets/img/about us/thesis-team/errol2.png" alt="Errol John N. Pacites"
                        class="profile-img">
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