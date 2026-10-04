<?php
declare (strict_types=1);

function calculate (float $number1, float $number2, string $operator) : float|string 
{
    switch (true) {
        case '+':
            echo $number1 + $number2;
            break;
            case '-':
                echo $number1 - $number2;
                break;
                case '*':
                    echo $number1 * $number2;
                    break;
                    case '/':
                        echo $number1/$number2;
                        break;
                      
                      
                        
                        default: echo 'Invalid Number';
    }

return '';
}
$answerOperation1 = calculate (1,3,'+');
$answerOperation2 = calculate (5,6, '-');
echo "$answerOperation1<br>";
echo $answerOperation2;
