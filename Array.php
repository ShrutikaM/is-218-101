

<?php
echo " \n<br>";
echo " \n<br>";
echo "1.) ARRAY_SEARCH \n";
echo " \n<br>";
 $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
 echo $key = array_search('green', $array); // $key = 2;
 echo " \n<br>";
echo $key = array_search('red', $array);   // $key = 1;
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "2.) ARRAY_WALK \n";
echo " \n<br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print($item2, $key)
{
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($fruits, 'test_print');

array_walk($fruits, 'test_alter', 'fruit');
echo "... and after:\n";

array_walk($fruits, 'test_print');
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "3.) ARRAY_POP \n";
echo " \n<br>";
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "4.) ARRAY_PUSH \n";
echo " \n<br>";
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "5.) ARRAY_COMBINE \n";
echo " \n<br>";
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);
?>


<?php
echo " \n<br>";
echo " \n<br>";
echo "5.) IMPLODE \n";
echo " \n<br>";
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated; // lastname,email,phone

// Empty string when using an empty array:
var_dump(implode('hello', array())); // string(0) ""

?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "6.) EXPLODE \n";
echo " \n<br>";
// Example 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2

// Example 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *

?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "7.) ARRAY_INTERSECT \n";
echo " \n<br>";
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "8.) ARRAY_FILTER \n";
echo " \n<br>";
function odd($var)
{
    // returns whether the input integer is odd
    return($var & 1);
}

function even($var)
{
    // returns whether the input integer is even
    return(!($var & 1));
}

$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Odd :\n";
print_r(array_filter($array1, "odd"));
echo "Even:\n";
print_r(array_filter($array2, "even"));
?>


<?php
echo " \n<br>";
echo " \n<br>";
echo "9.) ARRAY_CHANGE_KEY_CASE \n";
echo " \n<br>";
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
?>
<?php
echo " \n<br>";
echo " \n<br>";
echo "10.) NATCASESORT \n";
echo " \n<br>";
$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

sort($array1);
echo "Standard sorting\n";
print_r($array1);

natcasesort($array2);
echo "\nNatural order sorting (case-insensitive)\n";
print_r($array2);
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "11.) ARRAY_UNIQUE \n";
echo " \n<br>";
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);
?>


<?php
echo " \n<br>";
echo " \n<br>";
echo "12.) ARRAY_RAND \n";
echo " \n<br>";
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "13.) ARRAY_MERGE \n";
echo " \n<br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "14.) ARRAY_SUM \n";
echo " \n<br>";
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "15.) IN_ARRAY \n";
echo " \n<br>";
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {
    echo "Got mac";
}
?>


