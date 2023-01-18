<?php
class Person {
    private $name;
    private $dob;
    private $sex;
    private $college;
    private $degree_course;
    private $po_box;
    private $mobile_no;

    public function personal_details($name, $dob, $sex) {
        $this->name = $name;
        $this->dob = $dob;
        $this->sex = $sex;
    }

    public function educational_info($college, $degree_course) {
        $this->college = $college;
        $this->degree_course = $degree_course;
    }

    public function contact_details($po_box, $mobile_no) {
        $this->po_box = $po_box;
        $this->mobile_no = $mobile_no;
    }
    $person = new Person();
$person->personal_details("John Smith", "1990-01-01", "male");
$person->educational_info("ABC College", "Computer Science");
$person->contact_details("PO Box 1234", "555-555-5555");
}

?>