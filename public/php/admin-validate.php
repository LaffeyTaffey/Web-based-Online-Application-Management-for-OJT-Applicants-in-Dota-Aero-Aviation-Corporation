<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <link rel="stylesheet" href="public/css/admin.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />
    <link rel="stylesheet" href="public/css/ojt-adm-results.css" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="public/js/ojt-adm-results.js"></script>
    <title>Admin Panel</title>
</head>

<body>
    
    <main class="container">
        <div class="menu">
            <div class="avatar">
                <img class="thumb" src="https://avatars.githubusercontent.com/u/34617016?v=4" width="60" />
                <span class="name">Dito lagay name</span>
            </div>
            <nav class="primary">
                <a href="admin.html#admdash" class="menu-item active">
                    <span class="iconoir-report-columns"></span>
                    <span class="desc">Dashboard</span>
                </a>
                <a href="admin-ojt-results.html" class="menu-item">
                    <span class="iconoir-table"></span>
                    <span class="desc">Check OJT Ref#</span>
                </a>
                <a href="admin-print.html" class="menu-item">
                    <span class="iconoir-bag"></span>
                    <span class="desc">Print Permit</span>
                </a>
                <a href="admin-validate.html" class="menu-item">
                    <span class="iconoir-user"></span>
                    <span class="desc">Validate</span>
                </a>
                <a href="admin-profile-settings.html" class="menu-item">
                    <span class="iconoir-leaderboard"></span>
                    <span class="desc">Profile Settings</span>
                </a>
                <a href="http://localhost/phpmyadmin/" class="menu-item">
                    <span class="iconoir-settings"></span>
                    <span class="desc">Manage Database</span>
                </a>
            </nav>
            <span class="expander iconoir-arrow-right"></span>
        </div>
        <div class="topbar">
            <h1 class="current">Print Image Results</h1>
            <span class="search">
                <label><span class="iconoir-search"></span></label>
                <input class="bar" type="text" placeholder="Search Ref# OJT" /> <!--must show the ojt applicants-->
            </span>
            <nav>
                <a href="landing.html" class="menu-item">Homepage</a>
                <a href="landing.html#ojt-adm" class="menu-item">OJT Application</a>
                <a href="#" class="menu-item">Notifications</a>
                <a href="admin-login.html" class="menu-item">Logout</a> <!--database--> <!--Change href -sayago-->
            </nav>
        </div>
        <div class="dashboard">
            <div class="cardcolumn" style="text-align: center">
                <div class="card">
                    <h2>Validate the OJT applicant's acceptance/dissaproval for admission to DotA</h2>
                </div>
            </div>
        
            <style>
                .filled-up-information{
                    text-align: center;
                    margin-top: 300px;
                    margin-right: 300px;
                }
            </style>
            <div class="filled-up-information">
                <form action="" method="post">
                    <table>
                        <tr>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="fName"></td>
                            <td><input type="text" name="mName"></td>
                            <td><input type="text" name="lName"></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <th>Gender</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="address"></td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <th></th>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
     

        <div class="side">
            <div class="card weather">
                <img class="condition"
                    src="https://user-images.githubusercontent.com/30212452/203724734-5f748507-7ae4-49f9-89f8-7fce3112cd95.png" />
                <div class="content"></div>
                <div class="meta">
                    <span class="location">
                        <span class="iconoir-pin"></span>
                        Manila, PH
                    </span>
                    <div class="datetime">
                        <span class="iconoir-calendar"></span>
                        <span class="date">May 25, 2024</span>
                        <span class="time">5:01</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <header>Notes</header>
                <div class="content">
                    <ul>
                        <li>(15:30) results.html ojt applicants can type their reference number and search if accepted
                            or not,
                            if yes, appointment will pop up and they
                            can now log in to their portal) -me, and sayago will display results (img) </li>
                        <li>(18:00) Portal HREF nav -assigned sayago, check first if the user is logged, if its, go to
                            index.html dashboard and if not, go
                            to login page first</li>
                        <li>(19:30) index (student dashboard) -cecil</li>
                        <li>(22:00) my schedule.html (sayago ojt time and where timeschedule) or improve calendar</li>
                        <li>(23:30) announcement.html (javascript real time) -sayago and me (front end).</li>
                        <li>Admin Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <div class="video">
    <video src="https://user-images.githubusercontent.com/30212452/203724691-9e93bf50-df02-4034-9743-dfe32d18bf58.mp4" muted
        playsinline autoplay loop></video>
    </div>
</body>
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
<script src="public/js/admin.js"></script>
<script src="public/js/ojt-adm-results.js"></script>

</html>