<?php
define("_ADMIN",2);
define("_USER",1);
$userStatus = _ADMIN;
if ($userStatus == _ADMIN)
    echo "<div style='border: 1px solid red; background-color: yellow; color: black; font-family: tahoma; font-size: x-small; padding: 2px;'>Welcome administrator</div>";
else if ($userStatus == _USER)
    echo "<div style='border: 1px solid red; background-color: yellow; color: black; font-family: tahoma; font-size: x-small; padding: 2px;'>Welcome user</div>";
else
    echo "<div style='border: 1px solid yellow; background-color: red; color: white; font-family: tahoma; font-size: x-small; padding: 2px;'>Unknown user type</div>";
