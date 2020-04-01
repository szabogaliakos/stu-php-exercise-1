<?php

if (isset($_GET["input_area"])){
    $area = $_GET["input_area"];
    $radius = sqrt($area / pi());
}
else{
    $radius = $_GET["input_radius"];
    $area = $radius * $radius * pi();
}

echo $area;
echo $radius;