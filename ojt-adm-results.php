<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <link rel="stylesheet" href="public/css/landing.css" type="text/css">
    <link rel="stylesheet" href="public/css/ojt-adm-results.css" type="text/css">
    <link rel="stylesheet" href="public/css/ojt-requirements.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <script src="public/js/menu-landing.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Results</title>
    <style>
        /* Style for the modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.6);
            animation: fadeIn 0.3s ease-out;
        }

        .modal-content {
            background-color: #fff;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            width: 80%;
            max-width: 600px;
            position: relative;
            animation: slideIn 0.3s ease-out;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .close {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close:hover,
        .close:focus {
            color: #333;
            text-decoration: none;
        }

        h2 {
            color: #333;
            margin-top: 0;
        }

        p {
            line-height: 1.6;
            margin: 10px 0;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .search-wrapper {
            position: absolute;
            transform: translate(-50%, -80%);
            margin-top: 10px;
            top: 50%;
            left: 50%;
        }
        
    </style>
    <script>
        // Function to show the modal
        function showModal() {
            document.getElementById("myModal").style.display = "flex";
        }

        // Function to hide the modal
        function hideModal() {
            document.getElementById("myModal").style.display = "none";
        }

        // Function to handle the form submission
        function handleSubmit(event) {
            event.preventDefault();
            var searchInput = document.querySelector('.search-input').value;
            if (searchInput) {
                window.location.href = window.location.pathname + '?search_input=' + encodeURIComponent(searchInput);
            }
        }

        function searchToggle(element, event) {
            event.preventDefault();
            var modal = document.getElementById("myModal");
            if (modal.style.display === "flex") {
                hideModal();
            } else {
                showModal();
            }
        }

        // Show the modal if there is a search input in the URL
        window.onload = function() {
            var urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('search_input')) {
                showModal();
            }
        }
    </script>
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
        <div class="menu-toggle" id="menu-toggle">&#9776;</div> <!-- Hamburger icon -->
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="landing.php#ojt-adm">OJT Admission</a></li>
                <li><a class="nav-link" href="Announcement.php">Announcement</a></li>
                <li><a class="nav-link" href="landing.php#about">About us</a></li>
                <li><a class="nav-link" href="landing.php#networks">Partnership Network</a></li>
                <li><a class="nav-link" href="landing.php">Homepage</a></li>
                <br>
            </ul>
        </nav>
    </header>

    <br><br><br><br><br>
    <!-- search -->
    <main class="fade-in">
        <form method="get" onsubmit="handleSubmit(event)">
            <div class="container-search">
                <h1>Search your OJT Admission Reference Number by clicking the Search button below:</h1>
            </div>
            <br><br><br><br>
            <div class="search-wrapper">
                <br>
                <div class="input-holder">
                    <input type="text" class="search-input" name="search_input" placeholder="Search Ref# for OJT admission. Ex: OJT24_4" required />
                    <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                </div>
                <span class="close" onclick="searchToggle(this, event);"></span>
            </div>
        </form>

        <?php
        // Configuration
        $db_host = 'localhost';
        $db_username = 'root';
        $db_password = '';
        $db_name = 'account';

        // Create connection
        $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get search input from form
        $reference_number = isset($_GET['search_input']) ? $_GET['search_input'] : '';

        // Initialize variables
        $searchResult = '';
        $found = false;

        if ($reference_number) {
            // Extract last character of $reference_number (assuming it's always a digit)
            // Extract numeric part (X) from reference_number like OJT24_X
            preg_match('/OJT24_(\d+)/', $reference_number, $matches);
            $last_two_digits = isset($matches[1]) ? $matches[1] : '';

            // Query to fetch information with condition on the last two digits
            $query = "SELECT * FROM ojtapplicants WHERE RIGHT(ID, 2) = '$last_two_digits'";


            // Execute query
            $result = $conn->query($query);

            // Check if result is not empty
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    $statusColor = $row["Status"] == 'approved' ? 'green' : ($row["Status"] == 'disapproved' ? 'red' : 'orange');
                    $searchResult .= "<p>Reference Number: OJT24_" . $row["ID"] . "</p>";
                    $searchResult .= "<p>Name: " . $row["FirstName"] . " " . $row["MiddleName"] . " " . $row["LastName"] . "</p>";
                    $searchResult .= "<p>Date Registered: " . $row["DateReg"] . "</p>";
                    $searchResult .= "<p>Status: " . ($row["Status"] == 'approved' ? "<span style='color: green;'>" . $row["Status"] . "</span>" : ($row["Status"] == 'disapproved' ? "<span style='color: red;'>" . $row["Status"] . "</span>" : "<span style='color: orange;'>Pending</span>")) . "</p>";
                    $searchResult .= "<p>Deficiency: <span style='color: $statusColor;'>" . $row["deficiency"] . "</span></p>";
                    $searchResult .= "<p>Remarks: <span style='color: $statusColor;'>" . $row["remarks"] . "</span></p>";
                    $found = true;
                }
            } else {
                $searchResult = "<p>No record found with this reference number</p>";
            }

            // Close connection
            $conn->close();
        }
        ?>


        <!-- The Modal -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="hideModal()">&times;</span>
                <h2>Search Result</h2>
                <?php
                if ($reference_number) {
                    if ($found) {
                        echo $searchResult;
                    } else {
                        echo "<p>No record found with this reference number</p>";
                    }
                }
                ?>
            </div>
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
    </main>
</body>
<!-- Start of Async Drift Code -->
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
<script src="public/js/ojt-requirements.js"></script>
<script src="public/js/ojt-adm-results.js"></script>
<script src="public/js/global.js"></script>
<script src="public/js/menu-landing.js"></script>

</html>