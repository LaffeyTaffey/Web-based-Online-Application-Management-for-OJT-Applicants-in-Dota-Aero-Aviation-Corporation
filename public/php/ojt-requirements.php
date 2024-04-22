<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="public/assets/img/dota_logo.png" />
    <meta name="theme-color" content="#1885ed">
    <link rel="stylesheet" href="public/css/landing.css" type="text/css">
    <link rel="stylesheet" href="public/css/ojt-requirements.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="public/js/ojt-requirements.js"></script>
    <script src="public/js/landing.js"></script>
    <title>OJT Steps</title>
</head>

<body background="public/assets/img/84624.png">
    <header id="header">
        <div class="logo-container">
            <img src="public/assets/img/dota_logo.png" alt="DOTA" id="header-img">
            <h1>DOTA Aero Aviation Service, Inc.</h1>
        </div>
        <div class="logo-container">
            <h1>Philippine State College of Aeronautics</h1>
            <img src="public/assets/img/school_logo.png" alt="PSCA" id="header-img">
        </div>
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="landing.html">Homepage</a></li>
                <li><a class="nav-link" href="landing.html#ne&up">News updates</a></li>
                <li><a class="nav-link" href="landing.html#academics">ACADEMICS</a></li>
                <li><a class="nav-link" href="Announcement.html">Announcements</a></li>
            </ul>
        </nav>
    </header>
    <main>
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
                    <p>
                        Philsca is committed to protecting the privacy and confidentiality of personal information entrusted to us,
                        including data, information, and documents of students. In accordance with the Data Privacy Act of 2012 (Republic
                        Act No. 10173), we adhere to strict standards in the collection, use, and processing of personal data.
                    </p>
                    <p>
                        This means that:
                    <ol>
                        <li><strong>Consent:</strong> We will obtain consent from individuals before collecting any personal data, ensuring
                            that they are informed of the purpose of data collection and how their information will be used.</li>
                            <br>
                        <li><strong>Security:</strong> We implement appropriate technical, organizational, and physical security measures to
                            safeguard personal information against unauthorized access, disclosure, alteration, or destruction.</li>
                            <br>
                        <li><strong>Purpose Limitation:</strong> Personal data collected will only be used for the specified and legitimate
                            purposes for which it was collected.</li>
                            <br>
                        <li><strong>Data Minimization:</strong> We will only collect personal data that is necessary and relevant for the
                            purposes identified, and we will not retain it longer than necessary.</li>
                            <br>
                        <li><strong>Rights of Data Subjects:</strong> Individuals have the right to access, correct, and update their
                            personal information, as well as the right to request its deletion or removal from our records.</li>
                            <br>
                        <li><strong>Transparency:</strong> We are committed to providing transparency regarding our data processing
                            activities, including informing individuals about their rights and how they can exercise them.</li>
                    </ol>
                    </p>
                    <p>
                        By collecting and processing personal information responsibly and lawfully, we aim to uphold the privacy rights of
                        our students and ensure compliance with the Data Privacy Act of 2012.
                    </p>
                        <label class="checkbox">
                        <input type="checkbox" value="TRUE" title="I consent" /> I consent to the collection, use, and processing of my personal data as described above.
                        </label>
                    <p class="nxt-prev-button"><input type="button" name="next" class="fs_next_btn action-button"
                            value="Next" /></p>
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
                        <i class="fa fa-download"><a
                                href="https://cdn.discordapp.com/attachments/739424796814737418/1230599157069250610/nbi-clearance-form.pdf?ex=6633e7c6&is=662172c6&hm=e112b40706c44f4db260b96d30ddf189d96aff222ec6d962c624b6452bc3869a&"
                                download>Download File</a></i>
                        <br>
                    </div>
                    <div class="document">
                        <h3 style="text-align: center">Recommendation Letter</h3>
                        <img src="public/assets/img/ojt/Recommendation-Letter.png" alt="Document 2">
                        <i class="fa-solid fa-download"><a href="https://cdn.discordapp.com/attachments/739424796814737418/1231535789767266314/Recommendation_Letter.pdf?ex=66375015&is=6624db15&hm=556fcb749dae517791461c517d671632e9c22b12f7076f932a74e3bcf6710ba5&" download>Download File</a></i>
                        <br>
                    </div>
                    <div class="document">
                        <h3 style="text-align: center">2x2 ID Picture with Nametag (White Background)</h3>
                        <img src="public/assets/img/ojt/2x2-ID-Picture.png" alt="Document 3">
                        <br>
                    </div>
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
                    <div class="instruction">Click the button below to proceed to filling up the form and submitting the documents
                        for OJT application</div>
                    <div class="submit-button-wrapper">
                       <input type="button" name="submit" class="submit_btn" value="Submit" id="confirmBtn"/>
                        <br>
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                    </div>
                    <script>
                        // Function to handle click on the confirm button
                        document.getElementById("confirmBtn").addEventListener("click", function () {
                            showSuccessPopup();
                            // Redirect after 10 seconds
                            setTimeout(function () {
                                window.location.href = "register.html";
                            }, 10000); // 10 seconds delay
                        });

                        // Function to show the success pop-up
                        function showSuccessPopup() {
                            // Display the pop-up
                            document.getElementById("successPopup").style.display = "block";
                        }
                    </script>

                    <!-- Success pop-up -->
                    <div id="successPopup" class="success-popup">
                        <p>Success! You can now proceed to filling up the form and submitting the documents for OJT application.</p>
                        <a href="register.html">Proceed</a> <!--Done-->
                    </div>

                    </p>
                </div>
            </form>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.0/jquery.easing.js"
            type="text/javascript"></script>
       

        <!-- Start of Async Drift Code (message)-->
        <script>
            "use strict";

            !function () {
                var t = window.driftt = window.drift = window.driftt || [];
                if (!t.init) {
                    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
                    t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
                        t.factory = function (e) {
                            return function () {
                                var n = Array.prototype.slice.call(arguments);
                                return n.unshift(e), t.push(n), t;
                            };
                        }, t.methods.forEach(function (e) {
                            t[e] = t.factory(e);
                        }), t.load = function (t) {
                            var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                            var i = document.getElementsByTagName("script")[0];
                            i.parentNode.insertBefore(o, i);
                        };
                }
            }();
            drift.SNIPPET_VERSION = '0.3.1';
            drift.load('vf4skr37birm');
        </script>
        <!-- End of Async Drift Code (message)-->

    </main>
    <br><br>
    <footer class="footer">
        <div class="container-footer">
            <div class="row-footer">
                <div class="col text-center">
                    <p class="whitetext">Made With: <strong>JQuery</strong></p>
                    <p class="whitetext">Created by: <strong>Pineda Maria Cecilia || Rodelas Jr. Levi || Sayago Marc
                            David</strong></p>
                    <p class="whitetext">Students of MT-41 Universidad De Manila.</p>
                    <hr class="footer-line">
                    <div class="social-icons">
                        <div class="person">
                            <a href="https://github.com/raicem-caelia" target="_blank"><img
                                    src="public/assets/img/github.png" alt="GitHub" class="logo"></a>
                            <a href="https://www.facebook.com/Raicem.Caelia.79" target="_blank"><img
                                    src="public/assets/img/fb.png" alt="Facebook" class="logo"></a>
                        </div>
                        <div class="person">
                            <a href="https://github.com/LaffeyTaffey" target="_blank"><img
                                    src="public/assets/img/github.png" alt="GitHub" class="logo"></a>
                            <a href="https://www.facebook.com/Danke.Danke11/" target="_blank"><img
                                    src="public/assets/img/fb.png" alt="Facebook" class="logo"></a>
                        </div>
                        <div class="person">
                            <a href="https://github.com/paslangbenteuno" target="_blank"><img
                                    src="public/assets/img/github.png" alt="GitHub" class="logo"></a>
                            <a href="https://www.facebook.com/Naixs" target="_blank"><img src="public/assets/img/fb.png"
                                    alt="Facebook" class="logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="public/js/ojt-requirements.js"></script>
</html>