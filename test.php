<?php
$fname = "Jouni";
$lname = "Juntunen";
$username = "jjuntune";
$password = password_hash("testi123",PASSWORD_DEFAULT);

$sql = "insert into user(fname,lname,username,password)
values ('$fname','$lname','$username','$password')";
echo $sql;