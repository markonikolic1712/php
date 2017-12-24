<?php
$conn = mysqli_connect("127.0.0.1","root","","users"); 
$res = mysqli_query($conn,"select * from users");
while($rw = mysqli_fetch_assoc($res)){
	mysqli_query($conn,"insert into users_copy values ({$rw['id']},'{$rw['username']}','{$rw['password']}','{$rw['creationdate']}')");
}