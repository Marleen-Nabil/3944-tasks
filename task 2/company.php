<?php
declare (strict_types=1);
const TAX_RATE = 0.10;
$companyName = 'Nova Tech';
$employee1 = 'Asser Gamal';
$emplyee2 = 'Mark Sameh';

function displayCompanyName(string $name) : void
{
    global $companyName;
    $msg = "My company's name is $companyName";
    echo "$msg <br>";
}
displayCompanyName ('Nova Tech');


function calculateBonus(float $salary) : float
{
   
$bonus = ($salary/100)*25;
$msg = "The bonus for $salary is $bonus LE";
echo " $msg <br>";
return $bonus;

}
$emplyee1_bonus = calculateBonus(1000);
$emplyee2_bonus = calculateBonus (2000);

function calculateFinalSalary(int|float $salary, int|float $bonus) : float
{
global $employee1;
global $employee2;
$final_salary = $salary + $bonus - ($bonus * TAX_RATE);
$msg1 = "The final salary for $employee1 is $final_salary.";
$msg2 = "The final salary for $employee2 is $final_salary.";

echo "$msg1 <br>";
echo "$msg2 <br>";
return $final_salary;

}
$salary1 = calculateFinalSalary (1000, 1000*0.25);
$salary2 = calculateFinalSalary (2000, 2000*0.25);
// $employee1_final_salary = calculateFinalSalary ($salary1, 0.25);
// calculateFinalSalary (2000, )
