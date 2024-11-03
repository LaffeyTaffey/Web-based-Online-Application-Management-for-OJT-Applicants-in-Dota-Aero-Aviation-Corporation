<?php
// Include database configuration
include 'config.php';
session_start();
$conn = mysqli_connect("localhost", "root", "", "account"); // Connect to the correct database

// Check if the user is logged in
if (!isset($_SESSION['reference_number'])) {
    // If not logged in, redirect to landing page
    header("Location: landing.php");
    exit;
}
// Fetch applicant information


// Fetch applicant information based on selected ID
$applicant = null;
if (isset($_POST['applicant_id'])) {
    $applicant_id = $_POST['applicant_id'];
    $query = "SELECT * FROM ojtapplicants WHERE ID = '$applicant_id'";
    $result = mysqli_query($conn, $query);
    $applicant = mysqli_fetch_assoc($result);
}

// Update applicant information
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $applicant_id = $_POST['applicant_id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address_app = $_POST['address_app'];
    $gender = $_POST['gender'];
    $birth_date = $_POST['birth_date'];
    $birth_place = $_POST['birth_place'];
    $religion = $_POST['religion'];
    $phone_no = $_POST['phone_no'];
    $hobby_interest = $_POST['hobby_interest'];
    $university = $_POST['university'];
    $school_address = $_POST['school_address'];
    $degree_program = $_POST['degree_program'];
    $year_level = $_POST['year_level'];
    $adviser = $_POST['adviser'];
    $total_no = $_POST['total_no'];
    $area_intern = $_POST['area_intern'];
    $start_date = $_POST['start_date'];
    $finish_date = $_POST['finish_date'];

    $update_query = "UPDATE ojtapplicants SET 
        FirstName = '$first_name', 
        MiddleName = '$middle_name', 
        LastName = '$last_name', 
        Email = '$email', 
        Address_App = '$address_app', 
        Gender = '$gender', 
        BirthDate = '$birth_date', 
        BirthPlace = '$birth_place', 
        Religion = '$religion', 
        PhoneNo = '$phone_no', 
        Hobby_Interest = '$hobby_interest', 
        University = '$university', 
        SchoolAddress = '$school_address', 
        DegreeProgram = '$degree_program', 
        YearLevel = '$year_level', 
        Adviser = '$adviser', 
        `TotalNo.` = '$total_no', 
        Area_intern = '$area_intern', 
        StartDate = '$start_date', 
        Finish_date = '$finish_date' 
        WHERE ID = '$applicant_id'";
    mysqli_query($conn, $update_query);

    // Fetch the updated applicant information
    $query = "SELECT * FROM ojtapplicants WHERE ID = '$applicant_id'";
    $result = mysqli_query($conn, $query);
    $applicant = mysqli_fetch_assoc($result);

    // Show success message in modal
    echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                var successModal = new bootstrap.Modal(document.getElementById("successModal"), {});
                successModal.show();
            });
          </script>';
}

// Fetch all applicant IDs for the dropdown list
$id_query = "SELECT ID FROM ojtapplicants";
$id_result = mysqli_query($conn, $id_query);
$applicant_ids = [];
while ($row = mysqli_fetch_assoc($id_result)) {
    $applicant_ids[] = $row;
}

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Send approval or disapproval email using PHPMailer
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send_email'])) {
    $to_email = $_POST['to_email'];
    $email_type = $_POST['email_type'];

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;
    $mail->Username = 'ojtadm1@gmail.com';
    $mail->Password = 'cmcz iwcy mazh rycn'; // Your app-specific password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    $mail->setFrom('ojtadm1@gmail.com', 'OJT ADMINISTRATOR 1');
    $mail->addAddress($to_email);

    $mail->isHTML(true);
    if ($email_type == 'approved') {
        $mail->Subject = "Request User Information Approved";
        $mail->Body = "<p>Dear {$applicant['FirstName']} {$applicant['LastName']},</p>
                  <p>We are pleased to inform you that your request for an Edit in your user information has been approved.</p>
                  <p><strong>Details:</strong></p>
                  <ul>
                      <li><strong>Reference Number:</strong> <p>OJT24_ {$applicant['ID']} </p> </li>
                      <li><strong>First Name:</strong> {$applicant['FirstName']}</li>
                      <li><strong>Middle Name:</strong> {$applicant['MiddleName']}</li>
                      <li><strong>Last Name:</strong> {$applicant['LastName']}</li>
                      <li><strong>Address:</strong> {$applicant['Address_App']}</li>
                      <li><strong>Gender:</strong> {$applicant['Gender']}</li>
                      <li><strong>Birth Date:</strong> {$applicant['BirthDate']}</li>
                      <li><strong>Birth Place:</strong> {$applicant['BirthPlace']}</li>
                      <li><strong>Religion:</strong> {$applicant['Religion']}</li>
                      <li><strong>Email:</strong> {$applicant['Email']}</li>
                      <li><strong>Phone No:</strong> {$applicant['PhoneNo']}</li>
                      <li><strong>Hobby/Interest:</strong> {$applicant['Hobby_Interest']}</li>
                      <li><strong>University:</strong> {$applicant['University']}</li>
                      <li><strong>School Address:</strong> {$applicant['SchoolAddress']}</li>
                      <li><strong>Degree Program:</strong> {$applicant['DegreeProgram']}</li>
                      <li><strong>Year Level:</strong> {$applicant['YearLevel']}</li>
                      <li><strong>Adviser:</strong> {$applicant['Adviser']}</li>
                      <li><strong>Total No.:</strong> {$applicant['TotalNo.']}</li>
                      <li><strong>Area Intern:</strong> {$applicant['Area_intern']}</li>
                      <li><strong>Start Date:</strong> {$applicant['StartDate']}</li>
                      <li><strong>Finish Date:</strong> {$applicant['Finish_date']}</li>
                      <li><strong>NBI:</strong> {$applicant['NBI']}</li>
                      <li><strong>MOA:</strong> {$applicant['MOA']}</li>
                      <li><strong>Endorsement:</strong> {$applicant['Endorsement']}</li>
                      <li><strong>Date Registered:</strong> {$applicant['DateReg']}</li>
                      <li><strong>Status:</strong> {$applicant['Status']}</li>
                      <li><strong>Deficiency:</strong> {$applicant['deficiency']}</li>
                      <li><strong>Remarks:</strong> {$applicant['remarks']}</li>
                  </ul>
                  <p>Thank you.</p>";
    } else {
        $mail->Subject = "Request Edit for User Information Disapproved";
        $mail->Body    =
        "<p>Dear {$applicant['FirstName']} {$applicant['LastName']},</p>
                  <p>Your request for an Edit in your user information has been Disapproved.</p>
                  <p><strong>Remarks:</strong></p>
                  <p>{$_POST['email_message']}</p>
                  <p><strong>User & OJT Details</strong></p>
                  <ul>
                  <p><strong>User Details:</strong></p>
                  <li><strong>Reference Number:</strong> <p>OJT24_{$applicant['ID']}</p> </li>
                      <li><strong>Email:</strong> {$applicant['Email']}</li>
                      <li><strong>School Address:</strong> {$applicant['SchoolAddress']}</li>
                      <li><strong>Degree Program:</strong> {$applicant['DegreeProgram']}</li>
                      <li><strong>Year Level:</strong> {$applicant['YearLevel']}</li>
                      <li><strong>Adviser:</strong> {$applicant['Adviser']}</li>
                      <li><strong>OJT Info</li>
                      <li><strong>Total No.:</strong> {$applicant['TotalNo.']}</li>
                      <li><strong>Area Intern:</strong> {$applicant['Area_intern']}</li>
                      <li><strong>Start Date:</strong> {$applicant['StartDate']}</li>
                      <li><strong>Finish Date:</strong> {$applicant['Finish_date']}</li>
                      <li><strong>NBI:</strong> {$applicant['NBI']}</li>
                      <li><strong>MOA:</strong> {$applicant['MOA']}</li>
                      <li><strong>Endorsement:</strong> {$applicant['Endorsement']}</li>
                       <li><strong>Status</li>
                       <li><strong>Status:</strong> {$applicant['Status']}</li>
                      <li><strong>Deficiency:</strong> {$applicant['deficiency']}</li>
                      <li><strong>Remarks:</strong> {$applicant['remarks']}</li>
                      
                  </ul>";
    }

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        // Show success message in modal
        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    var successModal = new bootstrap.Modal(document.getElementById("successModal"), {});
                    successModal.show();
                });
              </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <title>
        Announcements
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="landing.php" target="_blank">
                <img src="public/material-dashboard-master/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Manage Announcement</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white " href="admin-dashboard.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="tables.php">
                        <div class="text-white text-center me-2 d-flex align-items-ce ter justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Tables</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="admin-announcement.php">
                        <div class="text-white text-center me-2 d-flex align-items-ce ter justify-content-center">
                            <i class="material-icons opacity-10">edit</i>
                        </div>
                        <span class="nav-link-text ms-1">Manage Announcement</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="Admin_Applicant_OJT_Information.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">edit</i>
                        </div>
                        <span class="nav-link-text ms-1">Manage Applicant OJT Info</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="Admin_Applicant_User_Information.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">edit</i>
                        </div>
                        <span class="nav-link-text ms-1">Manage Applicant User Info</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="admin-profile.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Admin Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="logout.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">login</i>
                        </div>
                        <span class="nav-link-text ms-1">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <div class="main-content position-relative max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">User</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Profile</h6>
                </nav>
            </div>
        </nav>
        <!-- End Navbar -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

        <style>
            body {
                background-color: #f8f9fa;
            }

            .container {
                background-color: #ffffff;
                padding: 2rem;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h2 {
                margin-bottom: 1.5rem;
            }

            .form-label {
                font-weight: bold;
            }
        </style>

        <div class="container mt-5">
            <h2>Manage Applicant User Information</h2>
            <form method="post" action="Admin_Applicant_User_Information.php" class="mb-3">
                <div class="mb-3">
                    <label for="applicant_id" class="form-label">Select Applicant ID</label>
                    <select name="applicant_id" id="applicant_id" class="form-select">
                        <?php foreach ($applicant_ids as $applicant_id) : ?>
                            <option value="<?= $applicant_id['ID'] ?>" <?= ($applicant && $applicant['ID'] == $applicant_id['ID']) ? 'selected' : '' ?>>
                            <?= 'OJT24_' . $applicant_id['ID'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Fetch Information</button>
            </form>
            <br>
            <?php if ($applicant) : ?>
                <form method="post" action="Admin_Applicant_User_Information.php">
                    <input type="hidden" name="applicant_id" value="<?= $applicant['ID'] ?>">
                    <div class="row g-3">
                        <!-- Personal Information -->
                        <div class="col-md-4">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $applicant['FirstName'] ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="middle_name" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?= $applicant['MiddleName'] ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $applicant['LastName'] ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $applicant['Email'] ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="address_app" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address_app" name="address_app" value="<?= $applicant['Address_App'] ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="Male" <?= $applicant['Gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                                <option value="Female" <?= $applicant['Gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="birth_date" class="form-label">Birth Date</label>
                            <input type="date" class="form-control" id="birth_date" name="birth_date" value="<?= $applicant['BirthDate'] ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="birth_place" class="form-label">Birth Place</label>
                            <input type="text" class="form-control" id="birth_place" name="birth_place" value="<?= $applicant['BirthPlace'] ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="religion" class="form-label">Religion</label>
                            <input type="text" class="form-control" id="religion" name="religion" value="<?= $applicant['Religion'] ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="phone_no" class="form-label">Phone No</label>
                            <input type="text" class="form-control" id="phone_no" name="phone_no" value="<?= $applicant['PhoneNo'] ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="hobby_interest" class="form-label">Hobby/Interest</label>
                            <input type="text" class="form-control" id="hobby_interest" name="hobby_interest" value="<?= $applicant['Hobby_Interest'] ?>" required>
                        </div>
                        <!-- Educational Information -->
                        <div class="col-md-4">
                            <label for="university" class="form-label">University</label>
                            <input type="text" class="form-control" id="university" name="university" value="<?= $applicant['University'] ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="school_address" class="form-label">School Address</label>
                            <input type="text" class="form-control" id="school_address" name="school_address" value="<?= $applicant['SchoolAddress'] ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="degree_program" class="form-label">Degree Program</label>
                            <input type="text" class="form-control" id="degree_program" name="degree_program" value="<?= $applicant['DegreeProgram'] ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="year_level" class="form-label">Year Level</label>
                            <input type="text" class="form-control" id="year_level" name="year_level" value="<?= $applicant['YearLevel'] ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="adviser" class="form-label">Adviser</label>
                            <input type="text" class="form-control" id="adviser" name="adviser" value="<?= $applicant['Adviser'] ?>" required>
                        </div>

                        <div class="col-md-4" style="display: none;">
                            <label for="total_no" class="form-label">Total No.</label>
                            <input type="number" class="form-control" id="total_no" name="total_no" value="<?= $applicant['TotalNo.'] ?>">
                        </div>
                        <div class="col-md-4" style="display: none;">
                            <label for="area_intern" class="form-label">Area Intern</label>
                            <input type="text" class="form-control" id="area_intern" name="area_intern" value="<?= $applicant['Area_intern'] ?>">
                        </div>
                        <div class="col-md-4" style="display: none;">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" value="<?= $applicant['StartDate'] ?>">
                        </div>
                        <div class="col-md-4" style="display: none;">
                            <label for="finish_date" class="form-label">Finish Date</label>
                            <input type="date" class="form-control" id="finish_date" name="finish_date" value="<?= $applicant['Finish_date'] ?>">
                        </div>
                    </div>
                    <br>
                    <button type="submit" name="update" class="btn btn-success">Update Information</button>
                </form>
                <br>
                <form method="post" action="Admin_Applicant_User_Information.php">
                    <input type="hidden" name="applicant_id" value="<?= $applicant['ID'] ?>">
                    <div class="mb-3">
                        <label for="to_email" class="form-label">To Email</label>
                        <input type="email" class="form-control" id="to_email" name="to_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="email_type" class="form-label">Email Type</label>
                        <select name="email_type" id="email_type" class="form-select" required>
                            <option value="approved">Approval</option>
                            <option value="disapproved">Disapproval</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email_message" class="form-label">Email Message (for disapproval)</label>
                        <textarea class="form-control" id="email_message" name="email_message" rows="3"></textarea>
                    </div>
                    <button type="submit" name="send_email" class="btn btn-primary">Send Email</button>
                </form>
            <?php endif; ?>
        </div>

        <!-- Success Modal -->
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Success</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Operation completed successfully!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
        <script>
            // JavaScript to preview the profile picture
            document.getElementById('profilePictureInput').addEventListener('change', function(event) {
                if (event.target.files.length > 0) {
                    const src = URL.createObjectURL(event.target.files[0]);
                    const preview = document.getElementById('profile-picture');
                    preview.src = src;
                    document.getElementById('file-name').textContent = event.target.files[0].name;
                }
            });
        </script>

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="public/material-dashboard-master/assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>