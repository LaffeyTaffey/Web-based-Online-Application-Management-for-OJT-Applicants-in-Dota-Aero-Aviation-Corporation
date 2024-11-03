<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
  <title>
    Admin Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show bg-gray-200">
  <script>
    // Function to fetch and update data
    async function fetchData() {
      const response = await fetch('fetch_data.php');
      const data = await response.json();

      // Update summary cards
      document.getElementById('totalApplicants').innerText = data.total_applicants;
      document.getElementById('totalAccepted').innerText = data.total_accepted;
      document.getElementById('totalRejected').innerText = data.total_rejected;
      document.getElementById('acceptanceRate').innerText = data.acceptance_rate + '%';

      // Update applicants list table
      const applicantsList = document.getElementById('applicantsList');
      applicantsList.innerHTML = '';
      data.applicants_list.forEach(item => {
        const row = document.createElement('tr');
        const idCell = document.createElement('td');
        const firstNameCell = document.createElement('td');
        const middleNameCell = document.createElement('td');
        const lastNameCell = document.createElement('td');
        const dateRegCell = document.createElement('td');
        const statusCell = document.createElement('td');

        idCell.textContent = item.ID;
        firstNameCell.textContent = item.FirstName;
        middleNameCell.textContent = item.MiddleName;
        lastNameCell.textContent = item.LastName;
        dateRegCell.textContent = item.DateReg;
        statusCell.textContent = item.Status;

        row.appendChild(idCell);
        row.appendChild(firstNameCell);
        row.appendChild(middleNameCell);
        row.appendChild(lastNameCell);
        row.appendChild(dateRegCell);
        row.appendChild(statusCell);

        applicantsList.appendChild(row);
      });
    }

    // Call the fetchData function when the page loads
    fetchData();
  </script>
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="landing.php" target="_blank">
        <img src="public/material-dashboard-master/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="admin-dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tables.php">
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
          <a class="nav-link text-white" href="admin-profile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Admin Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="logout.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
      </div>
    </nav>

    <!-- End Navbar -->

    <div class="container mt-5">
      <!-- Summary Cards -->
      <div class="row">
        <div class="col-md-3">
          <div class="card text-white bg-primary mb-3">
            <div class="card-body">
              <h5 class="card-title">Total Applicants</h5>
              <p class="card-text display-4" id="totalApplicants">0</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-white bg-success mb-3">
            <div class="card-body">
              <h5 class="card-title">Total Accepted</h5>
              <p class="card-text display-4" id="totalAccepted">0</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-white bg-danger mb-3">
            <div class="card-body">
              <h5 class="card-title">Total Rejected</h5>
              <p class="card-text display-4" id="totalRejected">0</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-white bg-info mb-3">
            <div class="card-body">
              <h5 class="card-title">Acceptance Rate</h5>
              <p class="card-text display-4" id="acceptanceRate">0%</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Line Chart -->
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">OJT Applicants Over Time</h5>
              <canvas id="ojtChart"></canvas>
            </div>
          </div>
        </div>
        <br><br>
        <div class="container mt-5">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header text-center">
                  <h5 class="card-title">Online Users</h5>
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
      </div>
      <br><br>
      <!-- Bar Chart -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Monthly Breakdown</h5>
              <canvas id="monthlyBreakdownChart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <!-- Table -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Applicants List</h5>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Date of Application</th>
                    <th>Status</th>
                    <th>Deficiency</th>
                    <th>Remarks</th>
                  </tr>
                </thead>
                <tbody id="applicantsList">
                  <tr>
                    <td>John Doe</td>
                    <td>Accepted</td>
                    <td>2024-01-15</td>
                  </tr>
                  <!-- More rows as needed -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Function to fetch and update data
    async function fetchData() {
      const response = await fetch('fetch_data.php');
      const data = await response.json();

      // Process data for charts
      const labels = data.monthly_breakdown.map(item => item.month);
      const acceptedData = data.monthly_breakdown.map(item => item.accepted);
      const rejectedData = data.monthly_breakdown.map(item => item.rejected);

      // Update bar chart
      barChart.data.labels = labels;
      barChart.data.datasets[0].data = acceptedData;
      barChart.data.datasets[1].data = rejectedData;
      barChart.update();

      // Update line chart
      lineChart.data.labels = labels;
      lineChart.data.datasets[0].data = acceptedData;
      lineChart.data.datasets[1].data = rejectedData;
      lineChart.update();

      // Update bar chart
      barChart.data.labels = labels;
      barChart.data.datasets[0].data = acceptedData;
      barChart.data.datasets[1].data = rejectedData;
      barChart.update();

      // Update summary cards
      const totalAccepted = acceptedData.reduce((a, b) => a + b, 0);
      const totalRejected = rejectedData.reduce((a, b) => a + b, 0);
      const totalApplicants = totalAccepted + totalRejected;
      const acceptanceRate = ((totalAccepted / totalApplicants) * 100).toFixed(2);

      document.getElementById('totalApplicants').innerText = totalApplicants;
      document.getElementById('totalAccepted').innerText = totalAccepted;
      document.getElementById('totalRejected').innerText = totalRejected;
      document.getElementById('acceptanceRate').innerText = acceptanceRate + '%';

      // Update applicants list table (You need to modify the PHP script to fetch applicant names and status)
      const applicantsList = document.getElementById('applicantsList');
      applicantsList.innerHTML = '';
      data.forEach(item => {
        const row = document.createElement('tr');
        const nameCell = document.createElement('td');
        const statusCell = document.createElement('td');
        const dateCell = document.createElement('td');
        nameCell.textContent = item.name;
        statusCell.textContent = item.status;
        dateCell.textContent = item.date_of_application;
        row.appendChild(nameCell);
        row.appendChild(statusCell);
        row.appendChild(dateCell);
        applicantsList.appendChild(row);
      });
    }

    // Data for the line chart
    const lineChartData = {
      labels: [],
      datasets: [{
          label: 'Accepted',
          data: [],
          borderColor: '#28a745',
          backgroundColor: 'rgba(40, 167, 69, 0.2)',
          fill: true,
          tension: 0.4
        },
        {
          label: 'Rejected',
          data: [],
          borderColor: '#dc3545',
          backgroundColor: 'rgba(220, 53, 69, 0.2)',
          fill: true,
          tension: 0.4
        }
      ]
    };

    // Config for the line chart
    const lineChartConfig = {
      type: 'line',
      data: lineChartData,
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: 'OJT Applicants Over Time'
          }
        },
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    };

    // Render the line chart
    const lineChart = new Chart(
      document.getElementById('ojtChart'),
      lineChartConfig
    );

    // Data for the bar chart
    const barChartData = {
      labels: [],
      datasets: [{
          label: 'Accepted',
          data: [],
          backgroundColor: '#28a745'
        },
        {
          label: 'Rejected',
          data: [],
          backgroundColor: '#dc3545'
        }
      ]
    };

    // Config for the bar chart
    const barChartConfig = {
      type: 'bar',
      data: barChartData,
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: 'Monthly Breakdown of OJT Applicants'
          }
        },
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    };

    // Render the bar chart
    const barChart = new Chart(
      document.getElementById('monthlyBreakdownChart'),
      barChartConfig
    );

    // Example: Update the number of online users
    function updateOnlineUsers() {
      // Fetch the number of online users from an API or other source
      // For this example, we'll just use a static number
      const onlineUsers = 120; // Example number
      document.getElementById('onlineUsers').innerText = onlineUsers;
    }

    // Call the fetchData function when the page loads
    fetchData();
  </script>

  <script>
    // Function to fetch and update data
    async function fetchData() {
      const response = await fetch('fetch_data.php');
      const data = await response.json();

      // Update summary cards
      document.getElementById('totalApplicants').innerText = data.total_applicants;
      document.getElementById('totalAccepted').innerText = data.total_accepted;
      document.getElementById('totalRejected').innerText = data.total_rejected;
      document.getElementById('acceptanceRate').innerText = data.acceptance_rate + '%';

      // Update applicants list table
      const applicantsList = document.getElementById('applicantsList');
      applicantsList.innerHTML = '';
      data.applicants_list.forEach(item => {
        const row = document.createElement('tr');
        const idCell = document.createElement('td');
        const firstNameCell = document.createElement('td');
        const middleNameCell = document.createElement('td');
        const lastNameCell = document.createElement('td');
        const dateRegCell = document.createElement('td');
        const statusCell = document.createElement('td');
        const deficiencyCell = document.createElement('td');
        const remarksCell = document.createElement('td');

        idCell.textContent = item.ID;
        firstNameCell.textContent = item.FirstName;
        middleNameCell.textContent = item.MiddleName;
        lastNameCell.textContent = item.LastName;
        dateRegCell.textContent = item.DateReg;
        statusCell.textContent = item.Status;
        deficiencyCell.textContent = item.Deficiency;
        remarksCell.textContent = item.Remarks;

        row.appendChild(idCell);
        row.appendChild(firstNameCell);
        row.appendChild(middleNameCell);
        row.appendChild(lastNameCell);
        row.appendChild(dateRegCell);
        row.appendChild(statusCell);
        row.appendChild(deficiencyCell);
        row.appendChild(remarksCell);

        applicantsList.appendChild(row);
      });
    }

    // Call the fetchData function when the page loads
    fetchData();
  </script>
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
</body>

</html>