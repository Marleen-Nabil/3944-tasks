<?php
declare (strict_types=1);
function getDayName (int $dayNum) : string 
{
    switch ($dayNum) {
        case $dayNum === 1: 
            echo 'Sunday';
            break;
       case $dayNum === 2:
        echo 'Monday';
        break;
       case $dayNum ===3:
        echo 'Tuesday';
        break;
        case $dayNum === 4:
            echo 'Wednesday';
            break;
            case $dayNum === 5:
                echo 'Thursday';
                break;
                case $dayNum === 6:
                    echo 'Friday';
                    break;
                    case $dayNum === 7:
                        echo 'Saturday';
                        break;
                        default: echo 'Invalid Number';
    }
    return '';
}
$dayName = getDayName (2);
echo $dayName;