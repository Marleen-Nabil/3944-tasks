<?php
declare (strict_types=1);
function checkTemperature (float $temperature) : string
{
    if ($temperature >=40) echo 'Very Hot';
    elseif ($temperature >=30) echo 'Hot';
    elseif ($temperature >= 20) echo 'Warm';
    elseif($temperature >=10) echo 'Cold';
    elseif ($temperature >=0) echo 'Very Cold';
    else echo 'invalid data';
    return '';
}
$weather_status = checkTemperature (45);
echo $weather_status;