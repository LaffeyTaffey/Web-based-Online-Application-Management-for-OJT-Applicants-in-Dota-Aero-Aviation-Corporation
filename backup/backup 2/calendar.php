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
            <div class="logo-container">
                <img src="public/assets/img/airplane.png" alt="DOTA" id="header-img">
                <h1>Excellence in Aviation Services</h1>
            </div>
        </div>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div> <!-- Hamburger icon -->
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="Announcement.php">Announcement</a></li>
                <li><a class="nav-link" href="index.php#account-settings">Account Settings</a></li>
                <li><a class="nav-link" href="calendar.php">Calendar</a></li>
                <li><a class="nav-link" href="landing.php">Homepage</a></li>
            </ul>
            <a href="logout.php"><button id="signin-button">Sign Out →</button></a>
            <br>
        </nav>
    </header>

    <script>
        // JavaScript to toggle menu
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('nav-bar').classList.toggle('active');
        });
    </script>

    <main class="fade-in">
        <br>
        <div id="calendar-container">
            <iframe src="https://calendar.google.com/calendar/embed?src=ojtadm1%40gmail.com&ctz=Asia%2FManila" style="border:solid 1px #777" width="800" height="500" frameborder="0" scrolling="no">
            </iframe>
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