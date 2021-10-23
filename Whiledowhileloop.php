<?php

    $title = "Do-While Loops";

    include 'includes/header.php' ?>

   
    <hi>While Loops </hi>

    <?php 

        $grade = 0;
         //  while($grade < 10){


       // echo '<p> I AM LESS THAN 10!</p>';

        //}

        // Pre- Condition loop

     while($grade < 10){

        echo '<p>I AM LESS THAN 10!</p>';
        $grade++;

     }

     echo 'EXIT LOOP!';

      ?>

        <hi> Do-While Loops </hi>


      <?php
     $grade = 0;
     do{

        echo '<p>I AM DO WHILE LOOP</p>';
        $grade++;

      }
        
        while($grade < 10); 
     echo 'EXIT LOOP!';

     ?>

<?php require 'includes/footer.php' ?>