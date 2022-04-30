<?php

$sql_SELECT = "SELECT * FROM users ORDER BY RAND() LIMIT 1;";
$result= mysqli_query($mysql_connection,$sql_SELECT);
$users = mysqli_fetch_all($result,MYSQLI_ASSOC);