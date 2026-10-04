<?php
declare (strict_types=1);
function analyzeNumber (float $number) : string
{
switch (true) {
    case $number >0: 
        echo "Positive and ";
        echo ($number % 2 === 0)? 'Even ': 'Odd';
        break;
    case $number === 0: 
        echo 'Zero';
        break;
    case $number <0:
        echo 'Negative';


}
return '';

}
$number_check = analyzeNumber (-3.2);
echo  $number_check;
