<?php
declare (strict_types=1);
function getMonthName (int $monthNum) : string
{
    switch ($monthNum){
        case ($monthNum === 1):
            echo 'January';
            break;
            case ($monthNum === 2):
            echo 'February';
            break;
            case ($monthNum === 3):
                echo 'March';
                break;
                case ($monthNum === 4):
                    echo 'April';
                    break;
                    case ($monthNum === 5):
                        echo 'May';
                        break;
                        case ($monthNum === 6):
                            echo 'June';
                            break;
                            case ($monthNum === 7):
                                echo 'July';
                                break;
                                case ($monthNum === 8):
                                    echo 'Augest';
                                    break;
                                    case ($monthNum === 9):
                                    echo 'September';
                                    break;
                                    case ($monthNum === 10):
                                        echo 'October';
                                        break;
                                        case ($monthNum === 11):
                                            echo 'November';
                                            break;
                                            case ($monthNum === 12):
                                                echo 'December';
                                                break;
                                                default: echo 'Invalid Month name';
    }
    return '';
}
$monthName = getMonthName (13);
echo $monthName;