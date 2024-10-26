<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$susses_array = [
    'Ali' => array('Math' =>10,'english' => 30,'urdu' => 50),
    'Ahmad' => array('Math' => 40,'english' => 60,'urdu' => 70),
    'Osman' => array('Math' => 80,'english' => 90,'urdu' => 100),
];

foreach( $susses_array as $name => $subjects){
    echo "Name: ".$name."<br>";
    $total = 0;  
    $subject_count = count($subjects);  

    foreach($subjects as $subject => $score){
        echo $subject." : ".$score."<br>";
        $total += $score;  
    }

    $percentage = ($total / ($subject_count * 100)) * 100;  
    echo "Total Score: ".$total."<br>";
    echo "Percentage: ".number_format($percentage, 2)."%<br>";  
    echo "<br>";
}
?>,     
</body>
</html>