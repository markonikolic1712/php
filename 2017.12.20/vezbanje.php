<?php

$conn = mysqli_connect('localhost','root','','g6_zaposleni');

$res = mysqli_query($conn,'select * from users limit 100');
$totalRows = mysqli_num_rows($res);


for($i=1;$i<$totalRows+1;$i++){
	$res = mysqli_query($conn,"select * from users where id='{$i}'");
	$rows = mysqli_fetch_assoc($res);
	echo $rows['id'].$rows['username'].'<br>';

	$upis = mysqli_query($conn,"insert into users_copy values ('{$rows['id']}', '{$rows['username']}','{$rows['password']}','{$rows['creationdate']}')");
}

	$res_copy = mysqli_query($conn,"select * from users_copy where id='{$totalRows}'");
	echo isset($res_copy) ?  "Svi unosi su kopirani" : "Svi unosi nisu kopirani";




