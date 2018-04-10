<?php

$gewicht = $_GET["gewicht"];
$lengte = $_GET["lengte_cm"];
BMIcalc($gewicht,$lengte);

function BMIcalc($gewicht,$lengte){
    $lengte2 = $lengte/100;
    $bmi = $gewicht / ($lengte2 * $lengte2 );
    $bmi = round($bmi,1);
    echo 'je lengte is '. $lengte . '<br>';
    echo 'je gewicht is '. $gewicht. '<br>';
    echo 'je BMI is '.$bmi . '<br>';
    switch ($bmi){
        case $bmi < 18.5:
            echo 'Je hebt <b> ondergewicht </b>';
            break;
        case $bmi >= 18.5 && $bmi < 25:
            echo 'Je bent <b> normaal </b>';
            break;
        case $bmi >= 25 && $bmi < 27:
            echo 'Je hebt <b> licht overgewicht </b>';
            break;
        case $bmi >= 27 && $bmi <30:
            echo 'Je hebt <b> matig overgewicht </b>';
            break;
        case $bmi >= 30 && $bmi <40:
            echo 'Je hebt <b> obesitas </b>';
            break;
        case $bmi >= 40:
            echo 'Je hebt <b> morbide obesitas </b>';
            break;
        default:
            echo 'dit is niet normaal';
    }


}
