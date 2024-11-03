<?php
require('config.php'); //connect to the database

// //Initialize Variables
$First_Name = $_POST['fName'];
$Middle_Name = $_POST['mName'];
$Last_Name = $_POST['lName'];

$Address_applicant = $_POST['address'];
$Gender = $_POST['gender'];

$Birth_Date = $_POST['birthDate'];
$Birth_Place = $_POST['birthPlace'];
$Religion = $_POST['religion'];

$Email = $_POST['email'];
$Phone_number = $_POST['pNumber'];
$Interest = $_POST['interest'];

$University =  $_POST['university'];
$School_Address = $_POST['schoolAddress'];
$Course = $_POST['degree'];

$Year_level = $_POST['yearLevel'];
$Adviser = $_POST['adviser'];
$Training_hours = $_POST['trainingHours'];

$Area_internship = $_POST['department'];
$Start_report = $_POST['dateReport'];
$Finish_report = $_POST['dateFinish'];


// File Upload Handling
$uploadDirectory = 'uploaded_documents/';
$uploadedFiles = [];

$fileFields = [
    'uploadImage' => 'Picture',
    'uploadMOA' => 'MOA',
    'uploadEndorsement' => 'Endorsement',
    'uploadNBI' => 'NBI'
];

foreach ($fileFields as $inputName => $dbColumn) {
    if (isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES[$inputName]['tmp_name'];
        $fileName = $_FILES[$inputName]['name'];
        $fileSize = $_FILES[$inputName]['size'];
        $fileType = $_FILES[$inputName]['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $uploadedFiles[$dbColumn] = $newFileName;
    } else {
        $uploadedFiles[$dbColumn] = null;
    }
}


try {

    $query = "INSERT INTO `ojtapplicants`(`ID`, `FirstName`, `MiddleName`, `LastName`, 
        `Address_App`, `Gender`, `BirthDate`, `BirthPlace`, `Religion`, `Email`, `PhoneNo`, 
        `Hobby_Interest`, `University`, `SchoolAddress`, `DegreeProgram`, `YearLevel`, `Adviser`,
         `TotalNo.`, `Area_intern`, `StartDate`, `Finish_date`, `Picture`, `NBI`, `MOA`, `Endorsement`)";

    $query .= "VALUES (' ', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
    $q = mysqli_stmt_init($dbcon);
    mysqli_stmt_prepare($q, $query);
    mysqli_stmt_bind_param(
        $q,
        'sssssssssissssssisssssss',
        $First_Name,
        $Middle_Name,
        $Last_Name,
        $Address_applicant,
        $Gender,
        $Birth_Date,
        $Birth_Place,
        $Religion,
        $Email,
        $Phone_number,
        $Interest,
        $University,
        $School_Address,
        $Course,
        $Year_level,
        $Adviser,
        $Training_hours,
        $Area_internship,
        $Start_report,
        $Finish_report,
        $uploadedFiles['Picture'],
        $uploadedFiles['NBI'],
        $uploadedFiles['MOA'],
        $uploadedFiles['Endorsement']
    );

    mysqli_stmt_execute($q);

    if (mysqli_stmt_affected_rows($q) == 1) { // One record inserted
        $last_id = mysqli_insert_id($dbcon);
        $userFolder = $uploadDirectory . 'ID_' . $last_id;

        if (!file_exists($userFolder)) {
            mkdir($userFolder, 0777, true);
        }

        foreach ($fileFields as $inputName => $dbColumn) {
            if ($uploadedFiles[$dbColumn]) {
                $dest_path = $userFolder . '/' . $uploadedFiles[$dbColumn];
                move_uploaded_file($_FILES[$inputName]['tmp_name'], $dest_path);
            }
        }

        header("location: successfully_registeres.php");
        exit();
    } else {
        throw new Exception("Failed to insert record into database.");
    }
} catch (Exception $e) {
    print "The system is busy, please try later. " . $e->getMessage();
} catch (Error $e) {
    print "The system is busy, please try again later. " . $e->getMessage();
}
?>
