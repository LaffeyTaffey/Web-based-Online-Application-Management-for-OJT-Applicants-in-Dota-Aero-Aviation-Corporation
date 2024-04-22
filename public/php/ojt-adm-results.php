<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <link rel="stylesheet" href="public/css/login.css" type="text/css">
    <link rel="stylesheet" href="public/css/ojt-adm-results.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Results</title>
</head>

<body>
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
                <li><a class="nav-link" href="landing.html#ojt-adm">OJT Enrollment</a></li>
                <li><a class="nav-link" href="index.html#announcement">Announcement</a></li>
                <li><a class="nav-link" href="landing.html">Homepage</a></li>
            </ul>
        </nav>
    </header>
<br><br>
    <!-- search -->
    <div class="container-search">
        <h1>Search your OJT Admission Results by clicking the Search button below:</h1>
    </div>
    <br><br><br><br>
<div class="search-wrapper">
    <div class="input-holder">
        <input type="text" class="search-input" placeholder="Search Ref# for OJT admission results. Ex: 001" />
        <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
    </div>
    <span class="close" onclick="searchToggle(this, event);"></span>
</div>
<p><center>after searching their ref#,display results here image or text -assigned sayago</center></p>

</body>
<footer class="footer">
    <div class="container-footer">
        <div class="row-footer">
            <div class="col text-center">
                <p class="whitetext">Made With: <strong>JQuery</strong></p>
                <p class="whitetext">Created by: <strong>Pineda Maria Cecilia || Rodelas Jr. Levi || Sayago Marc
                        David</strong></p>
                <p class="whitetext">Students of MT-41 Universidad De Manila.</p>
                <hr class="footer-line">
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
<script src="public/js/ojt-requirements.js"></script>
<script src="public/js/ojt-adm-results.js"></script>

</html>