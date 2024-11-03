<?php
require('config.php'); // Ensure the database connection is established
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start(); // Start the session

    // Check if $_SESSION['ID'] is set
    if (!isset($_SESSION['reference_number'])) {
        die("Session ID not set");
    }

    $requestMessage = $_POST['requestMessage'];

    // Fetch applicant details
    $reference_number = $_SESSION['reference_number'];
$last_digit = substr($reference_number, -1);
$query = "SELECT Email, ID, FirstName, MiddleName, LastName, BirthDate, Gender, Address_App, DateReg, Status, deficiency, remarks FROM ojtapplicants WHERE RIGHT(ID, 1) = '$last_digit'";
    $result = mysqli_query($dbcon, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $applicantEmail = $row['Email'];
        $firstName = $row['FirstName'];
        $middleName = $row['MiddleName'];
        $lastName = $row['LastName'];
        $applicantID = $row['ID'];
        $birthDate = $row['BirthDate'];
        $gender = $row['Gender'];
        $address = $row['Address_App'];
        $dateRegistered = $row['DateReg'];
        $status = $row['Status'];
        $deficiency = $row['deficiency'];
        $remarks = $row['remarks'];

        // Email configuration
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
            $mail->setFrom($applicantEmail, "$firstName $middleName $lastName");
            $mail->addAddress('ojtadm1@gmail.com'); // Send to this email

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Request for Info Edit';
            $mail->Body = "<div style='font-family: Arial, sans-serif; background-color: #f0f0f0; padding: 20px;'>
                                <h2 style='color: #004b87; border-bottom: 2px solid #004b87; padding-bottom: 10px;'>Request for Info Edit from $firstName $middleName $lastName</h2>
                                <p><strong>Applicant ID:</strong> $applicantID</p>
                                <p><strong>Reference Number:</strong> OJT24_$applicantID</p>
                                <p><strong>Request Message:</strong> $requestMessage</p>
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

            // Success message with Bootstrap styling
?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Message Sent</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            </head>

            <body>
                <div class="container mt-4">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Message has been sent successfully!</h4>
                        <p>Your request for info edit has been sent. Thank you!</p>
                        <hr>
                        <a href="index.php" class="btn btn-primary">Back to Index</a>
                    </div>
                </div>
            </body>

            </html>
        <?php
        } catch (Exception $e) {
            // Error message with Bootstrap styling
        ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Error Sending Message</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            </head>

            <body>
                <div class="container mt-4">
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Error sending message!</h4>
                        <p>Message could not be sent. Mailer Error: <?php echo $mail->ErrorInfo; ?></p>
                        <hr>
                        <p>Please try again later.</p>
                        <a href="index.php" class="btn btn-primary">Back to Index</a>
                    </div>
                </div>
            </body>

            </html>
        <?php
        }
    } else {
        // Applicant details not found message with Bootstrap styling
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Applicant Details Not Found</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>

        <body>
            <div class="container mt-4">
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Applicant details not found!</h4>
                    <p>The applicant details could not be found in the database.</p>
                    <hr>
                    <p>Please contact support for assistance.</p>
                    <a href="index.php" class="btn btn-primary">Back to Index</a>
                </div>
            </div>
        </body>

        </html>
<?php
    }
}
?>