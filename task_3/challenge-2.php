<?php
declare (strict_types=1);
function calculateGrade (float $score) : string
{
    if ($score  >=90 ) echo 'Excellent';
    elseif ($score >=80) echo 'Very Good';
    elseif ($score >=70) echo 'Good';
    elseif ($score  >=50) echo 'Pass';
    elseif ($score  >=0) echo 'Fail';
    elseif ($score  > 100   ) echo 'Invalid Score';
    return '';
}
$student_score = calculateGrade (50);
echo $student_score;