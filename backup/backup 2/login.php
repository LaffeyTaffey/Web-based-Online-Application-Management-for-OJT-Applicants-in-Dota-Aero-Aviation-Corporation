<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "account");


if (isset($_POST['reference_number']) && isset($_POST['pass'])) {
    $reference_number = $_POST['reference_number'];
    $password = $_POST['pass'];

    // Query to check if the user exists
    $query = "SELECT * FROM std_acc WHERE reference_number = '$reference_number' AND password = '$password'";
    $result = mysqli_query($conn, $query);


    // Check if the user exists
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_type = $row['user_type'];

        $_SESSION['reference_number'] = $reference_number;
        $_SESSION['user_type'] = $user_type;
        // Check if the user_type is empty
        if (empty($user_type)) {
            // Redirect to index.php
            header("Location: index.php");
            exit;
        } elseif ($user_type == 'admin') {
            // Redirect to admin-login.php
            header("Location: admin-profile.php");
            exit;
        } else {
            // If the user_type is neither empty nor 'admin', display an error message
            echo "<script> alert('invalid user type.') </script>";
        }
    } else {
        // If the user does not exist, display an error message
        echo "<script> alert('Invalid username or password.') </script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <link rel="stylesheet" href="public/css/login.css" type="text/css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Log in</title>
    
</head>

<body>
    <header id="header">
        <div class="logo-container">
            <img src="public/assets/img/dota_logo.png" alt="DOTA" id="header-img">
            <h1>DOTA Aero Aviation Service, Inc.</h1>
            <div class="logo-container">
                <img src="public/assets/img/airplane.png" alt="DOTA" id="header-img">
                <h1>Excellence in Aviation Services</h1>
            </div>
        </div>
        <nav id="nav-bar">
            <ul>
                <li class="dropdown">
                    <a href="#" class="nav-link">Admissions <span class="arrow-down-icon">&#9660;</span></a>
                    <ul class="dropdown-menu">
                        <li><a href="landing.php#Credentials">Credentials</a></li>
                        <li><a href="landing.php#ojt-adm">OJT Admission</a></li>
                        <li><a href="ojt-adm-results.php">OJT Admission Results</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="index.php#announcement">Announcement</a></li>
                <li><a class="nav-link" href="landing.php">Homepage</a></li>
                <br>
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
            <br>
            <div class="box-form">
                <div class="box-login-tab"></div>
                <div class="box-login-title">
                    <div class="i i-login"></div>
                    <h2>LOGIN</h2>
                </div>
                <form form class="" action="" method="post" autocomplete="off">
                    <div class="box-login">
                        <div class="fieldset-body" id="login_form">
                            <button onclick="openLoginInfo();" class="b b-form i i-more" title="Information"></button>
                            <p class="field">
                                <label for="user">REFERENCE NUMBER</label>
                                <input type="text" id="user" name="reference_number" title="Reference-Number" required placeholder="Enter Ref# Ex: OJT24_6" />
                                <span id="valida" class="i i-warning"></span>
                            </p>
                            <p class="field">
                                <label for="pass">USER PASSWORD</label>
                                <input type="password" id="pass" name="pass" title="Password" required placeholder="Enter your password" />
                                <span id="valida" class="i i-close"></span>
                            </p>

                            <label class="checkbox">
                                <input type="checkbox" value="TRUE" title="Keep me Signed in" /> Keep me Signed in
                            </label>

                            <input type="submit" id="do_login" name="Submit" title="Login" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="box-info">
                <p><button onclick="closeLoginInfo();" class="b b-info i i-left" title="Back to Sign In"></button>
                <h3>Need Help?</h3>
                </p>
                <div class="line-wh"></div>
                <a href="ticket.php"><button onclick="" class="b-support" title="Contact Support"> Contact Support</button></a>
                <div class="line-wh"></div>
                <a href="landing.php#ojt-adm"><button onclick="" class="b-cta" title="Sign up now!"> REGISTER</button>
                </a>
            </div>
        </div>
        <br>
    </main>
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