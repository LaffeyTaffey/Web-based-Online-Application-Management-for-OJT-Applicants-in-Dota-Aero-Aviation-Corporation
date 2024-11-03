<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "account");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!isset($_SESSION['reference_number'])) {
    header("Location: landing.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $timeIn = $_POST['timeIn'];
    $timeOut = $_POST['timeOut'];

    // Calculate hours worked
    $timeInDateTime = new DateTime($timeIn);
    $timeOutDateTime = new DateTime($timeOut);
    $interval = $timeInDateTime->diff($timeOutDateTime);
    $hoursWorked = $interval->h + ($interval->i / 60);

    // Fetch applicant information based on session reference number
    $reference_number = $_SESSION['reference_number'];
    preg_match('/OJT24_(\d+)/', $reference_number, $matches);
    $last_two_digits = isset($matches[1]) ? $matches[1] : '';

    // Insert into training_hours table
    $insertQuery = "INSERT INTO training_hours (applicant_id, training_date, time_in, time_out, hours_worked) 
                    VALUES ('$last_two_digits', CURDATE(), '$timeIn', '$timeOut', '$hoursWorked')";
    if (mysqli_query($conn, $insertQuery)) {
        $alertMessage = "Training hours recorded successfully.";
        echo "<script>alert('$alertMessage'); window.location.href = 'index.php';</script>";
        exit; // Stop further execution to prevent unintended output;
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
