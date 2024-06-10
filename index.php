<!DOCTYPE html>
<html lang="en">
<!--OJT Portal-->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
    <link rel="stylesheet" href="public/css/landing.css" type="text/css">
    <link rel="stylesheet" href="public/css/index.css" type="text/css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <script src="public/js/landing.js"></script>
    <script src="public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <title>OJT Portal</title>
</head>

<body>
    <header id="header">
        <div class="logo-container">
            <img src="public/assets/img/dota_logo.png" alt="DOTA" id="header-img">
            <h1>DOTA Aero Aviation Service, Inc.</h1>
        </div>
        <div class="logo-container">
            <h1>Philippine State College of Aeronautics</h1>
            <img src="public/assets/img/school_logo.png" alt="PSCA" id="header-img">
        </div>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div> <!-- Hamburger icon -->
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="Announcement.php">Announcement</a></li>
                <li><a class="nav-link" href="public\material-dashboard-master\pages\profile.php">Account Settings</a></li>
                <li><a class="nav-link" href="calendar.php">Calendar</a></li>
                <li><a class="nav-link" href="landing.php">Homepage</a></li>
            </ul>
            <a href="login.php"><button id="signin-button">Sign In →</button></a>
            <br>
        </nav>
    </header>

    <script>
        // JavaScript to toggle menu
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('nav-bar').classList.toggle('active');
        });
    </script>
    <br><br><br><br><br>
    <main class="fade-in">
        <div class="container-dashboard">
            <div class="left-side">
                <div class="applicant-info">
                    <!-- Applicant Information -->
                    <div class="applicant-image">
                        <h2>Applicant Information</h2>
                        <br>
                        <img src="public/assets/img/about us/coding team/marc.jpg" alt="Applicant Image">
                    </div>
                    <div class="applicant-details">

                        <p><strong>Reference ID:</strong> 123456</p>
                        <p><strong>Name:</strong> John Doe</p>
                        <p><strong>Address:</strong> 123 Main St, City, Country</p>
                        <p><strong>Gender:</strong> Male</p>
                        <p><strong>Date of Birth:</strong> January 1, 2000</p>
                        <p><strong>Place of Birth:</strong> City, Country</p>
                        <p><strong>Religion:</strong> Christianity</p>
                        <p><strong>Email:</strong> johndoe@example.com</p>
                        <p><strong>Phone:</strong> +1234567890</p>
                        <p><strong>Hobby/Interest:</strong> Programming</p>
                    </div>
                </div>
                <div class="applicant-progress">
                    <!-- Applicant Progress -->
                    <h2>Applicant Progress</h2>
                    <br>
                    <h3>In Profile:</h3>
                    <canvas class="pieChart" id="pieChart" width="200" height="200"></canvas>
                    <p id="colorInfo"></p>
                    <div class="progress-bar">
                        <div class="progress" id="progressBar"></div>
                    </div>
                </div>

                <div class="task-tracker">
                    <h2>Task Tracker</h2>
                    <br>
                    <div class="task-input">
                        <input type="text" id="taskInput" placeholder="Add a new task...">
                        <button onclick="addTask()">Add</button>
                    </div>
                    <ul id="taskList"></ul>
                </div>

                <div class="calendar">
                    <!-- Calendar -->
                    <h2>Calendar</h2>
                    <br>
                    <div id="calendar"></div>
                    <iframe src="https://calendar.google.com/calendar/embed?height=1000&wkst=1&ctz=Asia%2FHong_Kong&bgcolor=%23039BE5&src=a2lvc2hpbWFzYW11bmVAZ21haWwuY29t&src=OWIxMDU2M2Y3NGI3MmU4OTkwODJlODE0YjJhNDczMjFlYWYzYWI1N2NjYTkzZDc3ZGQxNWFiNWZiODJlZmI5MkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%23D50000&color=%2333B679&color=%230B8043" style="border:solid 1px #777" width="500" height="500" frameborder="0" scrolling="no">
                    </iframe>
                </div>
                <script>
                    // Function to update progress bar based on percentage
                    function updateProgressBar(percent) {
                        const progressBar = document.getElementById('progressBar');
                        progressBar.style.width = percent + '%';
                    }

                    // Generate random data for pie chart
                    function generateRandomData() {
                        const data = [];
                        const labels = ['Completed', 'In Progress', 'Not Started'];

                        for (let i = 0; i < labels.length; i++) {
                            data.push(Math.floor(Math.random() * 100));
                        }

                        return {
                            labels,
                            data
                        };
                    }

                    // Draw pie chart with animation
                    function drawPieChart(data) {
                        const canvas = document.getElementById('pieChart');
                        const ctx = canvas.getContext('2d');
                        const centerX = canvas.width / 2;
                        const centerY = canvas.height / 2;
                        const radius = Math.min(centerX, centerY);

                        ctx.clearRect(0, 0, canvas.width, canvas.height);

                        let colorInfo = '';
                        let startAngle = 0;

                        for (let i = 0; i < data.labels.length; i++) {
                            const sliceAngle = (2 * Math.PI * data.data[i]) / 100;
                            const percent = data.data[i] + '%';
                            const label = data.labels[i] + ' (' + percent + ')';

                            ctx.beginPath();
                            ctx.moveTo(centerX, centerY);
                            ctx.arc(centerX, centerY, radius, startAngle, startAngle + sliceAngle);
                            const color = getRandomColor();
                            ctx.fillStyle = color;
                            ctx.fill();

                            // Add color information to the variable
                            colorInfo += `<span style="color:${color};">${label}</span><br>`;
                            startAngle += sliceAngle;
                        }

                        // Update the paragraph with color information
                        document.getElementById('colorInfo').innerHTML = colorInfo;
                    }

                    // Function to get a random color
                    function getRandomColor() {
                        const letters = '0123456789ABCDEF';
                        let color = '#';
                        for (let i = 0; i < 6; i++) {
                            color += letters[Math.floor(Math.random() * 16)];
                        }
                        return color;
                    }

                    // Generate random data and draw pie chart on page load
                    document.addEventListener('DOMContentLoaded', function() {
                        const data = generateRandomData();
                        drawPieChart(data);
                        updateProgressBar(data.data[0]); // Update progress bar with the completed percentage
                    });

                    // Generate new random data and redraw pie chart on button click
                    const refreshButton = document.getElementById('refreshButton');
                    refreshButton.addEventListener('click', function() {
                        const data = generateRandomData();
                        drawPieChart(data);
                        updateProgressBar(data.data[0]); // Update progress bar with the completed percentage
                    });

                    // Task Tracker
                    function addTask() {
                        const input = document.getElementById("taskInput");
                        const task = input.value.trim();
                        if (task !== "") {
                            const taskList = document.getElementById("taskList");
                            const li = document.createElement("li");
                            li.textContent = task;
                            taskList.appendChild(li);
                            input.value = "";
                        }
                    }

                    function addTask() {
                        const input = document.getElementById("taskInput");
                        const task = input.value.trim();
                        if (task !== "") {
                            const taskList = document.getElementById("taskList");
                            const li = document.createElement("li");
                            const now = new Date().toLocaleString(); // Get current date and time
                            li.innerHTML = `
            <span>${task}</span>
            <div class="task-actions">
                <i class="far fa-edit"></i>
                <i class="far fa-save"></i>
            </div>`;
                            taskList.appendChild(li);
                            input.value = "";

                            // Functionality for editing the task
                            const editIcon = li.querySelector(".fa-edit");
                            editIcon.addEventListener("click", function() {
                                const taskText = li.querySelector("span");
                                const newText = prompt("Edit task:", taskText.textContent);
                                if (newText !== null && newText !== "") {
                                    taskText.textContent = newText;
                                    const editedTime = document.createElement("span");
                                    editedTime.textContent = ` (edited: ${now})`; // Display edit time
                                    taskText.appendChild(editedTime);
                                }
                            });

                            // Functionality for saving the task
                            const saveIcon = li.querySelector(".fa-save");
                            saveIcon.addEventListener("click", function() {
                                const taskText = li.querySelector("span");
                                const status = document.createElement("span");
                                status.textContent = " (saved)";
                                status.style.color = "green"; // Status indicator for successful save
                                taskText.appendChild(status);
                            });
                        }
                    }
                </script>

            </div>
            <div class="right-side">
                <div class="ojt-info">
                    <!-- OJT Information -->
                    <h2>OJT Information</h2>
                    <p><strong>College/University:</strong> Example University</p>
                    <p><strong>School Address:</strong> 456 College Ave, City, Country</p>
                    <p><strong>Degree Program:</strong> Computer Science</p>
                    <p><strong>Year Level:</strong> Senior</p>
                    <p><strong>Adviser:</strong> Prof. Smith</p>
                    <p><strong>Total Training Hours Required:</strong> 300 hours</p>
                    <p><strong>Area of Internship:</strong> Software Development</p>
                    <p><strong>Expected Date to Report:</strong> May 1, 2024</p>
                    <p><strong>Expected Date to Finish:</strong> August 1, 2024</p>
                </div>
                <div class="announcement">
                    <!-- Announcement -->
                    <h2>Announcement</h2>
                    <br>
                    <div class="announcement-container">
                        <div class="announcement1" id="announcement1">
                            <h2>🎉 Big News!</h2>
                            <p>Join us for an exciting event happening next week! You won't want to miss it!</p>
                            <div class="announcement-info" id="announcement-info1">
                                <p>Date: April 20, 2024</p>
                                <p>Time: 10:00 AM</p>
                                <p>Editor: Admin Cecilia Pineda</p>
                            </div>
                        </div>

                        <div class="announcement2" id="announcement2">
                            <h2>🚀 Product Launch!</h2>
                            <p>Our newest product is launching soon! Get ready to experience innovation like never before!</p>
                            <div class="announcement-info" id="announcement-info2">
                                <p>Date: April 21, 2024</p>
                                <p>Time: 2:00 PM</p>
                                <p>Editor: Admin Levi Rodelas</p>
                            </div>
                        </div>

                        <div class="announcement3" id="announcement3">
                            <h2>🔔 Important Update!</h2>
                            <p>We have an important announcement to share regarding upcoming changes. Stay tuned for details!</p>
                            <div class="announcement-info" id="announcement-info3">
                                <p>Date: April 22, 2024</p>
                                <p>Time: 4:00 PM</p>
                                <p>Editor: Admin Marc Sayago</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="weather">
                    <h2>Weather Today</h2>
                    <br>
                    <img class="condition" src="https://www.yr.no/en/content/2-1701668/meteogram.svg" alt="Weather Condition" width="500" height="300" />
                </div>

            </div>
        </div>
    </main>
    <!-- Footer Section -->
    <footer>
        <h1>Contact Us</h1>
        <div class="footer-container">
            <div class="footer-content">
                <img src="public/assets/img/about us/thesis-team/Ariel.jpg" alt="Ariel Nepomuceno Jr." class="profile-img">
                <h3>Ariel Nepomuceno Jr.</h3>
                <p><i class="fa fa-envelope"></i> nepomucenojr.ariel@gmail.com</p>
                <p><i class="fa fa-phone"></i> 09668424122</p>
                <p><i class="fa fa-user"></i> Ariel Nepomuceno</p>
            </div>
            <div class="footer-content">
                <img src="public/assets/img/about us/thesis-team/Abad.png" alt="Michael Luis Daniel P Abad" class="profile-img">
                <h3>Michael Luis Daniel P Abad</h3>
                <p><i class="fa fa-envelope"></i> abad.michaelluisdaniel@gmail.com</p>
                <p><i class="fa fa-phone"></i> 09625412428</p>
                <p><i class="fa fa-user"></i> Michael Abad</p>
            </div>
            <div class="footer-content">
                <img src="public/assets/img/about us/thesis-team/errol2.png" alt="Errol John N. Pacites" class="profile-img">
                <h3>Errol John N. Pacites</h3>
                <p><i class="fa fa-envelope"></i> errolpacites25@gmail.com</p>
                <p><i class="fa fa-phone"></i> 09319548290</p>
                <p><i class="fa fa-user"></i> Errol Pacites</p>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="public/js/landing.js"></script>
    <script src="public/js/global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>

    </script>
</body>
<script>
    "use strict";

    ! function() {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
            if (t.invoked) return void(window.console && console.error && console.error("Drift snippet included twice."));
            t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
                t.factory = function(e) {
                    return function() {
                        var n = Array.prototype.slice.call(arguments);
                        return n.unshift(e), t.push(n), t;
                    };
                }, t.methods.forEach(function(e) {
                    t[e] = t.factory(e);
                }), t.load = function(t) {
                    var e = 3e5,
                        n = Math.ceil(new Date() / e) * e,
                        o = document.createElement("script");
                    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                    var i = document.getElementsByTagName("script")[0];
                    i.parentNode.insertBefore(o, i);
                };
        }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('vf4skr37birm');
</script>

</html>