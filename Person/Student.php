<!-- Child Class -->

<?php
    include "Person.php";

    class Student extends Person {
          # Properties
          private $student_id;

          # Methods
          public function __construct($new_name,$new_gender,$new_age,$new_student_id){
            $this->name = $new_name;
            $this->gender = $new_gender;
            $this->age = $new_age;
            $this->student_id = $new_student_id;
        }

        public function getStudentId(){
             return $this->student_id;
        }
    }




?>