<?php
class Person {
    private $name;
    private $dob;
    private $sex;
    private $college;
    private $degree_course;
    private $po_box;
    private $mobile_no;

    public function __construct($id) {
        // Connect to the database
        $servername = "localhost";
        $username = "your_username";
        $password = "your_password";
        $dbname = "staff";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve the data from the database
        $sql = "SELECT * FROM staff WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        // Set the class properties
        $this->name = $row['name'];
        $this->dob = $row['dob'];
        $this->sex = $row['sex'];
        $this->college = $row['college'];
        $this->degree_course = $row['degree_course'];
        $this->po_box = $row['po_box'];
        $this->mobile_no = $row['mobile_no'];
    }

    public function personal_details() {
        return "Name: " . $this->name . ", DOB: " . $this->
?>