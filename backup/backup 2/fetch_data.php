<?php
require('config.php'); // Connect to the database

// Fetch total applicants
$totalQuery = "SELECT COUNT(*) AS total_applicants FROM ojtapplicants";
$totalResult = mysqli_query($dbcon, $totalQuery);
$totalApplicants = mysqli_fetch_assoc($totalResult)['total_applicants'];

// Fetch total accepted applicants
$acceptedQuery = "SELECT COUNT(*) AS total_accepted FROM ojtapplicants WHERE Status = 'approved'";
$acceptedResult = mysqli_query($dbcon, $acceptedQuery);
$totalAccepted = mysqli_fetch_assoc($acceptedResult)['total_accepted'];

// Fetch total rejected applicants
$rejectedQuery = "SELECT COUNT(*) AS total_rejected FROM ojtapplicants WHERE Status = 'disapproved'";
$rejectedResult = mysqli_query($dbcon, $rejectedQuery);
$totalRejected = mysqli_fetch_assoc($rejectedResult)['total_rejected'];

// Calculate acceptance rate
if ($totalApplicants > 0) {
    $acceptanceRate = ($totalAccepted / $totalApplicants) * 100;
} else {
    $acceptanceRate = 0;
}

// Fetch applicants list with necessary columns
$applicantsQuery = "SELECT ID, FirstName, MiddleName, LastName, DateReg, Status, Deficiency, Remarks FROM ojtapplicants";
$applicantsResult = mysqli_query($dbcon, $applicantsQuery);
$applicantsList = mysqli_fetch_all($applicantsResult, MYSQLI_ASSOC);

// Fetch monthly breakdown of applicants
$monthlyQuery = "SELECT 
                    DATE_FORMAT(DateReg, '%Y-%m') AS month,
                    SUM(CASE WHEN Status = 'approved' THEN 1 ELSE 0 END) AS accepted,
                    SUM(CASE WHEN Status = 'disapproved' THEN 1 ELSE 0 END) AS rejected
                FROM ojtapplicants
                GROUP BY DATE_FORMAT(DateReg, '%Y-%m')";
$monthlyResult = mysqli_query($dbcon, $monthlyQuery);
$monthlyData = mysqli_fetch_all($monthlyResult, MYSQLI_ASSOC);

// Prepare data to send back as JSON
$data = [
    'total_applicants' => $totalApplicants,
    'total_accepted' => $totalAccepted,
    'total_rejected' => $totalRejected,
    'acceptance_rate' => number_format($acceptanceRate, 2),
    'applicants_list' => $applicantsList,
    'monthly_breakdown' => $monthlyData,
];

// Send data as JSON response
header('Content-Type: application/json');
echo json_encode($data);

mysqli_close($dbcon);
