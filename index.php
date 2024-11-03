<?php
session_start();
<<<<<<< HEAD
$conn = mysqli_connect("localhost", "root", "", "account");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the user is logged in
if (!isset($_SESSION['reference_number'])) {
=======
$conn= mysqli_connect("localhost", "root", "", "account");
// Check if the user is logged in
if (!isset($_SESSION['std_id'])) {
>>>>>>> 3a85395913b225b74fde7c005ffb7ef892a00ca6
    // If not logged in, redirect to landing page
    header("Location: landing.php");
    exit;
}

<<<<<<< HEAD
// Check if the user is not an admin
if ($_SESSION['user_type'] !== '') {
    // If usertype is not admin, redirect to landing page
    header("Location: landing.php");
    exit;
}

// Fetch applicant information
$reference_number = $_SESSION['reference_number'];
preg_match('/OJT24_(\d+)/', $reference_number, $matches);
$last_two_digits = isset($matches[1]) ? $matches[1] : '';

$query = "SELECT * FROM ojtapplicants WHERE RIGHT(ID, 2) = '$last_two_digits'";
$result = mysqli_query($conn, $query);
$applicant = mysqli_fetch_assoc($result);

// Track applicant progress
$applicationSubmissionDate = $applicant['DateReg']; // Example: Date application was submitted

// Fetch documents submission status
$documentsSubmitted = [
    'NBI' => $applicant['NBI'] ? true : false,
    'MOA' => $applicant['MOA'] ? true : false,
    'Endorsement' => $applicant['Endorsement'] ? true : false
];

// Calculate total documents and submitted documents
$totalDocuments = count($documentsSubmitted);
$submittedDocuments = array_sum($documentsSubmitted);

// Calculate training progress based on real data
$totalRequiredHours = isset($applicant['TotalNo.']) ? $applicant['TotalNo.'] : 0;

$totalHoursWorkedQuery = "SELECT SUM(hours_worked) AS total_hours_worked FROM training_hours WHERE applicant_id = '$last_two_digits'";
$totalHoursWorkedResult = mysqli_query($conn, $totalHoursWorkedQuery);
$totalHoursWorkedRow = mysqli_fetch_assoc($totalHoursWorkedResult);
$totalHoursWorked = $totalHoursWorkedRow['total_hours_worked'] ?? 0;

$trainingProgress = ($totalHoursWorked / $totalRequiredHours) * 100;
$documentProgress = ($submittedDocuments / $totalDocuments) * 100;
$overallProgress = ($trainingProgress + $documentProgress) / 2;
$completionStatus = $overallProgress >= 100 ? 'Completed' : 'Incomplete';

// Calculate remaining hours
$remainingHours = max(0, $totalRequiredHours - $totalHoursWorked);

// Calculate training progress
$trainingProgress = $totalRequiredHours > 0 ? ($totalHoursWorked / $totalRequiredHours) * 100 : 0;

// Format training progress and remaining hours to two decimal places
$formattedTrainingProgress = number_format($trainingProgress, 2);
$formattedRemainingHours = number_format($remainingHours, 2);

// Format overall progress to two decimal places
$formattedOverallProgress = number_format($overallProgress, 2);

// Example function to add communication logs
function addCommunicationLog($logMessage)
{
    global $communicationLog;
    $timestamp = date('Y-m-d H:i:s');
    $communicationLog[] = [
        'timestamp' => $timestamp,
        'message' => $logMessage
    ];
}

// Add initial communication log
addCommunicationLog("Initial application submitted on $applicationSubmissionDate.");

mysqli_close($conn); // Close the database connection
=======
// If logged in, continue to protected page
echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
>>>>>>> 3a85395913b225b74fde7c005ffb7ef892a00ca6
?>
<!DOCTYPE html>
<html lang="en">
<!--OJT Portal-->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
    <link rel="stylesheet" href="index2.css" type="text/css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="public/js/landing.js"></script>
    <script src="public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <title>OJT Portal</title>


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
    <script>
        function editInfo() {
            const infoFields = document.querySelectorAll('#info_fields p');
            infoFields.forEach(field => {
                const value = field.innerText.split(': ')[1];
                field.innerHTML = `<strong>${field.innerText.split(': ')[0]}:</strong> <input type="text" value="${value}">`;
            });
            document.getElementById('save_button').disabled = false;
        }

        function saveInfo() {
            const infoFields = document.querySelectorAll('#info_fields p');
            infoFields.forEach(field => {
                const input = field.querySelector('input');
                const value = input.value;
                field.innerHTML = `<strong>${field.innerText.split(': ')[0]}:</strong> ${value}`;
            });
            document.getElementById('save_button').disabled = true;
            document.getElementById('success_notification').style.display = 'block';
            setTimeout(() => {
                document.getElementById('success_notification').style.display = 'none';
            }, 2000);
        }
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
            color: rgb(220, 220, 220);
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
    </style>
    <br><br><br><br><br>
    <main class="container fade-in animate__animated animate__fadeIn">
        <div class="container-dashboard" id="account-settings">
            <div class="left-side">
                <div class="applicant-info">
                    <h2>Applicant Information</h2>
                    <?php
                    require('config.php'); // Connect to the database

                    // Assuming the applicant's ID is stored in the session
                    $reference_number = $_SESSION['reference_number'];
                    // Extract numeric part (X) from reference_number like OJT24_X
                    preg_match('/OJT24_(\d+)/', $reference_number, $matches);
                    $last_two_digits = isset($matches[1]) ? $matches[1] : '';

                    // Query to fetch information with condition on the last two digits
                    $query = "SELECT * FROM ojtapplicants WHERE RIGHT(ID, 2) = '$last_two_digits'";
                    $result = mysqli_query($dbcon, $query);

                    if ($row = mysqli_fetch_assoc($result)) {
                        // Construct the path to the profile picture
                        $profilePicPath = !empty($row['Picture']) ? 'uploaded_documents/ID_' . $row['ID'] . '/' . $row['Picture'] : '../assets/img/team-2.jpg';

                        echo '<div class="text-center">';
                        echo '<img src="' . $profilePicPath . '" class="avatar avatar-lg border-radius-lg mb-3" alt="Profile Picture">';
                        // Display welcome message
                        echo '<p class="text-muted">Welcome, ID: OJT24_' . $row['ID'] . '! You are logged in.</p>';
                        echo '</div>';
                    ?>

                        <a href="user_request_info.php" <button class="button" onclick="editInfo()">Request Edit Info</button> </a>
                        <br><br>
                        <div id="info_fields">
                            <?php
                            foreach ($row as $key => $value) {
                                if ($key != 'Picture' && $key != 'ID') {
                                    echo "<p><strong>" . ucfirst(str_replace('_', ' ', $key)) . ":</strong> " . htmlspecialchars($value) . "</p>";
                                }
                            }
                            ?>
                        </div>
                    <?php } else { ?>
                        <p>No applicant found with ID = <?php echo $applicant_id ?></p>
                    <?php } ?>
                </div>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Data for chart
                        const data = {
                            labels: ['Training Progress', 'NBI', 'MOA', 'Endorsement', 'Overall Progress'],
                            datasets: [{
                                label: 'Progress',
                                data: [
                                    <?php echo $trainingProgress; ?>,
                                    <?php echo $documentsSubmitted['NBI'] ? 100 : 0; ?>,
                                    <?php echo $documentsSubmitted['MOA'] ? 100 : 0; ?>,
                                    <?php echo $documentsSubmitted['Endorsement'] ? 100 : 0; ?>,
                                    <?php echo $overallProgress; ?>
                                ],
                                backgroundColor: [
                                    'rgba(75, 192, 192, 0.5)', // Training Progress background color
                                    'rgba(54, 162, 235, 0.5)', // NBI background color
                                    'rgba(255, 206, 86, 0.5)', // MOA background color
                                    'rgba(255, 99, 132, 0.5)', // Endorsement background color
                                    'rgba(153, 102, 255, 0.5)' // Overall Progress background color
                                ],
                                borderColor: [
                                    'rgba(75, 192, 192, 1)', // Training Progress border color
                                    'rgba(54, 162, 235, 1)', // NBI border color
                                    'rgba(255, 206, 86, 1)', // MOA border color
                                    'rgba(255, 99, 132, 1)', // Endorsement border color
                                    'rgba(153, 102, 255, 1)' // Overall Progress border color
                                ],
                                borderWidth: 1
                            }]
                        };

                        // Chart configuration
                        const config = {
                            type: 'bar',
                            data: data,
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        max: 100 // Adjust maximum scale if needed
                                    }
                                }
                            }
                        };

                        // Create the chart
                        var myChart = new Chart(
                            document.getElementById('progressChart'),
                            config
                        );
                    });
                </script>

                <div class="applicant-progress">
                    <h2>Applicant Progress</h2>
                    <canvas id="progressChart" width="400" height="200"></canvas>
                    <p id="progressDetails">Training Hours Completed: <?php echo $formattedTrainingProgress; ?><br>
                        NBI: <?php echo $documentsSubmitted['NBI'] ? 'Submitted' : 'Not Submitted'; ?><br>
                        MOA: <?php echo $documentsSubmitted['MOA'] ? 'Submitted' : 'Not Submitted'; ?><br>
                        Endorsement: <?php echo $documentsSubmitted['Endorsement'] ? 'Submitted' : 'Not Submitted'; ?><br>
                        Overall Progress: <?php echo $formattedOverallProgress; ?></p>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        require('hourcomp.php');
                    }
                    ?>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "account");

                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    if (!isset($_SESSION['reference_number'])) {
                        header("Location: landing.php");
                        exit;
                    }

                    // Fetch applicant information based on session reference number
                    $reference_number = $_SESSION['reference_number'];
                    preg_match('/OJT24_(\d+)/', $reference_number, $matches);
                    $last_two_digits = isset($matches[1]) ? $matches[1] : '';

                    $query = "SELECT * FROM ojtapplicants WHERE RIGHT(ID, 2) = '$last_two_digits'";
                    $result = mysqli_query($conn, $query);
                    $applicant = mysqli_fetch_assoc($result);

                    // Initialize variables to avoid undefined variable warnings
                    $totalRequiredHours = 0;
                    $totalHoursWorked = 0;
                    $remainingHours = 0;

                    if ($applicant) {
                        $totalRequiredHours = isset($applicant['TotalNo.']) ? $applicant['TotalNo.'] : 0;

                        // Calculate total hours worked
                        $totalHoursWorkedQuery = "SELECT SUM(hours_worked) AS total_hours_worked FROM training_hours WHERE applicant_id = '$last_two_digits'";
                        $totalHoursWorkedResult = mysqli_query($conn, $totalHoursWorkedQuery);
                        $totalHoursWorkedRow = mysqli_fetch_assoc($totalHoursWorkedResult);
                        $totalHoursWorked = $totalHoursWorkedRow['total_hours_worked'] ?? 0;

                        // Fetch total required hours (assuming it's from the applicant information)
                        $totalRequiredHours = isset($applicant['TotalNo.']) ? $applicant['TotalNo.'] : 0;

                        // Calculate training progress
                        $trainingProgress = $totalRequiredHours > 0 ? ($totalHoursWorked / $totalRequiredHours) * 100 : 0;

                        // Calculate completion status based on training progress
                        $completionStatus = $trainingProgress >= 100 ? 'Completed' : 'Incomplete';
                    }


                    ?>
                    <style>
                        .custom-container-bg {
                            background-color: #E0E8F0;
                            /* Light greyish blue */
                            padding: 20px;
                            border-radius: 8px;
                        }
                    </style>
                    <div class="container mt-4 custom-container-bg">
                    <form method="post" action="hourcomp.php" id="hourForm">
        <div class="row">
            <div class="col-md-6">
                <label for="timeIn" class="form-label">Time In:</label>
                <input type="time" class="form-control" id="timeIn" name="timeIn" required>
            </div>
            <div class="col-md-6">
                <label for="timeOut" class="form-label">Time Out:</label>
                <input type="time" class="form-control" id="timeOut" name="timeOut" required>
            </div>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
                    </div>

                    <h2>Training Progress</h2>
                    <p>Total Required Hours: <?php echo $totalRequiredHours; ?></p>
                    <p>Total Hours Worked: <?php echo $totalHoursWorked; ?></p>
                    <p>Remaining Hours: <?php echo $formattedRemainingHours; ?></p>
                    <p>Training Progress: <?php echo $formattedTrainingProgress; ?>%</p>
                    <p>Completion Status: <?php echo $completionStatus; ?></p>

                </div>
            </div>



            <div class="right-side">
                <div class="ojt-info">
                    <h2>OJT Information</h2>
                    <?php
                    foreach (['University', 'SchoolAddress', 'DegreeProgram', 'YearLevel', 'Adviser', 'TotalNo.', 'Area_intern', 'StartDate', 'Finish_date', 'Status', 'deficiency', 'remarks'] as $field) {
                        echo "<p><strong>" . str_replace('_', ' ', $field) . ":</strong> " . htmlspecialchars($applicant[$field]) . "</p>";
                    }
                    ?>
                </div>

                <div class="calendar">
                    <h2>Calendar</h2>
                    <iframe src="https://calendar.google.com/calendar/embed?src=ojtadm1%40gmail.com&ctz=Asia%2FManila" style="border:solid 1px #777" width="500" height="500" frameborder="0" scrolling="no"></iframe>
                </div>

                <div class="weather">
                    <h2>Weather Today</h2>
                    <img class="condition img-fluid" src="https://www.yr.no/en/content/2-1701668/meteogram.svg" alt="Weather Condition">
                </div>

                <div class="announcement">
                    <h2>Announcements</h2>
                    <div class="announcement-container">
                        <?php
                        $query = "SELECT * FROM announcements ORDER BY date DESC";
                        $result = mysqli_query($conn, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="announcement">';
                                echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
                                echo '<p>' . htmlspecialchars($row['content']) . '</p>';
                                echo '<div class="announcement-info">';
                                echo '<p>Date: ' . htmlspecialchars($row['date']) . '</p>';
                                echo '<p>Time: ' . htmlspecialchars($row['time']) . '</p>';
                                echo '<p>Editor: ' . htmlspecialchars($row['editor']) . '</p>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo '<p>No announcements available.</p>';
                        }
                        mysqli_close($conn);
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- Footer Section -->
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('hourForm');
            const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format

            // Check if the form was submitted today
            if (localStorage.getItem('formSubmittedDate') === today) {
                form.querySelector('button[type="submit"]').disabled = true;
                form.querySelectorAll('input').forEach(input => input.disabled = true);
            }

            form.addEventListener('submit', function() {
                localStorage.setItem('formSubmittedDate', today); // Store the submission date
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="public/js/landing.js"></script>
    <script src="public/js/global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>

    </script>
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
    drift.load('e89d849i852c');
</script>
<!-- End of Async Drift Code -->

</html>