<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <link rel="stylesheet" href="public/css/login.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>ADMIN Log in</title>
</head>

<body>
    <header id="header">
        <div class="logo-container">
            <img src="public/assets/img/dota_logo.png" alt="DOTA" id="header-img">
            <h1> PHILSCA DOTA Aero Aviation Service, Inc.</h1>
        </div>
        <div class="logo-container">
            <h1>UDM College of Arts and Science </h1>
            <img src="public/assets/img/academics_school_logos/UDMCAS.png" alt="PSCA" id="header-img">
        </div>

        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="index.html#announcement">Announcement</a></li>
                <li><a class="nav-link" href="landing.html">Homepage</a></li>
            </ul>
        </nav>
    </header>
    <div class="box">
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

                    <input type="submit" id="do_login" value="Login Now" title="Login" /> <!--must go to the admin.html dashboard-->
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
<script src="public/js/login.js"></script>

</html>