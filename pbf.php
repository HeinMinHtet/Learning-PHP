<?php
$name = "Alice";
function hello(&$n) {
$n = "Bob";
echo "Hello $n";
}
hello($name);
echo $name;