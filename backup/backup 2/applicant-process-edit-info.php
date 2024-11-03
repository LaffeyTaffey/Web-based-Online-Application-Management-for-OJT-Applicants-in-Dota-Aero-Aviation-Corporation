<?php
session_start();
require('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $FirstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
    $MiddleName = mysqli_real_escape_string($conn, $_POST['MiddleName']);
    $LastName = mysqli_real_escape_string($conn, $_POST['LastName']);
    $Address_App = mysqli_real_escape_string($conn, $_POST['Address_App']);
    $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
    $BirthDate = mysqli_real_escape_string($conn, $_POST['BirthDate']);
    $BirthPlace = mysqli_real_escape_string($conn, $_POST['BirthPlace']);
    $Religion = mysqli_real_escape_string($conn, $_POST['Religion']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $PhoneNo = mysqli_real_escape_string($conn, $_POST['PhoneNo']);
    $Hobby_Interest = mysqli_real_escape_string($conn, $_POST['Hobby_Interest']);
    $University = mysqli_real_escape_string($conn, $_POST['University']);
    $SchoolAddress = mysqli_real_escape_string($conn, $_POST['SchoolAddress']);
    $DegreeProgram = mysqli_real_escape_string($conn, $_POST['DegreeProgram']);
    $YearLevel = mysqli_real_escape_string($conn, $_POST['YearLevel']);
    $Adviser = mysqli_real_escape_string($conn, $_POST['Adviser']);

    $update_query = "UPDATE ojtapplicants SET FirstName='$FirstName', MiddleName='$MiddleName', LastName='$LastName', Address_App='$Address_App', Gender='$Gender', BirthDate='$BirthDate', BirthPlace='$BirthPlace', Religion='$Religion', Email='$Email', PhoneNo='$PhoneNo', Hobby_Interest='$Hobby_Interest', University='$University', SchoolAddress='$SchoolAddress', DegreeProgram='$DegreeProgram', YearLevel='$YearLevel', Adviser='$Adviser' WHERE ID='$id'";

    if (mysqli_query($conn, $update_query)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
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
    <title>User Saved Info</title>
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