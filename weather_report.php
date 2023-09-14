<?php 
$temperature = 52;
if ($temperature < 20) {
    echo "It's freezing!.\n";
} elseif ($temperature >= 20 && $temperature <= 30) {
    echo "It's cool.\n";
} else {
    echo "It's warm.\n";
}
