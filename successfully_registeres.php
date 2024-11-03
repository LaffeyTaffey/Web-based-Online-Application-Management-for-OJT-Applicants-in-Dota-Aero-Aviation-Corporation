<?php
// Ensure the database connection is established
require('config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Query to fetch information
$query = "SELECT Email, ID, FirstName, MiddleName, LastName, BirthDate, Gender, Address_App, DateReg, Status, deficiency, remarks FROM ojtapplicants";
$result = mysqli_query($dbcon, $query);

$applicant_details = '';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $firstName = $row['FirstName'];
        $middleName = $row['MiddleName'];
        $lastName = $row['LastName'];
        $applicantID = $row['ID'];
        $gender = $row['Gender'];
        $birthDate = $row['BirthDate'];
        $applicantEmail = $row['Email'];
        $address = $row['Address_App'];
        $dateRegistered = $row['DateReg'];
        $status = $row['Status'];
        $deficiency = $row['deficiency'];
        $remarks = $row['remarks'];

        $applicant_details .= "
            <p><strong>Name:</strong> $firstName $middleName $lastName</p>
            <p><strong>Applicant ID:</strong> $applicantID</p>
            <p><strong>Reference Number:</strong> OJT24_$applicantID</p>
            <p><strong>Email:</strong> $applicantEmail</p>
            <p><strong>Gender:</strong> $gender</p>
            <p><strong>Birth Date:</strong> $birthDate</p>
            <p><strong>Address:</strong> $address</p>
            <p><strong>Date Registered:</strong> $dateRegistered</p>
            <p><strong>Status:</strong> $status</p>
            <p><strong>Deficiency:</strong> $deficiency</p>
            <p><strong>Remarks:</strong> $remarks</p>
            <hr>";
    }
}

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;
    $mail->Username = 'ojtadm1@gmail.com';
    $mail->Password = 'cmcz iwcy mazh rycn'; // Your app-specific password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    //Recipients
    $mail->setFrom('ojtadm1@gmail.com', 'OJT Admin');
    $mail->addAddress('ojtadm1@gmail.com'); // Send to this email

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New OJT Applicant received';
    $mail->Body = "<div style='font-family: Arial, sans-serif; background-color: #f0f0f0; padding: 20px;'>
                    <h2 style='color: #004b87; border-bottom: 2px solid #004b87; padding-bottom: 10px;'>OJT Applicant $firstName $middleName $lastName have been fetched on the tables and database</h2>
                    <p><a href='http://localhost/web/tables.php' style='display: inline-block; padding: 10px 20px; background-color: #004b87; color: #fff; text-decoration: none; border-radius: 5px;'>Edit in Tables</a></p>
                    <p><a href='http://localhost/phpmyadmin/index.php?route=/sql&db=account&table=ojtapplicants&pos=0' style='display: inline-block; padding: 10px 20px; background-color: #004b87; color: #fff; text-decoration: none; border-radius: 5px;'>Edit in phpMyAdmin</a></p>
                    </div>
                                <p><strong>Applicant ID:</strong> $applicantID</p>
                                <p><strong>Reference Number:</strong> OJT24_$applicantID</p>
                                
                                <hr>
                                <h3 style='color: #004b87;'>Applicant Details</h3>
                                <p><strong>Name:</strong> $firstName $middleName $lastName</p>
                                <p><strong>Gender:</strong> $gender</p>
                                <p><strong>Birth Date:</strong> $birthDate</p>
                                <p><strong>Email:</strong> $applicantEmail</p>
                                <p><strong>Address:</strong> $address</p>
                                <p><strong>Date Registered:</strong> $dateRegistered</p>
                                <p><strong>Status:</strong> $status</p>
                                <p><strong>Deficiency:</strong> $deficiency</p>
                                <p><strong>Remarks:</strong> $remarks</p>
                            </div>";
    $mail->send();
    echo "<br><br><br><br><br><div class='alert alert-success' role='alert'>Email sent successfully!</div>";
} catch (Exception $e) {
    echo "<br><br><br><br><div class='alert alert-danger' role='alert'>Email could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
    <!---CSS links-->
    <link rel="stylesheet" href="public/css/registration.css" type="text/css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <link rel="stylesheet" href="index2.css" type="text/css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.6/dist/bootstrap-table.min.css" <link rel="stylesheet" href="index2.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
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
            <div class="logo-container">
                <img src="public/assets/img/airplane.png" alt="DOTA" id="header-img">
                <h1>Excellence in Aviation Services</h1>
            </div>
        </div>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div> <!-- Hamburger icon -->
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="Announcement.php">Announcement</a></li>
                <li><a class="nav-link" href="ticket.php">Submit a Ticket</a></li>
                <li><a class="nav-link" href="ojt-adm-results.php">OJT Admission Results</a></li>
                <li><a class="nav-link" href="calendar.php">Calendar</a></li>
                <li><a class="nav-link" href="landing.php">Homepage</a></li>
            </ul>
            <a href="login.php"><button id="signin-button">Sign In →</button></a>
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
    </style>

    <main class="fade-in">
        <br><br><br><br>
        <div align="center" id="success">
            <div class="card text-center" style="width: 50%; margin: auto; height: auto;">
                <div class="text-center">
                    <img class="card-img-top" src="public/assets/img/check_animation.gif" id="success_animation" alt="Successfully Registered" style="width: 400px; height: auto;">
                </div>
                <?php
                // Assuming $applicantID is fetched from previous logic
                // Sanitize $applicantID
                $applicantID = mysqli_real_escape_string($dbcon, $applicantID);

                $query = "SELECT * FROM ojtapplicants WHERE ID = '$applicantID'";
                $result = mysqli_query($dbcon, $query);

                if ($result && $row = mysqli_fetch_assoc($result)) {
                    // Construct the path to the profile picture
                    $profilePicPath = !empty($row['Picture']) ? 'uploaded_documents/ID_' . $row['ID'] . '/' . $row['Picture'] : 'public/assets/img/team-2.jpg';
                } else {
                    // Default profile picture path if no picture found
                    $profilePicPath = 'public/assets/img/team-2.jpg';
                }
                ?>

                <div class="card-body">
                    <h5 class="card-title">Registration has been successfully completed!</h5>
                    <img class="card-img-top" src="<?= htmlspecialchars($profilePicPath) ?>" alt="Applicant Profile Picture" style="width: 200px; height: auto;">
                    <h5 class="card-title">
                        Your Applicant Information:
                        <span style="color: #90EE90;">Reference Number: OJT24_<?php echo htmlspecialchars($applicantID); ?></span>
                        <br>
                        <strong>ID:</strong> <?php echo htmlspecialchars($applicantID); ?>
                    </h5>
                    <div style=" margin-bottom: 10px;">

                        <br>
                        <!-- Reduced margin-left for Name -->
                        <p style="color: black; margin-left: 50px;"><strong>Name:</strong> <?php echo htmlspecialchars("$firstName $middleName $lastName"); ?></p>
                        <p style="color: black; margin-left: 50px;"><strong>Email:</strong> <?php echo htmlspecialchars($applicantEmail); ?></p>

                        <p style="color: black; margin-left: 50px;"><strong>Address:</strong> <?php echo htmlspecialchars($address); ?></p>
                        <p style="color: black; margin-left: 50px;"><strong>Date Registered:</strong> <?php echo htmlspecialchars($dateRegistered); ?></p>
                        <br>
                        <!-- Moved Status below Date Registered -->
                        <p style="color: black; margin-left: 50px;"><strong>Status:</strong> <?php echo htmlspecialchars($status); ?><span class="pending-status" style="color: #FFA500">Pending</span></p>
                        <p style="color: black; margin-left: 50px;">An OJT Administrator has been notified about your application.</p>
                        <br>
                        <p style="color: black; margin-left: 25px;">Please wait for an email with details about your interview date and application status.</p>
                        <br><a href="landing.php" class="btn btn-primary">Back to Homepage</a>
                    </div>

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