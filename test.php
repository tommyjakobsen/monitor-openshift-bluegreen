<?php

print_r($_SERVER);

echo "<hr>";
$arr = get_defined_vars();
print_r($arr);
$prod=getenv("production");
$devops=getenv("devops");

echo "<br>PROD: $prod<hr>DEVOPS:$devops";


?>