<?php
$nums = [1, 2, 3, 4];
function three($n) {
return $n * 3;
}
$result = array_map("three", $nums);
print_r($result);