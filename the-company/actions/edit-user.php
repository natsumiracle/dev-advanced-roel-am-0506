<?php
    include "../classes/User.php";

    $user = new User;
    $user->update($_POST, $_FILES);
    # $_FILES holds an array of items uploaded to the current script via the HTTP POST method


?>