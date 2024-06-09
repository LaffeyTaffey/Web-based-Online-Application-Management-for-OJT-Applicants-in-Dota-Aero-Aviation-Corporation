<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <link rel="stylesheet" href="public/css/login.css" type="text/css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <link rel="stylesheet" href="public/css/landing.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>ADMIN Log in</title>
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
                <li class="dropdown">
                    <a href="#" class="nav-link">Admissions <span class="arrow-down-icon">&#9660;</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="landing.html#col-adm">College Admission</a></li>
                        <li><a href="landing.html#ojt-adm">OJT Admission</a></li>
                        <li><a href="ojt-adm-results.html">OJT Admission Results</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="index.html#announcement">Announcement</a></li>
                <li><a class="nav-link" href="landing.html">Homepage</a></li>
                <li><a class="nav-link" href="landing.html#about">About us</a></li>
            </ul>
        </nav>
    </header>
    <main class="fade-in">
    <div class="box">
        <br>
        <div class="box-form">
            <div class="box-login-tab"></div>
            <div class="box-login-title">
                <div class="i i-login"></div>
                <h2>ADMIN LOGIN</h2>
            </div>
            <div class="box-login">
                <div class="fieldset-body" id="login_form">
                    <button onclick="openLoginInfo();" class="b b-form i i-more" title="Information"></button>
                    <p class="field">
                        <label for="user">ADMIN REFERENCE NUMBER</label>
                        <input type="text" id="user" name="user" title="Reference-Number" required
                            placeholder="Enter Ref# Ex: ADM1" />
                        <span id="valida" class="i i-warning"></span>
                    </p>
                    <p class="field">
                        <label for="pass">USER PASSWORD</label>
                        <input type="password" id="pass" name="pass" title="Password" required
                            placeholder="Enter your password" />
                        <span id="valida" class="i i-close"></span>
                    </p>

                    <label class="checkbox">
                        <input type="checkbox" value="TRUE" title="Keep me Signed in" /> Keep me Signed in
                    </label>

                    <a href="public/material-dashboard-master/index.html"><input type="submit" id="do_login" value="Login Now" title="Login" /></a>
                </div>
            </div>
        </div>
        <div class="box-info">
            <p><button onclick="closeLoginInfo();" class="b b-info i i-left" title="Back to Sign In"></button>
            <h3>Need Help?</h3>
            </p>
            <div class="line-wh"></div>
            <a href="forgot-password.html"><button onclick="" class="b-support" title="Forgot Password?"> Forgot
                    Password?</button></a>
        </div>
    </div>
    <br>
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
<script src="public/js/login.js"></script>
<script src="public/js/global.js"></script>
</html>