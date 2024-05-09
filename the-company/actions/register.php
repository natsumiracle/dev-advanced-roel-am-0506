<?php
   include "../classes/User.php";

   #Createa a new ovject
   $user = new User;

   # Call the method
   $user->store($_POST);
   # $request['name of the input field']
   # $_POST holds all the date form the form in views/register.php



?>