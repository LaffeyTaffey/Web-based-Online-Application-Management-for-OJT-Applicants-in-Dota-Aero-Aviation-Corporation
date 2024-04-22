<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
    <link rel="stylesheet" href="public/css/landing.css" type="text/css">
    <link rel="stylesheet" href="public/css/index.css" type="text/css">
    <link rel="stylesheet" href="public/css/announcements.css" type="text/css">
    <script src="public/js/landing.js"></script>
    <script src="public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <title>Announcements</title>
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

        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="landing.html#ojt-adm"> OJT Enrollment</a></li>
                <li><a class="nav-link" href="my-schedule.html">My Schedule</a></li>
                <li><a class="nav-link" href="#index">Personal Information</a></li> <!--subject to change-->
                <li><a class="nav-link" href="calendar.html">Calendar</a></li>
                <li><a class="nav-link" href="landing.html">Homepage</a></li>
            </ul>
            <a href="login.html"><button id="signin-button">Sign In →</button></a>
        </nav>
    </header>
    <main>
        <br><br><br><br><br><br>
        <h1 style="color: #ffff">Announcements Board</h1>
        <div class="announcement-container">
            <div class="announcement" id="announcement1">
                <h2>🎉 Big News!</h2>
                <p>Join us for an exciting event happening next week! You won't want to miss it!</p>
                <div class="announcement-info" id="announcement-info1">
                    <p>Date: April 20, 2024</p>
                    <p>Time: 10:00 AM</p>
                    <p>Editor: Admin Cecilia Pineda</p>
                </div>
            </div>
    
            <div class="announcement" id="announcement2">
                <h2>🚀 Product Launch!</h2>
                <p>Our newest product is launching soon! Get ready to experience innovation like never before!</p>
                <div class="announcement-info" id="announcement-info2">
                    <p>Date: April 21, 2024</p>
                    <p>Time: 2:00 PM</p>
                    <p>Editor: Admin Levi Rodelas</p>
                </div>
            </div>
    
            <div class="announcement" id="announcement3">
                <h2>🔔 Important Update!</h2>
                <p>We have an important announcement to share regarding upcoming changes. Stay tuned for details!</p>
                <div class="announcement-info" id="announcement-info3">
                    <p>Date: April 22, 2024</p>
                    <p>Time: 4:00 PM</p>
                    <p>Editor: Admin Marc Sayago</p>
                </div>
            </div>
        </div>

    </main>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="whitetext">Made With: <strong>JQuery</strong></p>
                    <p class="whitetext">Created by: <strong>Pineda Maria Cecilia || Rodelas Jr. Levi || Sayago Marc
                            David</strong></p>
                    <p class="whitetext">Students of MT-41 Universidad De Manila. </p>
                    <br>
                    <br>
                    <div class="social-icons">
                        <div class="person">
                            <a href="https://github.com/raicem-caelia" target="_blank"><img
                                    src="public/assets/img/github.png" alt="GitHub" class="logo"></a>
                            <a href="https://www.facebook.com/Raicem.Caelia.79" target="_blank"><img
                                    src="public/assets/img/fb.png" alt="Facebook" class="logo"></a>
                        </div>
                        <div class="person">
                            <a href="https://github.com/LaffeyTaffey" target="_blank"><img
                                    src="public/assets/img/github.png" alt="GitHub" class="logo"></a>
                            <a href="https://www.facebook.com/Danke.Danke11/" target="_blank"><img
                                    src="public/assets/img/fb.png" alt="Facebook" class="logo"></a>
                        </div>
                        <div class="person">
                            <a href="https://github.com/paslangbenteuno" target="_blank"><img
                                    src="public/assets/img/github.png" alt="GitHub" class="logo"></a>
                            <a href="https://www.facebook.com/Naixs" target="_blank"><img src="public/assets/img/fb.png"
                                    alt="Facebook" class="logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
    <script src="public/js/landing.js"></script>
</body>

</html>