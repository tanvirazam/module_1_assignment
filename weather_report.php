<?php 
$temperature='31°C';

if($temperature<="20°C"){
    echo "It's freezing!";
}elseif($temperature>="21°C" && $temperature<="30°C"){
    echo "It's cool.";
}elseif($temperature>="31°C"){
    echo "It's warm.";
}