<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <link rel="stylesheet" href="public/css/login.css" type="text/css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Forgot Password</title>
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
                        <li><a href="landing.php#col-adm">College Admission</a></li>
                        <li><a href="landing.php#ojt-adm">OJT Admission</a></li>
                        <li><a href="ojt-adm-results.php">OJT Admission Results</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="index.php#announcement">Announcement</a></li>
                <li><a class="nav-link" href="landing.php">Homepage</a></li>
            </ul>
        </nav>
    </header>
    <script>
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
        <div class="box">
            <div class="box-form">
                <div class="box-login-tab"></div>
                <div class="box-login-title">
                    <div class="i i-login"></div>
                    <h2>Forgot Password</h2>
                </div>
                <div class="box-login">
                    <div class="fieldset-body" id="login_form">
                        <button onclick="openLoginInfo();" class="b b-form i i-more" title="Information"></button>
                        <p class="field">
                            <label for="reference-number">REFERENCE NUMBER</label>
                            <input type="text" id="reference-number" name="user" title="Reference-Number" required placeholder="Enter Ref# Ex: 01012024_0002" />
                            <span id="valida" class="i i-warning"></span>
                        </p>

                        <p class="field">
                            <label for="pass">CURRENT PASSWORD</label>
                            <input type="password" id="pass" name="pass" title="Password" required placeholder="Enter your current password" />
                            <span id="valida" class="i i-close"></span>
                            <br><br><br>
                            <label for="pass">NEW PASSWORD</label>
                            <input type="password" id="newpass" name="pass" title="Password" required placeholder="Enter your new password" />
                            <span id="valida" class="i i-close"></span>
                            <br><br><br>
                            <label for="pass">CONFIRM PASSWORD</label>
                            <input type="password" id="confirmpass" name="pass" title="Password" required placeholder="Confirm your new password" />
                            <span id="valida" class="i i-close"></span>
                            <input type="submit" id="do_login" value="Save Changes" title="Save Changes" /> <!--user must be automatically logged out when saving changes to their password-->
                        </p>
                    </div>
                </div>
            </div>
            <div class="box-info">
                <p><button onclick="closeLoginInfo();" class="b b-info i i-left" title="Back to Sign In"></button>
                <h3 style="text-align: center">Already have an account? and an admin?</h3>
                </p>
                <div class="line-wh"></div>
                <a href="login.php"><button onclick="" class="b-cta" title="Back to the login page"> Back to Login Page</button>
                </a><br><br>
                <a href="admin-login.php"><button onclick="" class="b-cta" title="Back to the login page"> Admin login</button>
                </a>
            </div>
        </div>
    </main>
    <br>
</body>
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
<script src="public/js/login.js"></script>
<script src="public/js/global.js"></script>

</html>