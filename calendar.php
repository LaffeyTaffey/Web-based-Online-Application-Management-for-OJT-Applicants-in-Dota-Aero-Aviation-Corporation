<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <link rel="stylesheet" href="index2.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
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
    <style>
        body {
            background-image: linear-gradient(to bottom, #0acffe 0%, #495aff 100%);
            background-size: cover;
            background-attachment: fixed;
            font-family: Arial,
                sans-serif;
            color: rgb(220, 220, 220);
        }

        h1,
        h2,
        h3 {
            color: rgb(200, 200, 200);
        }

        .container-dashboard {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .left-side,
        .right-side {
            flex: 0 0 48%;
            margin-bottom: 20px;
        }

        .applicant-info,
        .applicant-progress,
        .task-tracker,
        .calendar,
        .ojt-info,
        .weather,
        .announcement {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .button {
            background: #1885ed;
            border: none;
            color: #fff;
            padding: 10px 20px;
            margin: 10px 0;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background: #0f6bbf;
        }

        .success-notification {
            background: #28a745;
            padding: 10px;
            border-radius: 5px;
            display: none;
        }

        .animate__animated.animate__fadeIn {
            --animate-duration: 1s;
        }

        .applicant-progress {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            color: white;
        }

        #progressDetails {
            margin-top: 10px;
        }

        .container-fluid {
            padding: 20px;
            background: rgba(0, 0, 0, 0.6);
            /* optional */
            border: 1px solid #ddd;
            /* optional */
            border-radius: 10px;
            /* optional */
        }

        .row {
            margin: 0;
            /* remove default margin */
        }

        .col-md-8 {
            padding: 20px;
            /* add some padding to the column */
        }

        iframe {
            border: none;
            /* remove default border */
            border-radius: 10px;
            /* add some rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* add some subtle shadow */
        }
    </style>


    <main class="container fade-in animate__animated animate__fadeIn">
        <br><br><br><br><br><br>
        <h1 style="color: #ffff; text-align: center;">Calendar Board</h1>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <iframe src="https://calendar.google.com/calendar/embed?src=ojtadm1%40gmail.com&ctz=Asia%2FManila" style="border:solid 1px #777" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
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
    </main>
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


    <script src="public/js/landing.js"></script>
    <script src="public/js/global.js"></script>
</body>

</html>