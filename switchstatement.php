<?php

$title = "Switch Statement";

include 'includes/header.php' ?>

   
<h1>Switch Statement
</h1>

<?php

$grade = 'A';

switch($grade){

    case 'A';
        echo '<h2 style="color: Red">You are a Superstar!</h2>';
        break;
        case 'B';

        echo '<h2 style="color: blue">You Did Awesome!!</h2>';
     break;

     default:
        echo '<h2 style="color: Green">You have Failed!!</h2>';
        break;
}

?>

<?php require 'includes/footer.php' ?>