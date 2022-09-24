<?php
$txt = "Hello Steamdeck!";
echo "<h1>$txt</h1>";

// what follows are some random calculation
// in order to stress the CPU a bit on every request

// seed with microseconds
function make_seed()
{
   list($usec, $sec) = explode(' ', microtime());
   return $sec + $usec * 1000000;
}
srand(make_seed());

$x = rand();
$y = rand();
$z = log(sqrt($x * $y));
echo "random result: $z";
?>

