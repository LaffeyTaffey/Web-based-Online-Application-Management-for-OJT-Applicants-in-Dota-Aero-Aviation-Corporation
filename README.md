# Web-based-Online-Application-Management-for-OJT-Applicants-in-Dota-Aero-Aviation-Corporation

<img src="https://i.imgur.com/ywrWCmu.jpeg">
<br>
    <h1 style="text-align: center;"><p align="center">💬 A Web-based Online Application Management for OJT Applicants in Dota Aero Aviation Corporation made using:</p></h1>
<p align="center">
    <img src="https://i.imgur.com/AafZJLN.png" width="150">
    <img src="https://i.imgur.com/k2bfXVm.png" width="150">
    <img src="https://i.imgur.com/KepRaPw.png" width="250">
</p>

<p align="center">
    <img src="https://i.imgur.com/gtaxMKh.png" width="150">
    <img src="https://i.imgur.com/qVxQNU1.png" width="150">
    <img src="https://i.imgur.com/QGDGv5x.png" width="150">
    <img src="https://i.imgur.com/uztBsTD.png" width="150">
    <img src="https://i.imgur.com/nIlpdxR.png" width="150">
    <img src="https://i.imgur.com/bqqdfpn.png" width="150">
</p>

[![Top Langs](https://github-readme-stats.vercel.app/api/top-langs/?username=LaffeyTaffey)](https://github.com/LaffeyTaffey/github-readme-stats)
<br>

<h2><p align="center">Feature Highlights</p></h2>
<p align="center">
....
</p>

<br>
    <h3 style="text-align: center;"><p align="center">Contributors</p></h3>
<p align="center"> 
    😊 Pineda Maria Cecilia
    <a href="https://www.facebook.com/Raicem.Caelia.79">
        <img src="https://img.icons8.com/color/48/000000/facebook.png" width="20">
</p>
    </a>
<p align="center">
    🤪 Rodelas Jr. Levi
    <a href="https://www.facebook.com/Danke.Danke11/">
        <img src="https://img.icons8.com/color/48/000000/facebook.png" width="20">
</p>
    </a>
<p align="center">
    😜 Sayago Marc David
    <a href="https://www.facebook.com/Naixs">
        <img src="https://img.icons8.com/color/48/000000/facebook.png" width="20">
    </a>
</p>

<br>

<h2><p align="center">Documentation</p></h2>
<h4><p align="center">To get started, we will describe every purpose of each files included in this repository and provide other information not only to the files.</p></h4>
<h4><p align="center">JSON files</p></h4>

| File                                | Description and Purpose                                                                                                                                                                                       |
|-------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `package.json & package-lock.json` | The **purpose** of this `package.json` file is to provide metadata about the project, particularly regarding its dependencies and how it should be executed. The file describes a server application tailored for managing On-the-Job Training (OJT) applicants at Dota Aero Aviation Corporation. The main functionality is to facilitate web-based online application management. The file specifies the name, version, and description of the project, along with the main file to execute (`server.js`). Additionally, it lists the necessary dependencies for the project to function, including frameworks like Express.js for handling web requests, database tools like Knex for database queries, and utility libraries like Body-parser for parsing incoming request bodies. The provided scripts section defines commands to start the server, making it easier for developers to manage and run the application during development. |

<h4><p align="center">HTML files</p></h4>

| File                     | Description and Purpose                                                                                                                                                                                                                                                                               |
|--------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `404.html`               | To create a custom error page for the HTTP 404 error (file not found). This error page is designed to be visually appealing and informative for users who encounter a missing page on a website.                                                                                                       |
|                          | **Visual Styling:** It styles the error page with custom fonts, colors, animations, and layout to make it visually appealing and attention-grabbing.                                                                                                                                                 |
|                          | **Error Message:** It displays the error code "404" along with the message "FILE NOT FOUND!" in a prominent manner, alerting users to the missing content.                                                                                                                                               |
|                          | **Additional Information:** The page includes supplementary information, such as a message prompting users to go back to the previous webpage and a comment indicating that the file being searched for is not in its expected location.                                                           |
|                          | **Responsive Design:** The page is designed to be responsive, with a media query that adjusts the display of certain elements based on the screen height, ensuring optimal viewing across different devices.                                                                                               |
| `admin-login.html`       | A login page for an administrative panel of a website.                                                                                                                                                                                                                                               |
|                          | **Meta Tags and Links:** The document includes meta tags for viewport settings and links to external resources such as CSS and JavaScript files. It also sets a favicon for the website.                                                                                                             |
|                          | **Header:** The header section contains the logo and name of the website, as well as navigation links to other pages like announcements and the homepage.                                                                                                                                               |
|                          | **Main Content:** The main section of the page features a login form designed for administrative access. It includes input fields for the administrator's reference number and password. There's also a checkbox for keeping the user signed in.                                                  |
|                          | **Information Section:** This section provides additional options and assistance for users. It includes links for forgotten passwords and a button to display help information.                                                                                                                     |
|                          | **Footer:** The footer displays information about the creators of the website, indicating that it was created by students of a specific course at Universidad De Manila. It also includes social media links for the creators.                                                                             |
|                          | **JavaScript:** The document includes JavaScript code for asynchronous loading of the Drift chat widget, as well as additional scripts for login functionality and global behavior.                                                                                                                      |
| `admin-ojt-results.html` | To represent an admin panel interface for managing various aspects of a system. Here's a summary of its key components and functionalities:                                                                                                                                                           |
|                          | **Meta Tags and Links:** The document includes standard meta tags for character set, viewport settings, and compatibility, along with links to external CSS and JavaScript files. It also sets a favicon for the website.                                                                             |
|                          | **Header Section:** The header section consists of a menu and a top bar. The menu contains links to different sections of the admin panel, each represented by an icon and a descriptive label. The top bar includes navigation links to other pages, such as the homepage, notifications, and a logout option. |
|                          | **Main Content:** The main content area displays the current page title ("Check OJT Ref#") and provides a search functionality for finding OJT reference numbers. Additionally, there's a dashboard section with cards displaying weather information, notes, and a video background.          |
|                          | **Side Panel:** The side panel contains additional cards with notes and weather information. It also includes a video element for displaying background video content.                                                                                                                                  |
|                          | **JavaScript:** The document includes JavaScript code for asynchronous loading of the Drift chat widget, as well as additional scripts for admin panel functionality and managing OJT admission results.                                                                                              |
| `admin-print.html`             | The **main purpose** of this HTML document is to provide an admin panel interface for printing the acceptance or rejection image of OJT (On-the-Job Training) applicants. It allows administrators to manage various aspects related to OJT admission results, including searching for OJT reference numbers and printing corresponding images. Additionally, the document includes functionalities for navigation, displaying weather information, and providing notes for reference. |
| `admin-profile-settings.html`  | This **file** is for managing the admin's profile settings. It **includes** links to different sections like Dashboard, Check OJT Ref#, Print Permit, Validate, Profile Settings, and Manage Database. The **main content** area displays the admin's profile information along with options to change or remove the profile picture. There are also notes about tasks to be completed, related to development or updates.           |
| `admin-validate.html`          | This **file** is for printing image results, possibly related to OJT applications. It **includes** a form or content section where filled-up forms and documents are displayed. The **content** area includes options to accept or reject applications.                                                                                                                            |
| `admin.html`                   | This **file** represents the main dashboard of the admin panel. The **main content** area consists of cards, possibly displaying various pieces of information or tasks.                                                                                                                                                  |












