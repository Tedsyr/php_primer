<?php

    $title = "Arrays and Printouts";

    include 'includes/header.php' ?>

    
    <hi><?php echo $title ?></hi>

    <?php

    // A variable
    $num = 3;

    // an array 
    // only one datatype
    $numbers = array (1,2,3,4,5,6,7,8,9,10,58,23,76,45,89,76,56,66,450,90,222,333,567,12);

    echo $numbers[5];

    echo "<p>$numbers[9]</p>";

    $size = count($numbers);

    echo "<p> Array Numbers is size: $size</p>";

    for($count = 0; $count < $size; $count++){
        echo "<p>$numbers[$count]</p>";


    }

    ?>

<?php require 'includes/footer.php' ?>