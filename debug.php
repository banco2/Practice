<?php

function isOfDrivingAge($age)
{

    return $age >= 17;
}


function  notifyUserOfDriverStatus($name, $age)
{

    $message = isOfDrivingAge($age) ? "$name You may drive!." : "$name You cant drive!";

    return "{$name}: {$message}";

}

$status = notifyUserOfDriverStatus('John', 19);
