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
$last_digit = substr($reference_number, -1);
$query = "SELECT * FROM ojtapplicants WHERE RIGHT(ID, 1) = '$last_digit'";
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
    Admin Tables
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
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="tables.php" target="_blank">
        <img src="public/material-dashboard-master/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin Tables</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="admin-dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-8">dashboard</i>
            </div>
            <span class="nav-link-text ms-2">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
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
          <a class="nav-link text-white " href="admin-profile.php">
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
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tables</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        </div>
        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
          <li class="mb-2">
            <a class="dropdown-item border-radius-md" href="javascript:;">
              <div class="d-flex py-1">
                <div class="my-auto">
                  <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="text-sm font-weight-normal mb-1">
                    <span class="font-weight-bold">New message</span> from Laur
                  </h6>
                  <p class="text-xs text-secondary mb-0">
                    <i class="fa fa-clock me-1"></i>
                    13 minutes ago
                  </p>
                </div>
              </div>
            </a>
          </li>
          <li class="mb-2">
            <a class="dropdown-item border-radius-md" href="javascript:;">
              <div class="d-flex py-1">
                <div class="my-auto">
                  <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="text-sm font-weight-normal mb-1">
                    <span class="font-weight-bold">New album</span> by Travis Scott
                  </h6>
                  <p class="text-xs text-secondary mb-0">
                    <i class="fa fa-clock me-1"></i>
                    1 day
                  </p>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a class="dropdown-item border-radius-md" href="javascript:;">
              <div class="d-flex py-1">
                <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                  <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>credit-card</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(453.000000, 454.000000)">
                            <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                            <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="text-sm font-weight-normal mb-1">
                    Payment successfully completed
                  </h6>
                  <p class="text-xs text-secondary mb-0">
                    <i class="fa fa-clock me-1"></i>
                    2 days
                  </p>
                </div>
              </div>
            </a>
          </li>
        </ul>
        </li>
        </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- End Navbar -->


    <?php
    require('config.php'); // Connect to the database

    $query = "SELECT * FROM ojtapplicants ORDER BY DateReg ASC";
    $result = mysqli_query($dbcon, $query);

    if ($result) {
      echo '
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Applicant Table</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
    <tr>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Applicant Name</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID / Reference No.</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Application</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deficiency</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Remarks</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Manage</th>
    </tr>
</thead>
                            <tbody>';

      // Fetch and print the data
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        // Construct the path to the profile picture
        $profilePicPath = !empty($row['Picture']) ? 'uploaded_documents/ID_' . $row['ID'] . '/' . $row['Picture'] : '../assets/img/team-2.jpg';

        echo '
        <tr>
            <td>
                <div class="d-flex px-2 py-1">
                    <div>
                        <img src="' . $profilePicPath . '" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">' . $row['FirstName'] . ' ' . $row['LastName'] . '</h6>
                        <p class="text-xs text-secondary mb-0">' . $row['Email'] . '</p>
                    </div>
                </div>
            </td>
            <td>
                <p class="text-xs font-weight-bold mb-0">' . $row['ID'] . '</p>
                <p class="text-xs font-weight-bold mb-0">OJT24_' . $row['ID'] . '</p>
                <p class="text-xs text-secondary mb-0">' . $row['DegreeProgram'] . '</p>
            </td>
            <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">' . date("F d, Y", strtotime($row['DateReg'])) . '</span>
            </td>
            <td>
            <p class="text-xs font-weight-bold mb-0">' . $row['Status'] . '</p>
        </td>
        <td>
            <p class="text-xs font-weight-bold mb-0">' . htmlspecialchars($row['deficiency']) . '</p>
        </td>
        <td>
            <p class="text-xs font-weight-bold mb-0">' . htmlspecialchars($row['remarks']) . '</p>
        </td>
            <td class="align-middle">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal' . $row['ID'] . '">
                    Validate
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal' . $row['ID'] . '" tabindex="-1" aria-labelledby="exampleModalLabel' . $row['ID'] . '" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel' . $row['ID'] . '">Applicant Details</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
    <img src="' . $profilePicPath . '" class="img-fluid rounded-circle mx-auto d-block img-thumbnail" style="max-width: 200px; max-height: 200px;" alt="Applicant Image">
</div>

                                    </div>

                                    <h3 class="mt-3">Personal Information</h3>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <tr>
                                                    <th>Full Name</th>
                                                    <td>' . $row['FirstName'] . ' ' . $row['MiddleName'] . ' ' . $row['LastName'] . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <td>' . $row['Address_App'] . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <td>' . $row['Gender'] . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Birth Date</th>
                                                    <td>' . $row['BirthDate'] . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Birth Place</th>
                                                    <td>' . $row['BirthPlace'] . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Religion</th>
                                                    <td>' . $row['Religion'] . '</td>
                                                </tr>

                                                <tr>
                                                    <th>Hobby/Interest</th>
                                                    <td>' . $row['Hobby_Interest'] . '</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <h3 class="mt-3">Contact Information</h3>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <tr>
                                                    <th>Email</th>
                                                    <td>' . $row['Email'] . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone No</th>
                                                    <td>' . $row['PhoneNo'] . '</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <h3 class="mt-3">Education</h3>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <tr>
                                                    <th>College/University</th>
                                                    <td>' . $row['University'] . '</td>
                                                </tr>
                                                <tr>
                                                    <th>School Address</th>
                                                    <td>' . $row['SchoolAddress'] . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Degree Program</th>
                                                    <td>' . $row['DegreeProgram'] . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Year Level</th>
                                                    <td>' . $row['YearLevel'] . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Adviser</th>
                                                    <td>' . $row['Adviser'] . '</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <h3 class="mt-3">Internship Details</h3>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <tr>
                                                    <th>Total No. of Hours Training Required</th>
                                                    <td>' . ($row['TotalNo.'] ?? 'N/A') . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Area of Internship</th>
                                                    <td>' . $row['Area_intern'] . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Start Date</th>
                                                    <td>' . $row['StartDate'] . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Finish Date</th>
                                                    <td>' . $row['Finish_date'] . '</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <h3 class="mt-3">Additional Documents</h3>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <table class="table">
                                            <tr>
                <th>Picture</th>
                <td>' . (!empty($row['Picture']) ? '<a href="uploaded_documents/ID_' . $row['ID'] . '/' . $row['Picture'] . '" target="_blank">View Picture</a>' : 'No Picture Document') . '</td>
            </tr>
                                                <tr>
                                                    <th>NBI</th>
                                                    <td>' . (!empty($row['NBI']) ? '<a href="uploaded_documents/ID_' . $row['ID'] . '/' . $row['NBI'] . '" target="_blank">View NBI</a>' : 'No NBI Document') . '</td>
                                                </tr>
                                                <tr>
                                                    <th>MOA</th>
                                                    <td>' . (!empty($row['MOA']) ? '<a href="uploaded_documents/ID_' . $row['ID'] . '/' . $row['MOA'] . '" target="_blank">View MOA</a>' : 'No MOA Document') . '</td>
                                                </tr>
                                                <tr>
                                                    <th>Endorsement</th>
                                                    <td>' . (!empty($row['Endorsement']) ? '<a href="uploaded_documents/ID_' . $row['ID'] . '/' . $row['Endorsement'] . '" target="_blank">View Endorsement</a>' : 'No Endorsement Document') . '</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#approveModal' . $row['ID'] . '">Approve</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#disapproveModal' . $row['ID'] . '">Disapprove</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Approve Modal -->
<div class="modal fade" id="approveModal' . $row['ID'] . '" tabindex="-1" aria-labelledby="approveModalLabel' . $row['ID'] . '" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="approveModalLabel' . $row['ID'] . '">Approval Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to approve this application?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form action="process_action.php" method="post">
                    <input type="hidden" name="id" value="' . $row['ID'] . '">
                    <input type="hidden" name="action" value="approve">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Disapprove Modal -->
<div class="modal fade" id="disapproveModal' . $row['ID'] . '" tabindex="-1" aria-labelledby="disapproveModalLabel' . $row['ID'] . '" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="disapproveModalLabel' . $row['ID'] . '">Disapproval Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="process_action.php" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="deficiency' . $row['ID'] . '" class="form-label">Deficiency</label>
                        <textarea class="form-control" id="deficiency' . $row['ID'] . '" name="deficiency" rows="3">' . htmlspecialchars($row['deficiency']) . '</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="remarks' . $row['ID'] . '" class="form-label">Remarks</label>
                        <textarea class="form-control" id="remarks' . $row['ID'] . '" name="remarks" rows="3">' . htmlspecialchars($row['remarks']) . '</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <input type="hidden" name="id" value="' . $row['ID'] . '">
                    <input type="hidden" name="action" value="disapprove">
                    <button type="submit" class="btn btn-primary">Confirm Disapproval</button>
                </div>
            </form>
        </div>
    </div>
</div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>';
      }

      echo '
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    } else {
    }
    ?>
    
      </div>

      <!-- Include Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <!--Javascript for modal-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>