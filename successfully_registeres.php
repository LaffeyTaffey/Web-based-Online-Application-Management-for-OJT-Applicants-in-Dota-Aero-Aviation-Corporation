<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
    <!---CSS links-->
    <link rel="stylesheet" href="public/css/landing.css" type="text/css">
    <link rel="stylesheet" href="public/css/registration.css" type="text/css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.6/dist/bootstrap-table.min.css">
 
    <!--Javascript links-->
    <script src="public/js/landing.js"></script>
    <script src="public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    
    <title>OJT Registration</title>
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
        <div class="menu-toggle" id="menu-toggle">&#9776;</div> <!-- Hamburger icon -->
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="Announcement.html">Announcement</a></li>
                <li><a class="nav-link" href="ticket.html">Submit a Ticket</a></li>
                <li><a class="nav-link" href="ojt-adm-results.html">OJT Admission Results</a></li>
                <li><a class="nav-link" href="calendar.html">Calendar</a></li>
                <li><a class="nav-link" href="landing.html">Homepage</a></li>
            </ul>
            <a href="login.html"><button id="signin-button">Sign In →</button></a>
            <br>
        </nav>
    </header>

    <script>
        // JavaScript to toggle menu
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('nav-bar').classList.toggle('active');
        });
    </script>

    <main class="fade-in">
        <br><br><br><br><br><br><br><br> 
        <div align=center id="success">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="public/assets/img/check_animation.gif" id="success_animation "alt="Successfully Registered">
        <div class="card-body">
            <h5 class="card-title">Registration has been successfully completed!</h5>
            <p style="color: black; margin-left: 15px" >Please wait for an email with details about your interview date.</p>
            <a href="landing.html" class="btn btn-primary">Back to Homepage</a>
        </div>
        </div>
        </div>
        <br><br><br>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/landing.js"></script>

    <script src="public/js/global.js"></script>
</body>
<br><br><br>

</html>