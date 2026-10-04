<?php 
declare (strict_types=1);

function trafficLight (string $light) : string
{
     switch ($light){
        case 'Green':
            echo 'Go';
            break;
            case 'Yellow':
                echo 'Get Ready';
                break;
                case 'Red':
                    echo 'Stop';
                    break;
                    default: echo 'Invalid Color';
     }
     return '';
}
$trafficAction = trafficLight('Red');
echo $trafficAction;