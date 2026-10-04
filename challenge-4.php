<?php
declare (strict_types=1);

function checkLogin (string $username, int $password) : string 
{
    switch (true) {
        case $username:
        echo ($username === 'admin')?'username is right': 'not valid';
        
        break;

        case $password:
         echo ($password === 12345)?'login' : 'wrong password';
         }
         return '';
    
}
$login = checkLogin ('admin', 12345);
echo $login;
