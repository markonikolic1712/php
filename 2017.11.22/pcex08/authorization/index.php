<?php
define("_ADMIN",2);
define("_USER",1);
$userStatus = 4;
if ($userStatus == _ADMIN)
{
?><div style="border: 1px solid red; background-color: yellow; color: black; font-family: tahoma; font-size: x-small; padding: 2px;">Welcome administrator</div><?php
}
else if ($userStatus == _USER)
{
?><div style="border: 1px solid red; background-color: yellow; color: black; font-family: tahoma; font-size: x-small; padding: 2px;">Welcome user</div><?php
}
else
{
?><div style="border: 1px solid yellow; background-color: red; color: white; font-family: tahoma; font-size: x-small; padding: 2px;">Unknown user type</div><?php
}


