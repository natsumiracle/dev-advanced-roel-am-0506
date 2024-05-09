<!-- Display Values -->

<?php
    include "Student.php";

    $first_student = new Student("William","Male",12,"011-A01");
   
    echo"Name : ". $first_student->getName() ."<br>";
    echo"Gender : ". $first_student->getGender() ."<br>";
    echo"Age : ". $first_student->getAge() ."<br>";
    echo"Student ID : ". $first_student->getStudentId() ."<br>";




?>