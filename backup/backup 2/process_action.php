<?php
require('config.php'); // Connect to the database
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Function to generate a random date starting from July 11th, 2024
function generateRandomInterviewDate()
{
    $startDate = strtotime('2024-07-11');
    $endDate = strtotime('2024-12-31');
    $randomTimestamp = mt_rand($startDate, $endDate);
    return date('F j, Y', $randomTimestamp);
}

// Function to generate random interview details
function generateRandomInterviewDetails()
{
    $types = ['In-person', 'Phone', 'Video call'];
    $locations = ['Office', 'Conference Room', 'Online'];
    $type = $types[array_rand($types)];
    $location = $locations[array_rand($locations)];
    return "Type: $type<br>Location: $location<br>Date: " . generateRandomInterviewDate();
}

// Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $action = $_POST['action'];
    $Status = '';
    $deficiency = '';
    $remarks = '';



    if ($action == 'approve') {
        $Status = 'approved';
        $deficiency = ''; // No deficiency if approve
        $textColor = 'green';
        $emailSubject = 'Application Approval Notification';

        // Fetch applicant details 
        $query = "SELECT Email, ID, FirstName, MiddleName, LastName FROM ojtapplicants WHERE ID=$id";
        $result = mysqli_query($dbcon, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            $applicantEmail = $row['Email'];
            $firstName = $row['FirstName'];
            $middleName = $row['MiddleName'];
            $lastName = $row['LastName'];
            $applicantID = $row['ID'];
            // Email body with reference_number and password
            $emailBody = "<div style='font-family: Arial, sans-serif;'>";
            $emailBody .= "<h2 style='color: #004b87;'>Congratulations, $firstName $middleName $lastName!</h2>";
            $emailBody .= "<p>Your application (ID: $applicantID) Reference Number: OJT24_$applicantID has been approved. Please find below the details:</p>";
            $emailBody .= "<ul>";
            $emailBody .= "<li><strong>Status:</strong> <span style='color: green;'>Approved</span></li>";
            $emailBody .= "<li><strong>Applicant Email:</strong> $applicantEmail</li>";
            $emailBody .= "<li><strong>Applicant ID:</strong> $applicantID</li>";
            $emailBody .= "<li><strong>Reference Number:</strong> <p>OJT24_$applicantID</p></li>";
            $emailBody .= "<li><strong>Password:</strong> <p>default</p></li>";
            $emailBody .= "<li><strong>Interview Details:</strong><br>" . generateRandomInterviewDetails() . "</li>";
            $emailBody .= "<li><strong>Interview:</strong> <a href='https://meet.google.com/pfe-xibt-mnp'>Join Google Meet</a></li>";
            $emailBody .= "</ul>";
            $emailBody .= "<p>We look forward to seeing you!</p>";
            $emailBody .= "</div>";

            // Email sending logic using PHPMailer
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;
                $mail->Username = 'ojtadm1@gmail.com';
                $mail->Password = 'cmcz iwcy mazh rycn'; // Your app-specific password
                $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587; // TCP port to connect to

                //Recipients
                $mail->setFrom('ojtadm1@gmail.com', 'OJT Administrator 1'); // Your email and name
                $mail->addAddress($applicantEmail); // Email address of the applicant fetched from database

                //Content
                $mail->isHTML(true); // Set email format to HTML
                $mail->Subject = $emailSubject;
                $mail->Body    = $emailBody;

                $mail->send();

                // Update the database with plain text password and other details
                $query = "UPDATE ojtapplicants SET Status='$Status', deficiency='$deficiency', remarks='$remarks' WHERE ID=$id";
                if (!mysqli_query($dbcon, $query)) {
                    $errorMessage = "Error updating record: " . mysqli_error($dbcon);
                }

                // Success message for the admin interface
                $successMessage = "<main class='fade-in'>
                    <br><br><br><br><br><br>
                    <div align='center' id='success'>
                        <div class='card' style='width: 18rem;'>
                            <img class='card-img-top' src='public/assets/img/check_animation.gif' id='success_animation' alt='Successfully Registered'>
                            <div class='card-body'>
                                <h5 class='card-title' style='color: $textColor;'>Success!</h5>
                                <p style='color: black; margin-left: 15px'>Record successfully updated to: <span style='color: $textColor;'>$Status</span>.</p>";
                if ($action == 'disapprove') {
                    $successMessage .= "<p style='color: black; margin-left: 15px'>Deficiency: <span style='color: $textColor;'>$deficiency</span></p>
                                       <p style='color: black; margin-left: 15px'>Remarks: <span style='color: $textColor;'>$remarks</span></p>";
                }
                $successMessage .= "<a href='tables.php' class='btn btn-primary'>Back to Admin Tables</a>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                </main>";
            } catch (Exception $e) {
                $errorMessage = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
                error_log($errorMessage);
            }
        } else {
            $errorMessage = "Error fetching applicant's details from the database.";
        }
    } elseif ($action == 'disapprove') {
        $Status = 'disapproved';
        $deficiency = $_POST['deficiency']; // Get deficiency from POST data
        $remarks = $_POST['remarks']; // Get remarks from POST data
        $textColor = 'red';
        $emailSubject = 'Application Rejection Notification';
        $emailBody = '<p style="font-size: 18px;">We regret to inform you that your application has been disapproved.</p>';
        $emailBody .= '<p style="font-size: 18px;">Reasons for rejection:</p>';
        $emailBody .= '<ul>';
        $emailBody .= "<li>Deficiency: <strong style='color: red;'>$deficiency</strong></li>";
        $emailBody .= "<li>Remarks: <strong style='color: red;'>$remarks</strong></li>";
        $emailBody .= '</ul>';
        $emailBody .= '<p style="font-size: 18px;">Thank you for your interest.</p>';

        // Update the database with disapproval details
        $query = "UPDATE ojtapplicants SET Status='$Status', deficiency='$deficiency', remarks='$remarks' WHERE ID=$id";
        if (!mysqli_query($dbcon, $query)) {
            $errorMessage = "Error updating record: " . mysqli_error($dbcon);
        }

        // Fetch applicant's email for sending rejection notification
        $query = "SELECT Email FROM ojtapplicants WHERE ID=$id";
        $result = mysqli_query($dbcon, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            $applicantEmail = $row['Email'];

            // Email sending logic using PHPMailer
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;
                $mail->Username = 'ojtadm1@gmail.com';
                $mail->Password = 'cmcz iwcy mazh rycn'; // Your app-specific password
                $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587; // TCP port to connect to

                //Recipients
                $mail->setFrom('ojtadm1@gmail.com', 'OJT Administrator 1'); // Your email and name
                $mail->addAddress($applicantEmail); // Email address of the applicant fetched from database

                //Content
                $mail->isHTML(true); // Set email format to HTML
                $mail->Subject = $emailSubject;
                $mail->Body    = $emailBody;

                $mail->send();

                // Success message for the admin interface
                $successMessage = "<main class='fade-in'>
                    <br><br><br><br><br><br>
                    <div align='center' id='success'>
                        <div class='card' style='width: 18rem;'>
                            <img class='card-img-top' src='public/assets/img/check_animation.gif' id='success_animation' alt='Successfully Registered'>
                            <div class='card-body'>
                                <h5 class='card-title' style='color: $textColor;'>Success!</h5>
                                <p style='color: black; margin-left: 15px'>Record successfully updated to: <span style='color: $textColor;'>$Status</span>.</p>";
                if ($action == 'disapprove') {
                    $successMessage .= "<p style='color: black; margin-left: 15px'>Deficiency: <span style='color: $textColor;'>$deficiency</span></p>
                                       <p style='color: black; margin-left: 15px'>Remarks: <span style='color: $textColor;'>$remarks</span></p>";
                }
                $successMessage .= "<a href='tables.php' class='btn btn-primary'>Back to Admin Tables</a>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                </main>";
            } catch (Exception $e) {
                $errorMessage = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
                error_log($errorMessage);
            }
        } else {
            $errorMessage = "Error fetching applicant's email from the database.";
        }
    }

    // If any error message is set, display it in a popup alert
    if (!empty($errorMessage)) {
        echo "<script>alert('$errorMessage');</script>";
    }

    // If success message is set, display it
    if (!empty($successMessage)) {
        echo $successMessage;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
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
    <style>
        body {
            background-color: #ffffff;
        }
    </style>
    
    <!-- Add Bootstrap JS and dependencies at the end of the body -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.6/dist/bootstrap-table.min.js"></script>
</body>

</html>