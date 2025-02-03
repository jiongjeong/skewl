<?php

// Complete the following function 
// Check the conversion table on the slides
function convert_to_grade($score)
{
    if ($score >= 80) {
        return "A";
    } elseif (79 >= $score >= 70) {
        return "B";
    } elseif (69 >= $score >= 60) {
        return "C";
    } elseif (59 >= $score >= 50) {
        return "D";
    } else {
        return "F";
    }
}

?>
<!DOCTYPE html>
<html>

<body>
    <?php
    // In real-life, the following will be retrieved from a form
    $input_score = 80;

    echo ("Score: $input_score");
    echo ("<br>");
    echo ("Grade:" . convert_to_grade($input_score));
    ?>
</body>

</html>