<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'webbaseojt';

// Connect to the database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data for the pie chart
$sql = "SELECT first, COUNT(*) as count FROM ojtapplicants GROUP BY category";
$result = $conn->query($sql);

// Create an array to store the data
$data = array();

// Loop through the results and store the data
while ($row = $result->fetch_assoc()) {
    $data[] = array(
        'label' => $row['category'],
        'value' => $row['count']
    );
}

// Close the database connection
$conn->close();

// Include the Google Charts library
echo '<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>';

// Create the pie chart
echo '<div id="piechart"></div>';
echo '<script type="text/javascript">';
echo 'google.charts.load("current", {packages:["corechart"]});';
echo 'google.charts.setOnLoadCallback(drawChart);';
echo 'function drawChart() {';
echo 'var data = google.visualization.arrayToDataTable([';
echo '["Category", "Count"],';
foreach ($data as $row) {
    echo '["' . $row['label'] . '", ' . $row['value'] . '],';
}
echo ']);';
echo 'var options = {';
echo 'title: "Pie Chart Example",';
echo '};';
echo 'var chart = new google.visualization.PieChart(document.getElementById("piechart"));';
echo 'chart.draw(data, options);';
echo '}';
echo '</script>';
