<?php
$name = "Alice";
function hello() {
global $name;
echo "Hello $name";
}
hello();