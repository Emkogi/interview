<?php
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "staff";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    // Get the form data
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $sex = $_POST['sex'];
    $college = $_POST['college'];
    $degree_course = $_POST['degree_course'];
    $po_box = $_POST['po_box'];
    $mobile_no = $_POST['mobile_no'];

    // Insert the data into the database
    $sql = "INSERT INTO staff (name, dob, sex, college, degree_course, po_box, mobile_no)
    VALUES ('$name', '$dob', '$sex', '$college', '$degree_course', '$po_box', '$mobile_no')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
