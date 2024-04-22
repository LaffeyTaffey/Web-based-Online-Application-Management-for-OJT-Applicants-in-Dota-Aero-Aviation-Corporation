<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
    <link rel="stylesheet" href="public/css/landing.css" type="text/css">
    <link rel="stylesheet" href="public/css/index.css" type="text/css">
    <script src="public/js/landing.js"></script>
    <script src="public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <title>Calendar</title>
</head>

<body background="public/assets/img/dark-bg2.png">
    <header id="header">
        <div class="logo-container">
            <img src="public/assets/img/dota_logo.png" alt="DOTA" id="header-img">
            <h1>DOTA</h1>
        </div>

        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="enrollment.html">Enrollment</a></li>
                <li><a class="nav-link" href="Announcement.html#announcement">Announcement</a></li>
                <li><a class="nav-link" href="#acad">My Schedule</a></li>
                <li><a class="nav-link" href="#ojt-adm">Personal Information</a></li>
                <li><a class="nav-link" href="#calendar">Calendar</a></li>
                <li><a class="nav-link" href="#about">Deficiency/Balance</a></li>
                <li><a class="nav-link" href="landing.html">Homepage</a></li>
            </ul>
        <a href="login.html"><button id="signin-button">Sign In →</button></a>
        </nav>
    </header>
    <main>
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
        
    </main>
    <br>
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
    <script src="public/js/landing.js"></script>
</body>

</html>