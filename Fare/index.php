<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fare Activity</title>
</head>
<body>
   <form action="" method="post">
      <input type="number" name="age" id="age" placeholder="Age" min="10" max="80">
      <br>
      <input type="number" name="distance" id="distance" placeholder="Distance(km)">
      <br>
      <button type="submit" name="btn_compute">Compute</button>
   </form>
  
</body>
</html>

<?php
   include "Fare.php";

   if(isset($_POST['btn_compute'])){
       $age = $_POST['age'];
       $distance = $_POST['distance'];
       
       # Instantiate class
       $calculator = new Fare;

       # SETTERS
       $calculator->setAge($age);
       $calculator->setDistance($distance);
       $calculator->calculateFare();



       # GETTERS
       echo "Age: ".$calculator->getAge()."years old<br>";
       echo "Distance: ".$calculator->getDistance()."<br>";
       echo "Fare :" .$calculator->getcalculateFare()."<br><br>";
        }



?>