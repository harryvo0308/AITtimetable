<?php
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ait_timetable";

 $conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['export'])){
if($_GET['export'] == 'true'){
$query = mysqli_query($conn, 'select * from m_timetable INNER JOIN groups ON m_timetable.Groups = groups.G_ID '); // Get data from Database from demo table


    $delimiter = ",";
    $filename = "Timetable_Monday." . date('d/m/y') . ".csv"; // Create file name

    //create a file pointer
    $f = fopen('php://memory', 'w');

    //set column headers
    $fields = array('Group', 'Room', 'Subject', 'Time', 'Teacher','Semester');
    fputcsv($f, $fields, $delimiter);

    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){

        $lineData = array($row['G_Name'], $row['Room'], $row['Subject'], $row['Time'], $row['Teacher'], $row['Semester']);
        fputcsv($f, $lineData, $delimiter);
    }

    //move back to beginning of file
    fseek($f, 0);

    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //output all remaining data on a file pointer
    fpassthru($f);

 }
}
//Tuesday
if(isset($_GET['export1'])){
if($_GET['export1'] == 'true'){
$query = mysqli_query($conn, 'select * from t_timetable INNER JOIN groups ON t_timetable.Groups = groups.G_ID '); // Get data from Database from demo table


    $delimiter = ",";
    $filename = "Timetable_Tuesday." . date('d/m/y') . ".csv"; // Create file name

    //create a file pointer
    $f = fopen('php://memory', 'w');

    //set column headers
    $fields = array('Groups', 'Room', 'Subject', 'Time', 'Teacher','Semester');
    fputcsv($f, $fields, $delimiter);

    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){

        $lineData = array($row['G_Name'], $row['Room'], $row['Subject'], $row['Time'], $row['Teacher'], $row['Semester']);
        fputcsv($f, $lineData, $delimiter);
    }

    //move back to beginning of file
    fseek($f, 0);

    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //output all remaining data on a file pointer
    fpassthru($f);

 }
}
//Wed
if(isset($_GET['export2'])){
if($_GET['export2'] == 'true'){
$query = mysqli_query($conn, 'select * from w_timetable INNER JOIN groups ON w_timetable.Groups = groups.G_ID '); // Get data from Database from demo table


    $delimiter = ",";
    $filename = "Timetable_Wednesday." . date('d/m/y') . ".csv"; // Create file name

    //create a file pointer
    $f = fopen('php://memory', 'w');

    //set column headers
    $fields = array('Group', 'Room', 'Subject', 'Time', 'Teacher','Semester');
    fputcsv($f, $fields, $delimiter);

    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){

        $lineData = array($row['G_Name'], $row['Room'], $row['Subject'], $row['Time'], $row['Teacher'], $row['Semester']);
        fputcsv($f, $lineData, $delimiter);
    }

    //move back to beginning of file
    fseek($f, 0);

    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //output all remaining data on a file pointer
    fpassthru($f);

 }
}
//Thu
if(isset($_GET['export3'])){
if($_GET['export3'] == 'true'){
$query = mysqli_query($conn, 'select * from th_timetable INNER JOIN groups ON th_timetable.Groups = groups.G_ID '); // Get data from Database from demo table


    $delimiter = ",";
    $filename = "Timetable_Thursday." . date('d/m/y') . ".csv"; // Create file name

    //create a file pointer
    $f = fopen('php://memory', 'w');

    //set column headers
    $fields = array('Group', 'Room', 'Subject', 'Time', 'Teacher','Semester');
    fputcsv($f, $fields, $delimiter);

    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){

        $lineData = array($row['G_Name'], $row['Room'], $row['Subject'], $row['Time'], $row['Teacher'], $row['Semester']);
        fputcsv($f, $lineData, $delimiter);
    }

    //move back to beginning of file
    fseek($f, 0);

    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //output all remaining data on a file pointer
    fpassthru($f);

 }
}
//Fri
if(isset($_GET['export4'])){
if($_GET['export4'] == 'true'){
$query = mysqli_query($conn, 'select * from f_timetable INNER JOIN groups ON f_timetable.Groups = groups.G_ID '); // Get data from Database from demo table


    $delimiter = ",";
    $filename = "Timetable_Friday." . date('d/m/y') . ".csv"; // Create file name

    //create a file pointer
    $f = fopen('php://memory', 'w');

    //set column headers
    $fields = array('Group', 'Room', 'Subject', 'Time', 'Teacher','Semester');
    fputcsv($f, $fields, $delimiter);

    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){

        $lineData = array($row['G_Name'], $row['Room'], $row['Subject'], $row['Time'], $row['Teacher'], $row['Semester']);
        fputcsv($f, $lineData, $delimiter);
    }

    //move back to beginning of file
    fseek($f, 0);

    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //output all remaining data on a file pointer
    fpassthru($f);

 }
}
?>
