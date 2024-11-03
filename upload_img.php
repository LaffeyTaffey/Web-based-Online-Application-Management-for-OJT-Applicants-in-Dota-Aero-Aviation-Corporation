<?php
session_start(); // Start session if not already started

// Database connection
$conn = mysqli_connect("localhost", "root",
    "",
    "account"
);

// Check if user is logged in
if (isset($_SESSION['std_id']) && isset($_SESSION['id'])) {
    $std_id = $_SESSION['std_id'];
    $id = $_SESSION['id'];

    // Check if file was uploaded without errors
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $tempName = $_FILES['image']['tmp_name'];
        $imageName = $_FILES['image']['name'];
        $imagePath = 'uploads/' . $imageName; // Example path; adjust as needed

        // Move uploaded file to desired location
        move_uploaded_file($tempName, $imagePath);

        // Update database with image path
        $query = "UPDATE std_acc SET image = ? WHERE std_id = ? AND id = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("sii", $imagePath, $std_id, $id);
        $stmt->execute();
        $stmt->close();

        echo 'Image uploaded successfully.';
    } else {
        echo 'Error uploading image.';
    }
} else {
    echo 'User not logged in.';
}
