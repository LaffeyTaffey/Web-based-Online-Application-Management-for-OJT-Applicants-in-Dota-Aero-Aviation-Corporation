<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <link rel="stylesheet" href="public/css/landing.css" type="text/css">
    <link rel="stylesheet" href="public/css/ojt-adm-results.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
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
                <li><a class="nav-link" href="landing.html#ojt-adm">OJT Admission</a></li>
                <li><a class="nav-link" href="Announcement.html">Announcement</a></li>
                <li><a class="nav-link" href="landing.html#about">About us</a></li>
                <li><a class="nav-link" href="landing.html">Homepage</a></li>
                <br>
            </ul>
        </nav>
    </header>

<br><br><br><br><br>
    <!-- search -->
    <main class="fade-in">
    <div class="container-search">
        <h1>Search your OJT Admission Reference Number by clicking the Search button below:</h1>
    </div>
    <br><br><br><br>
<div class="search-wrapper">
    <br>
    <div class="input-holder">
        <input type="text" class="search-input" placeholder="Search Ref# for OJT admission. Ex: 001" />
        <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
    </div>
    <span class="close" onclick="searchToggle(this, event);"></span>
</div>

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
</body>
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
<script src="public/js/global.js"></script>
</html>