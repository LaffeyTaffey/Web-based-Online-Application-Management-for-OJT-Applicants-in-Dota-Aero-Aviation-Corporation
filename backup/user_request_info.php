<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "account"); // Connect to the correct database

// Check if the user is logged in
if (!isset($_SESSION['reference_number'])) {
    // If not logged in, redirect to landing page
    header("Location: landing.php");
    exit;
}


// Fetch applicant information
$reference_number = $_SESSION['reference_number'];
// Extract numeric part (X) from reference_number like OJT24_X
preg_match('/OJT24_(\d+)/', $reference_number, $matches);
$last_two_digits = isset($matches[1]) ? $matches[1] : '';

// Query to fetch information with condition on the last two digits
$query = "SELECT * FROM ojtapplicants WHERE RIGHT(ID, 2) = '$last_two_digits'";
$result = mysqli_query($conn, $query);
$applicant = null;
if ($result && mysqli_num_rows($result) > 0) {
    $applicant = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Edit Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: #1976d2;
            /* Gradient background */
           
            /* Text color */
            padding-top: 40px;
            /* Space from top */
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            /* Semi-transparent white background */
            border-radius: 10px;
            /* Rounded corners */
            padding: 30px;
            /* Padding inside container */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Shadow for the container */
            max-width: 600px;
            /* Maximum width of the container */
        }

        .profile-img {
            max-width: 200px;
            /* Adjust max-width as needed */
            height: auto;
            /* Maintain aspect ratio */
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
            /* Semi-transparent white background for cards */
            border: none;
            /* No border */
        }

        .card-title {
            color: #1976d2;
            /* Card title color */
        }

        .btn-primary {
            background-color: #1976d2;
            /* Primary button color */
            border-color: #1976d2;
            /* Button border color */
        }

        .btn-primary:hover {
            background-color: #1565c0;
            /* Darker hover color */
            border-color: #1565c0;
            /* Darker hover border color */
        }

        .btn-secondary {
            background-color: #f44336;
            /* Secondary button color */
            border-color: #f44336;
            /* Button border color */
        }

        .btn-secondary:hover {
            background-color: #d32f2f;
            /* Darker hover color */
            border-color: #d32f2f;
            /* Darker hover border color */
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h2 class="mb-4">Request Edit Info</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                <div class="card-body">
                <div class="card-body">
                <h5 class="card-title">Applicant Information</h5>
        <?php if ($applicant): ?>
            <p class="card-text"><strong>ID:</strong> <?php echo htmlspecialchars($applicant['ID']); ?></p>
            <p class="card-text"><strong>Reference Number:</strong> <?php echo htmlspecialchars($reference_number); ?></p>
            <img src="<?php echo !empty($applicant['Picture']) ? 'uploaded_documents/ID_' . $applicant['ID'] . '/' . $applicant['Picture'] : '../assets/img/default-profile.jpg'; ?>" alt="Profile Picture" class="img-thumbnail profile-img">
        <?php else: ?>
            <p class="card-text">No applicant found with the reference number ending in <?php echo htmlspecialchars($last_digit); ?>.</p>
        <?php endif; ?>

</div>
</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Request Edit</h5>
                        <form action="sent_info.php" method="post">
                            <div class="mb-3">
                                <label for="requestMessage" class="form-label">Request Message:</label>
                                <textarea class="form-control" id="requestMessage" name="requestMessage" rows="3" required></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Send</button>
                                <a href="index.php" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>