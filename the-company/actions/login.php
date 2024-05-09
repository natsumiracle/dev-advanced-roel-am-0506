<?php

include "../classes/User.php";

$user = new User;

# Call the method
$user->login($_POST);
# Same with the action/register.php, this file will connect the form drom the class User and call the 
# $_POST holds the data from the form




?>