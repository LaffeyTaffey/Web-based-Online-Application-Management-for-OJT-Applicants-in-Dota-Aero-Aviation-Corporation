<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
    <!---CSS links-->
    <link rel="stylesheet" href="public/css/landing.css" type="text/css">
    <link rel="stylesheet" href="public/css/registration.css" type="text/css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <!--Javascript links-->
    <script src="public/js/landing.js"></script>
    <script src="public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <title>Student Portal</title>
</head>

<body>
    <header id="header">
        <div class="logo-container">
            <img src="public/assets/img/dota_logo.png" alt="DOTA" id="header-img">
            <h1>DOTA Aero Aviation Service, Inc.</h1>
            <div class="logo-container">
                <img src="public/assets/img/airplane.png" alt="DOTA" id="header-img">
                <h1>Excellence in Aviation Services</h1>
            </div>
        </div>
        <div class="menu-toggle" id="menu-toggle">&#9776;</div> <!-- Hamburger icon -->
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="Announcement.php">Announcement</a></li>
                <li><a class="nav-link" href="ticket.php">Submit a Ticket</a></li>
                <li><a class="nav-link" href="ojt-adm-results.php">OJT Admission Results</a></li>
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


    <main class="fade-in">
        <br><br><br><br><br><br><br><br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require('process-insert-data.php');
        }
        ?>
        <div id="regforms">
            <form action="process-insert-data.php" method="post" id="reg" enctype="multipart/form-data">
                <div id="OJTapplication">
                    <div class="application-header">
                        <h3>INTERNSHIP APPLICATION FORM</h3><br>
                        <p>Fill this form accurately with your details</p>
                    </div>
                    <div class="application-header"><img src="public/assets/img/dota_logo.png" alt="dota_logo.png"></div>
                    <div id="img-bg"></div>
                </div>

                <!----Steppppppppppp-->
                <div class="multi-step_indicator">
                    <span class="step"><i class="bi bi-file-earmark-person"></i></span>
                    <span class="step"><i class="bi bi-briefcase-fill"></i></span>
                    <span class="step"><i class="bi bi-info-square-fill"></i></span>
                </div>

                <div class="tab">
                    <table>
                        <tr>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                        </tr>
                        <tr>
                            <td data-label="First Name"><input type="text" name="fName" class="inputform"></td>
                            <td data-label="Middle Name"><input type="text" name="mName" class="inputform" placeholder="(Optional) Type N/A if absent"></td>
                            <td data-label="Last Name"><input type="text" name="lName" class="inputform"></td>
                        </tr>
                        <tr>
                            <th colspan="2">Address</th>
                            <th>Gender</th>
                        </tr>
                        <tr>
                            <td colspan="2" data-label="Address"><input type="text" name="address" id="address"></td>
                            <td data-label="Gender"> <select name="gender" id="gender" class="inputform">
                                    <option disabled selected value>select here</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Prefer not to say">Prefer not to say</option>
                                </select></td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <th>Place of Birth</th>
                            <th>Religion</th>
                        </tr>
                        <tr>
                            <td data-label="Date of Birth"><input type="date" name="birthDate" class="inputform"></td>
                            <td data-label="Place of Birth"><input type="text" name="birthPlace" class="inputform"></td>
                            <td data-label="Religion"><input type="text" name="religion" class="inputform"></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Hobby/Field of Interest</th>
                        </tr>
                        <tr>
                            <td data-label="Email"><input type="email" name="email" class="inputform"></td>
                            <td data-label="Phone Number"> <input type="text" name="pNumber" class="inputform" maxlength="11" pattern="[0-9]{1,11}" title="Please enter a valid phone number (up to 11 digits)" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 11)"></td>
                            <td data-label="Field of Interest"><input type="text" name="interest" class="inputform"></td>
                        </tr>

                    </table>

                </div>

                <div class="tab">
                    <table>

                        <tr>
                            <th>College/University</th>
                            <th>School Address</th>
                            <th>Degree Program</th>
                        </tr>
                        <tr>
                            <td data-label="University"><input type="text" name="university" class="inputform"></td>
                            <td data-label="School Address"><input type="text" name="schoolAddress" class="inputform"></td>
                            <td data-label="Degree Program"><input type="text" name="degree" class="inputform"></td>
                        </tr>
                        <tr>
                            <th>Year Level</th>
                            <th>Adviser</th>
                            <th>Total Number of training <br> hours required</th>
                        </tr>
                        <tr>
                            <td data-label="Year Level"><select name="yearLevel" id="yearLevel" class="inputform">
                                    <option disable selected value>Choose here</option>
                                    <option value="First Year">First Year</option>
                                    <option value="Second Year">Second Year</option>
                                    <option value="Third Year">Third Year</option>
                                    <option value="Fourth Year">Fourth Year</option>
                                    <option value="Fisth Year">Fifth Year</option>
                                </select></td>
                            <td data-label="Adviser"><input type="text" name="adviser" class="inputform"></td>
                            <td data-label="Required training Hours"><input type="number" name="trainingHours" class="inputform"></td>
                        </tr>
                        <br>
                        <tr>
                            <th>Preferred area of Internship</th>
                            <th>Expected date to report</th>
                            <th>Expected date to finish</th>
                        </tr>
                        <tr>
                            <td data-label="Preferred area"> <select name="department" id="department" class="inputform">
                                    <option disabled selected value>Select an option</option>
                                    <option value="department1">Department 1</option>
                                    <option value="department2">Department 2</option>
                                    <option value="deparment3">Department 3</option>
                                </select></td>
                            <td data-label="Expected date to report"><input type="date" name="dateReport" class="inputform"></td>
                            <td data-label="Expected date to finish"><input type="date" name="dateFinish" class="inputform"></td>
                        </tr>
                    </table>

                </div>

                <link rel="stylesheet" href="index2.css" type="text/css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
                <style>
                    .mb-3 {
                        margin-bottom: 10px;
                    }

                    .file-upload-label {
                        background-color: #007bff;
                        color: #fff;
                        text-align: center;
                        padding: 6px 9px;
                        cursor: pointer;
                        border-radius: 4px;
                        display: inline-block;
                        margin-top: 10px;
                    }

                    .file-upload-label:hover {
                        background-color: #0056b3;
                    }

                    .file-upload-container {
                        display: flex;
                        align-items: center;
                    }

                    input[type="file"] {
                        position: absolute;
                        clip: rect(0, 0, 0, 0);
                        pointer-events: none;
                    }
                </style>






                <div class="tab">
                    <div id="guideline_file">
                        <div id="guidebox">
                            <p id="guide"> <b>Upload File Guidelines:</b>
                                <br>
                                1. Image Files:
                                We accept image files in JPG, JPEG, and PNG formats.
                                Ensure that images are clear, legible, and appropriately sized.
                                <br>

                                2. Document Files:
                                We only accept PDF Files for Memorandum of Agreement (MOA),
                                NBI clearance, and Endorsement Letters. Ensure that all text is easily
                                readable and that the document is complete.
                                <br>

                                3. File Integrity:
                                Ensure that your files are free from corruption or any
                                form of alteration that may affect their authenticity or readability.
                            </p>
                        </div>
                    </div>
                    <div id="uploadFiles">
                        <div class="mb-3">
                            <label for="uploadImage"><b>Image</b></label>
                            <input type="file" name="uploadImage" id="uploadImage" class="form-control" accept=".jpg,.jpeg,.png,.gif">

                            <div class="file-upload-label" id="uploadImageLabel">Choose File</div>
                        </div>
                        <div class="mb-3">
                            <label for="uploadMOA"><b>Memorandum of Agreement</b></label>
                            <input type="file" name="uploadMOA" id="uploadMOA" class="form-control" accept=".pdf">

                            <div class="file-upload-label" id="uploadMOALabel">Choose File</div>
                        </div>
                        <div class="mb-3">
                            <label for="uploadEndorsement"><b>Endorsement Letter</b></label>
                            <input type="file" name="uploadEndorsement" id="uploadEndorsement" class="form-control" accept=".pdf">

                            <div class="file-upload-label" id="uploadEndorsementLabel">Choose File</div>
                        </div>
                        <div class="mb-3">
                            <label for="uploadNBI"><b>NBI Clearance</b></label>
                            <input type="file" name="uploadNBI" id="uploadNBI" class="form-control" accept=".pdf">

                            <div class="file-upload-label" id="uploadNBILabel">Choose File</div>
                        </div>
                    </div>
                </div>

                <br><br>


                <script>
                    // Add event listeners to file upload labels
                    document.querySelectorAll('.file-upload-label').forEach(label => {
                        const input = label.previousElementSibling;
                        label.addEventListener('click', () => {
                            input.click(); // Trigger the file input click event
                        });

                        // Update label text when file is selected and check file size
                        input.addEventListener('change', function() {
                            const file = this.files[0];
                            const fileSizeInMB = file.size / (1024 * 1024); // Calculate file size in MB

                            if (fileSizeInMB > 10) {
                                alert('File size exceeds 10.9MiB. Please choose a smaller file.');
                                this.value = ''; // Reset the file input
                                label.textContent = 'Choose File'; // Reset label text
                            } else {
                                const fileName = file.name;
                                label.textContent = fileName;
                            }
                        });
                    });
                </script>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        document.querySelector('input[name="mName"]').removeAttribute('required');
                    });
                </script>



                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                <!--Button-->
                <div id="button-forms">
                    <div id="button-submit">
                        <button type="button" id="previousBtn" onclick="nextPrev(-1)">Previous</button>
                    </div>
                    <div id="button-submit">
                        <button type="button" id="NextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>
            </form>
        </div>
        <br>
        </div>
    </main>


    <script src="public/js/landing.js"></script>
    <script src="public/js/registration.js"></script>
    <script src="public/js/global.js"></script>
</body>
<br><br><br>

</html>