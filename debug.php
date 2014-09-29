<?php

function isOfDrivingAge($age)
{

    return $age >= 17;
}


function  notifyUserOfDriverStatus($name, $age)
{

    $message = isOfDrivingAge($age) ? 'You may drive!.' : 'You cant drive';

    return "{$name}: {$message}";

}

$status = notifyUserOfDriverStatus('John Doe', 17);
