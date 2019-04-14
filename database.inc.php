<?php

$link = mysqli_connect('localhost', 'zocker_knaelter', 'zockerportal', 'zocker_knaelter');

if (mysqli_connect_errno())
{
    printf('Failed to connect to database: %s\n', mysqli_connect_error());
    
    exit();
}

?>