<?php

    $title = "String Manipulation";

    include 'includes/header.php' ?>


    <hi>String Manipulation</hi>
    <?php

    $phrase1 = " student who came late";
    $phrase2 = " to class, stand with the chair";
    $name = "tedroy Williams";
    echo $phrase1 . ",Name Slimmas,". $phrase2;
    echo '<br/>';


    echo '<hr/>';

    // string Transformation
    echo 'Uppercase first letter:' . ucfirst($name).'<br/>';
    echo 'Uppercase first letter of each word:' . ucwords($name).'<br/>';
    echo 'Upper Case: '. strtoupper($name). '<br/>';
    echo 'Lower Case: '. strtolower("THIS IS ALL LOWER CASE"). '<br/>';
    echo '<hr/>';
    echo 'Repeat String: ' . str_repeat('a' ,10).'<br/>';
    echo 'Repeat String - Nested Function: ' , strtoupper(str_repeat('a' ,10)).'<br/>';
    echo 'Get a Substring: ' . substr($name, 3, 5).'<br/>';
    echo '<hr/>';


    echo ' Get position of string: ' . strpos($name,'w').'<br/>';

    echo ' Find Character "E": ' . strchr($name, 'E').'<br/>';
    echo ' Find Character "r": ' . strchr($name, 'r').'<br/>';
    echo ' Find Character "o": ' . strchr($name, 'o').'<br/>';
    echo ' Find Character "y": ' . strchr($name, 'y').'<br/>';

    echo 'Find Length of String: ' . strlen($name) .'<b/>';

    echo 'without Trim: '. "A" . "B C D " . "E" . '<br/>';
    echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
    echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
    echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

    echo 'Replace string with another: '. str_replace("stand", "sit", $phrase2 ) . '<br/>';


    ?> 

<?php require 'includes/footer.php' ?>