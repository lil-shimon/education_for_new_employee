<?php
    for ($i; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz";
            echo "\n";
        } else {
            echo $i;
            echo "\n";
        }
    }
?>

