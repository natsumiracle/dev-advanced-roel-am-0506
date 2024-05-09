<!-- Parent Class -->

<?php
   class Person {
      # Properties
      protected $name;
      protected $gender;
      protected $age;

      # Methods
      public function __construct($new_name,$new_gender,$new_age){
          $this->name = $new_name;
          $this->gender = $new_gender;
          $this->age = $new_age;
      }

      #Getters
      public function getName(){
         return $this->name;
      }
      public function getGender(){
        return $this->gender;
     }
     public function getAge(){
      return $this->age;
   }

   }




?>