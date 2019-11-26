<?php
if(isset($_POST['insert']))
{
    include ("database.php");
    $query = "INSERT INTO m_timetable (Groups, Room, Subject, Time, Teacher, Semester) VALUES (:group,:room,:subject,:time,:teacher,:semester)";
    $statement = $conn->prepare($query);
    $statement->execute(
    array(
        ':group'  => $_POST['group'],
        ':room'  => $_POST['room'],
        ':subject'  => $_POST['subject'],
        ':time'   => $_POST['time'],
        ':teacher' => $_POST['teacher'],
        ':semester'  => $_POST['semester']
        )
    );
 $result = $statement->fetchAll();

 if(isset($result))
 {
     $message = "Done";
  echo "<script type='text/javascript'>alert('$message');</script>";
 }
}


if(isset($_POST['inserttue']))
{
    include ("database.php");
    $querytue = "INSERT INTO t_timetable (Groups, Room, Subject, Time, Teacher, Semester) VALUES (:grouptue,:roomtue,:subjecttue,:timetue,:teachertue,:semestertue)";
    $statementtue = $conn->prepare($querytue);
    $statementtue->execute(
    array(
        ':grouptue'  => $_POST['grouptue'],
        ':roomtue'  => $_POST['roomtue'],
        ':subjecttue'  => $_POST['subjecttue'],
        ':timetue'   => $_POST['timetue'],
        ':teachertue' => $_POST['teachertue'],
        ':semestertue'  => $_POST['semestertue']
        )
    );
 $resulttue = $statementtue->fetchAll();

 if(isset($resulttue))
 {
     $message = "Done";
  echo "<script type='text/javascript'>alert('$message');</script>";
 }
}


if(isset($_POST['insertwed']))
{
    include ("database.php");
    $querywed = "INSERT INTO w_timetable (Groups, Room, Subject, Time, Teacher, Semester) VALUES (:groupwed,:roomwed,:subjectwed,:timewed,:teacherwed,:semesterwed)";
    $statementwed = $conn->prepare($querywed);
    $statementwed->execute(
    array(
        ':groupwed'  => $_POST['groupwed'],
        ':roomwed'  => $_POST['roomwed'],
        ':subjectwed'  => $_POST['subjectwed'],
        ':timewed'   => $_POST['timewed'],
        ':teacherwed' => $_POST['teacherwed'],
        ':semesterwed'  => $_POST['semesterwed']
        )
    );
 $resultwed = $statementwed->fetchAll();

if(isset($resultwed))
 {
     $message = "Done";
  echo "<script type='text/javascript'>alert('$message');</script>";
 }
}


if(isset($_POST['insertthus']))
{
    include ("database.php");
    $querythus = "INSERT INTO th_timetable (Groups, Room, Subject, Time, Teacher, Semester) VALUES (:groupthus,:roomthus,:subjectthus,:timethus,:teacherthus,:semesterthus)";
    $statementthus = $conn->prepare($querythus);
    $statementthus->execute(
    array(
        ':groupthus'  => $_POST['groupthus'],
        ':roomthus'  => $_POST['roomthus'],
        ':subjectthus'  => $_POST['subjectthus'],
        ':timethus'   => $_POST['timethus'],
        ':teacherthus' => $_POST['teacherthus'],
        ':semesterthus'  => $_POST['semesterthus']
        )
    );
 $resultthus = $statementthus->fetchAll();

 if(isset($resultthus))
 {
     $message = "Done";
  echo "<script type='text/javascript'>alert('$message');</script>";
 }
}


if(isset($_POST['insertfri']))
{
    include ("database.php");
    $queryfri = "INSERT INTO f_timetable (Groups, Room, Subject, Time, Teacher, Semester) VALUES (:groupfri,:roomfri,:subjectfri,:timefri,:teacherfri,:semesterfri)";
    $statementfri = $conn->prepare($queryfri);
    $statementfri->execute(
    array(
        ':groupfri'  => $_POST['groupfri'],
        ':roomfri'  => $_POST['roomfri'],
        ':subjectfri'  => $_POST['subjectfri'],
        ':timefri'   => $_POST['timefri'],
        ':teacherfri' => $_POST['teacherfri'],
        ':semesterfri'  => $_POST['semesterfri']
        )
    );
 $resultfir = $statementfri->fetchAll();

 if(isset($resultfri))
 {
     $message = "Done";
  echo "<script type='text/javascript'>alert('$message');</script>";
 }
}
?>
