<?php

define ("_ADMIN", 1);
define ("_USER", 2);

$userStatus = $_GET['userStatus'];
$admin = '<div style="background-color: yellow; border: 1px solid red; padding: 2px; text-align: center"><p>Welcome administrator</p></div>';
$user = '<div style="background-color: yellow; border: 1px solid red; padding: 2px; text-align: center"><p>Welcome user</p></div>';
$unknown = '<div style="background-color: red; border: 1px solid red; padding: 2px; text-align: center"><p>Unknown user</p></div>';

switch ($userStatus) {
	case 1:
		$userStatus = $admin;
		break;
	case 2:
		$userStatus = $user;
		break;
	default:
		$userStatus = $unknown;
		break;

}

echo $userStatus;

?>
<!DOCTYPE>
<html>
	<head>
		<title>autorizacija</title>
	</head>
	<body>
		<form>
			<p>Unesite broj kojim se logujete: <input type="text" name="userStatus"><br></p>
			<p><input type="submit" name="submit" value="Posalji"></P>
		</form>

	</body>
</html>


	
	
	
	
	
