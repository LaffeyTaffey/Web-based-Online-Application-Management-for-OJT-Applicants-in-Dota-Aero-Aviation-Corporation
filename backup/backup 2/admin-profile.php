<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "account"); // Connect to the correct database


// Check if the user is logged in and has a reference number
if (!isset($_SESSION['reference_number'])) {
    // If not logged in, redirect to landing page
    header("Location: landing.php");
    exit;
}

// Check if the user is an admin
if ($_SESSION['user_type'] !== 'admin') {
    // If usertype is not admin, redirect to landing page
    header("Location: landing.php");
    exit;
}



// Fetch applicant information
$reference_number = $_SESSION['reference_number'];
$last_two_digits = substr($reference_number, -2);

// Query to fetch information with condition on the last two digits
$query = "SELECT * FROM ojtapplicants WHERE RIGHT(ID, 2) = '$last_two_digits'";
$result = mysqli_query($conn, $query);
$applicant = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
  <title>
    Admin Profile
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="g-sidenav-show bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="landing.php" target="_blank">
        <img src="public/material-dashboard-master/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin Account Settings</span>
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
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="admin-announcement.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
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
          <a class="nav-link text-white" href="Admin_Applicant_User_Information.php">
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
          <a class="nav-link text-white active bg-gradient-primary" href="admin-profile.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li>
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
        background: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&q=80&w=1920') no-repeat center center fixed;
        background-size: cover;
        background-color: #f8f9fa;
        color: #000;
      }

      .card {
        background-color: rgba(255, 255, 255, 0.9);
        border: none;
      }

      .list-group-item {
        background-color: rgba(255, 255, 255, 0.95);
      }

      .profile-picture-section {
        position: relative;
      }

      .profile-picture-section img {
        width: 150px;
        height: 150px;
        object-fit: cover;
      }

      #profilePictureInput {
        display: none;
      }

      .custom-file-upload {
        display: inline-block;
        cursor: pointer;
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
      }

      .custom-file-upload:hover {
        background-color: #0056b3;
      }

      .btn-primary {
        background-color: #007bff;
        border: none;
      }

      .btn-primary:hover {
        background-color: #0056b3;
      }

      .btn-success {
        background-color: #28a745;
        border: none;
      }

      .btn-success:hover {
        background-color: #218838;
      }

      h2 {
        font-size: 2rem;
        animation: fadeInDown 1s;
      }
    </style>


    <style>
      body {
        background: linear-gradient(to right, #4facfe, #00f2fe);
        color: #fff;
        font-family: 'Arial', sans-serif;
        overflow-x: hidden;
      }

      .card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        background-color: rgba(255, 255, 255, 0.5);
        margin-bottom: 30px;
      }

      .card-header {
        background: rgba(255, 255, 255, 0.7);
        border-bottom: none;
      }

      .btn-success {
        background-color: #28a745;
        border: none;
        border-radius: 50px;
        padding: 10px 20px;
        transition: transform 0.3s ease-in-out;
      }

      .btn-success:hover {
        transform: scale(1.1);
      }

      .profile-card {
        margin: 20px 0;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        text-align: center;
      }

      .profile-card img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        border: 3px solid #fff;
        margin-bottom: 15px;
      }

      .profile-card h3 {
        margin-bottom: 10px;
      }

      .profile-card p {
        margin-bottom: 5px;
        font-size: 14px;
      }

      .container {
        margin-top: 50px;
      }
    </style>

    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card animate__animated animate__fadeIn">
            <div class="card-header text-center">
              <h2 class="animate__animated animate__fadeInDown">Admin Profile</h2>
            </div>
            <div class="card-body text-center">
              <?php
              require('config.php'); // Connect to the databas

$reference_number = $_SESSION['reference_number'];
$last_two_digits = substr($reference_number, -2);

// Query to fetch information with condition on the last two digits
$query = "SELECT * FROM ojtapplicants WHERE RIGHT(ID, 2) = '$last_two_digits'";
              $result = mysqli_query($dbcon, $query);

              if ($row = mysqli_fetch_assoc($result)) {
                // Construct the path to the admin's profile picture
                $profilePicPath = !empty($row['Picture']) ? 'uploaded_documents/ID_' . $row['ID'] . '/' . $row['Picture'] : '../assets/img/default-profile.jpg';

                // Display admin profile picture and ID
                echo '<div class="text-center">';
                // If logged in, display welcome message
                echo '<p class="text-muted">Welcome, ' . (isset($_SESSION['reference_number']) ? $_SESSION['reference_number'] : 'Unknown') . '! You are logged in.</p>';
                echo '</div>';
                echo '<img src="' . $profilePicPath . '" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;" alt="Admin Profile Picture">';
                echo '<p><strong>ID:</strong> ' . $row['ID'] . '</p>';

                // Add links
                echo '<div class="mt-4">';
                echo '<a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=account&table=ojtapplicants" class="btn btn-primary mr-3">Change Name</a>';
                echo '<a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=account&table=ojtapplicants" class="btn btn-danger">Change Image</a>';
                echo '</div>';
              } else {
                echo '<p>No admin found with ID = ' . $admin_id . '</p>';
              }
              ?>
            </div>
          </div>
        </div>

        <div class="container mt-5">
          <h1 class="text-center mb-4">Online Users Dashboard</h1>
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header text-center">
                  Online Users
                </div>
                <div class="card-body">
                  <canvas id="onlineUsersChart" width="400" height="200"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script>
          // Function to generate random data for online users
          function generateRandomData() {
            var onlineUsersData = [];
            var daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

            for (var i = 0; i < 7; i++) {
              onlineUsersData.push(Math.floor(Math.random() * (50 - 10 + 1)) + 10); // Random number between 10 and 50
            }

            return {
              labels: daysOfWeek,
              data: onlineUsersData
            };
          }

          // Function to update the Online Users chart
          function updateOnlineUsersChart() {
            var data = generateRandomData();

            var onlineUsersChartCtx = document.getElementById('onlineUsersChart').getContext('2d');
            var onlineUsersChart = new Chart(onlineUsersChartCtx, {
              type: 'line',
              data: {
                labels: data.labels,
                datasets: [{
                  label: 'Online Users',
                  data: data.data,
                  fill: false,
                  borderColor: 'rgba(75, 192, 192, 1)',
                  tension: 0.1
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
          }

          // Initial chart rendering
          updateOnlineUsersChart();
        </script>

        <h1 class="text-center mb-5 animate__animated animate__fadeInDown">Database Management</h1>
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="card animate__animated animate__fadeIn">
              <div class="card-header text-center">
                <h2 class="animate__animated animate__fadeInDown">Manage Announcements</h2>
              </div>
              <div class="card-body text-center">
                <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=account&table=announcements" class="btn btn-success animate__animated animate__fadeInUp" target="_blank">Manage</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card animate__animated animate__fadeIn">
              <div class="card-header text-center">
                <h2 class="animate__animated animate__fadeInDown">Manage OJT Applicants</h2>
              </div>
              <div class="card-body text-center">
                <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=account&table=ojtapplicants" class="btn btn-success animate__animated animate__fadeInUp" target="_blank">Manage</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card animate__animated animate__fadeIn">
              <div class="card-header text-center">
                <h2 class="animate__animated animate__fadeInDown">Manage Applicant Passwords</h2>
              </div>
              <div class="card-body text-center">
                <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=account&table=std_acc&sql_query=SELECT+%2A+FROM+%60std_acc%60++%0AORDER+BY+%60std_acc%60.%60password%60+DESC&sql_signature=ac8eff4618c9b1fdb422bf5899b70e73f85ca427fcd285e897903a9486fa57cc&session_max_rows=25&is_browse_distinct=0" class="btn btn-success animate__animated animate__fadeInUp" target="_blank">Manage</a>
              </div>
            </div>
          </div>
        </div>
      </div>



      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
      <!--   Core JS Files   -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="public/material-dashboard-master/assets/js/core/popper.min.js"></script>
      <script src="public/material-dashboard-master/assets/js/core/bootstrap.min.js"></script>
      <script src="public/material-dashboard-master/assets/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="public/material-dashboard-master/assets/js/smooth-scrollbar.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="public/material-dashboard-master/assets/js/material-dashboard.min.js?v=3.1.0"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>