<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
    <link rel="stylesheet" href="public/css/landing.css" type="text/css">
    <link rel="stylesheet" href="public/css/ojt-requirements.css" type="text/css">
    <link rel="stylesheet" href="public/css/global.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="public/js/ojt-requirements.js"></script>
    <script src="public/js/landing.js"></script>
    <title>OJT Steps</title>
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
                <li><a class="nav-link" href="landing.php">Homepage</a></li>
                <li><a href="landing.php#Credentials">Credentials</a></li>
                <li><a class="nav-link" href="landing.php#ne&up">News updates</a></li>
                <li><a class="nav-link" href="landing.php#networks">Partnership Network</a></li>
                <li><a class="nav-link" href="Announcement.php">Announcements</a></li>
            </ul>
        </nav>
    </header>

    <script>
        // JavaScript to toggle menu
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('nav-bar').classList.toggle('active');
        });
    </script>

    <main class="fade-in">
        <br><br><br><br><br><br>

        <div class="main">
            <form id="multistep_form">
                <!-- progressbar -->
                <ul id="progress_header">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                </ul>
                <!-- Step 01 -->
                <div class="multistep-box">
                    <div class="title-box">
                        <h2>Data Privacy</h2>
                    </div>
                    <div class="privacy-content">
                        <p>
                            DOTA Aero Aviation Service, Inc. is committed to protecting the privacy and confidentiality of personal information entrusted to us,
                            including data, information, and documents of students. In accordance with the Data Privacy Act of 2012
                            (Republic Act No. 10173), we adhere to strict standards in the collection, use, and processing of personal
                            data.
                        </p>
                        <div class="privacy-list">
                            <h3>This means that:</h3>
                            <ol>
                                <li><strong>Consent:</strong> We will obtain consent from individuals before collecting any personal
                                    data, ensuring
                                    that they are informed of the purpose of data collection and how their information will be used.
                                </li>
                                <li><strong>Security:</strong> We implement appropriate technical, organizational, and physical security
                                    measures to
                                    safeguard personal information against unauthorized access, disclosure, alteration, or destruction.
                                </li>
                                <li><strong>Purpose Limitation:</strong> Personal data collected will only be used for the specified and
                                    legitimate
                                    purposes for which it was collected.</li>
                                <li><strong>Data Minimization:</strong> We will only collect personal data that is necessary and
                                    relevant for the
                                    purposes identified, and we will not retain it longer than necessary.</li>
                                <li><strong>Rights of Data Subjects:</strong> Individuals have the right to access, correct, and update
                                    their
                                    personal information, as well as the right to request its deletion or removal from our records.</li>
                                <li><strong>Transparency:</strong> We are committed to providing transparency regarding our data
                                    processing
                                    activities, including informing individuals about their rights and how they can exercise them.</li>
                            </ol>
                        </div>
                        <p>
                            By collecting and processing personal information responsibly and lawfully, we aim to uphold the privacy
                            rights of
                            our students and ensure compliance with the Data Privacy Act of 2012.
                        </p>
                        <label class="checkbox">
                            <input type="checkbox" value="TRUE" title="I consent" /> I consent to the collection, use, and processing of
                            my personal data as described above.
                        </label>
                    </div>
                    <p class="nxt-prev-button">
                        <input type="button" name="next" class="fs_next_btn action-button" value="Next" />
                    </p>
                </div>

                <!-- Step 02 -->
                <div class="multistep-box">
                    <div class="title-box">
                        <h2>Required Documents</h2>
                    </div>
                    <p>
                        Below are the documents required for the OJT application:
                    </p>
                    <div class="document-grid">
                        <div class="document">
                            <h3 style="text-align: center">NBI CLEARANCE</h3>
                            <img src="public/assets/img/ojt/nbi-clearance-form-preview (1).png" alt="Document 1">
                            <br>
                        </div>
                        <div class="document">
                            <h3 style="text-align: center">Recommendation Letter</h3>
                            <img src="public/assets/img/ojt/Recommendation-Letter.png" alt="Document 2">
                            <br>
                        </div>
                        <div class="document">
                            <h3 style="text-align: center">2x2 ID Picture with Nametag</h3>
                            <img src="public/assets/img/ojt/2x2-ID-Picture.png" alt="Document 3">
                            <br>
                        </div>

                        <div class="document">
                            <h3 style="text-align: center">Memorandum of Agreement</h3>
                            <img src="public/assets/img/ojt/MOA.png" alt="Document 3">
                            <br>
                        </div>
                    </div>

                    <div class="download-all">
                        <a href="https://drive.google.com/drive/folders/1AXrW-cstPRHLg1v39wq3cs_FFYAZa2o-?usp=drive_link" target="_blank" class="action-button">Download All</a>
                    </div>

                    <!-- Add more documents as needed -->
                    <p class="nxt-prev-button">
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="button" name="next" class="ss_next_btn action-button" value="Next" />
                    </p>
                </div>
                <!-- Step 03 -->
                <div class="multistep-box">
                    <div class="title-box">
                        <h2>Confirmation</h2>
                    </div>
                    <p>
                    <div class="instruction">Click the button below to proceed to filling up the form and submitting the
                        documents
                        for OJT application</div>
                    <div class="submit-button-wrapper">
                        <input type="button" name="submit" class="submit_btn" value="Submit" id="confirmBtn" />
                        <br>
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                    </div>
                    <script>
                        // Function to handle click on the confirm button
                        document.getElementById("confirmBtn").addEventListener("click", function() {
                            showSuccessPopup();
                            // Redirect after 10 seconds
                            setTimeout(function() {
                                window.location.href = "register.php";
                            }, 10000); // 10 secondns delay
                        });

                        // Function to show the success pop-up
                        function showSuccessPopup() {
                            // Display the pop-up
                            document.getElementById("successPopup").style.display = "block";
                        }
                    </script>

                    <!-- Success pop-up -->
                    <div id="successPopup" class="success-popup">
                        <p>Success! You can now proceed to filling up the form and submitting the documents for OJT
                            application.</p>
                        <a href="register.php" style="border: 1px solid; padding: 10px; border-radius: 5px; ">Proceed</a> <!--Done-->
                    </div>

                    </p>
                </div>
            </form>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.0/jquery.easing.js" type="text/javascript"></script>


        <!-- Start of Async Drift Code -->
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
            drift.load('e89d849i852c');
        </script>
        <!-- End of Async Drift Code -->
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

    </main>
</body>
<script src="public/js/ojt-requirements.js"></script>
<script src="public/js/global.js"></script>

</html>