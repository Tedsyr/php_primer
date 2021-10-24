
<?php

$title = "Index";
include 'includes/header.php' ?>



<!-- Basic html -->

    <h1> Hello HTML - PHP Primer</h1>
    <br/>
    <?php 
    //
        echo 'Hello dear!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';

    ?>

    <?php
// declear variable
    $name = 'Tedroy Williams';
    $age = 30;

    // echo variable
    echo $name;
    echo '<h1>My Name Is: '.$name.' </h1>';
    echo '<h1>My Age Is: '.$age.' </h1>';

//echo using double quotes and interpolation
    echo '<h1>My Name Is: '.$name.' </h1>';
    ?>

<button type="button" class="btn btn-dark">CLICK ME!</button>
<button type="button" class="btn btn-primary">CLICK ME!</button>
<button type="button" class="btn btn-success">CLICK ME!</button>
<a href="https://www.heroku.com"target="_blank" class="btn btn-danger">Heroku.com</a>


<?php require 'includes/footer.php' 

?>