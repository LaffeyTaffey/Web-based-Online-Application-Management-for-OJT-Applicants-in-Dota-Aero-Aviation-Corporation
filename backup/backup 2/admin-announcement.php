<?php
// Include database configuration
include 'config.php';

// Initialize variables for form fields
$id = '';
$title = '';
$content = '';
$date = '';
$time = '';
$editor = '';

// Check if ID parameter is passed for editing existing announcement
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch existing announcement details from database
    $stmt = $dbcon->prepare("SELECT * FROM announcements WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $announcement = $result->fetch_assoc();

    if ($announcement) {
        $title = $announcement['title'];
        $content = $announcement['content'];
        $date = $announcement['date'];
        $time = $announcement['time'];
        $editor = $announcement['editor'];
    }
}

// Fetch all announcements from the database
$stmt_all = $dbcon->prepare("SELECT * FROM announcements ORDER BY id DESC");
$stmt_all->execute();
$result_all = $stmt_all->get_result();
$announcements = $result_all->fetch_all(MYSQLI_ASSOC);

// Check if form is submitted for deletion
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    // Delete announcement from the database
    $stmt_delete = $dbcon->prepare("DELETE FROM announcements WHERE id = ?");
    $stmt_delete->bind_param("i", $delete_id);
    $stmt_delete->execute();

    // Redirect to avoid form resubmission on refresh
    header("Location: admin-announcement.php");
    exit();
}

// Check if form is submitted for adding/editing
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $editor = $_POST['editor'];

    // Insert or update query based on existence of $id
    if (empty($id)) {
        // Insert new announcement
        $stmt = $dbcon->prepare("INSERT INTO announcements (title, content, date, time, editor) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $title, $content, $date, $time, $editor);
    } else {
        // Update existing announcement
        $stmt = $dbcon->prepare("UPDATE announcements SET title=?, content=?, date=?, time=?, editor=? WHERE id=?");
        $stmt->bind_param("sssssi", $title, $content, $date, $time, $editor, $id);
    }

    // Execute the statement
    if ($stmt->execute()) {
        // Set a session variable or flag to indicate success
        $_SESSION['announcement_success'] = true; // Assuming you're using sessions
    }

    // Redirect to the current page after processing the form
    header("Location: admin-announcement.php");
    exit();
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
                    <a class="nav-link text-white active bg-gradient-primary " href="admin-announcement.php">
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

        <br><br>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Form to add or edit announcement -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h2 class="text-center"><?php echo (empty($id) ? 'Add New' : 'Edit'); ?> Announcement</h2>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea class="form-control" id="content" name="content" rows="5" required><?php echo htmlspecialchars($content); ?></textarea>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="date" class="form-label">Date</label>
                                        <input type="date" class="form-control" id="date" name="date" value="<?php echo $date; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="time" class="form-label">Time</label>
                                        <input type="time" class="form-control" id="time" name="time" value="<?php echo $time; ?>" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="editor" class="form-label">Editor</label>
                                    <input type="text" class="form-control" id="editor" name="editor" value="<?php echo htmlspecialchars($editor); ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary"><?php echo (empty($id) ? 'Add' : 'Save'); ?> Announcement</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Display existing announcements -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Existing Announcements</h2>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <?php foreach ($announcements as $announcement) : ?>
                                    <li class="list-group-item">
                                        <h4><?php echo htmlspecialchars($announcement['title']); ?></h4>
                                        <p><?php echo htmlspecialchars($announcement['content']); ?></p>
                                        <small>Posted on <?php echo htmlspecialchars($announcement['date']); ?> at <?php echo htmlspecialchars($announcement['time']); ?> by <?php echo htmlspecialchars($announcement['editor']); ?></small>
                                        <div class="float-end">
                                            <a href="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $announcement['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                                            <form method="POST" style="display: inline;">
                                                <input type="hidden" name="delete_id" value="<?php echo $announcement['id']; ?>">
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this announcement?')">Delete</button>
                                            </form>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for deletion confirmation -->
        <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this announcement?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="deleteForm">
                            <input type="hidden" id="delete_id" name="delete_id" value="">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for success message -->
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Success</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="successMessageBody">
                        Announcement successfully added/edited.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // JavaScript to handle deletion confirmation modal
            function confirmDelete(id) {
                document.getElementById('delete_id').value = id;
                $('#deleteConfirmationModal').modal('show');
            }

            // JavaScript to handle success modal
            function showSuccessModal() {
                $('#successModal').modal('show');
            }
        </script>

        <script>
            // Check if success flag is set and show modal
            <?php if (isset($_SESSION['announcement_success']) && $_SESSION['announcement_success']) : ?>
                showSuccessModal();
                <?php unset($_SESSION['announcement_success']); ?> // Clear the success flag after displaying modal
            <?php endif; ?>

            // JavaScript to handle success modal
            function showSuccessModal() {
                $('#successModal').modal('show');
            }
        </script>



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
</body>

</html>