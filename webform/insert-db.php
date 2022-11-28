<?php
    include_once 'db.php';
    $first = $_POST['first'];
    $last = $_POST['last'];
    $program = $_POST['program'];
    $focus = $_POST['focus_area'];
    $year = $_POST['graduation_year'];
    $mail = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $org = $_POST['org'];
    $title = $_POST['title'];
    $areas = $_POST['areas'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    
    $sql = "INSERT INTO alumni (FirstName, LastName, Program, FocusArea, gradyear, Email, phone, orgname, title, interest, availableday, timeofday) VALUES 
    ('$first', '$last', '$program', '$focus', '$year', '$mail', '$contact_number', '$org', '$title', '$areas', '$day', '$time');";

    mysqli_query($conn, $sql);

    header("Location: success.html");
