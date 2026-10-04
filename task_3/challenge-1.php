<?php
declare (strict_types=1);
 

   
//     if ($age < 13) echo 'Child';
//     elseif ($age <= 17) echo 'Teenager';
//     elseif ($age > 18) echo 'Adult';
//     else echo 'Something went wrong';

function checkAge (int $age) : string
{
 if ($age < 13) echo 'Child';
    elseif ($age <= 17) echo 'Teenager';
    elseif ($age > 18) echo 'Adult';
    else echo 'Something went wrong';
    return '';

}
$boy_age = checkAge (19);
echo $boy_age;