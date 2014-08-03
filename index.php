<?php
function islogin()
{
    return !empty($_COOKIE['username']);
}


if ( islogin() ) {
    echo "hello ", $_COOKIE['username'];
} else {
    echo 'hello guest';
}


echo "\n=========================\n";
print_r($_SERVER);
