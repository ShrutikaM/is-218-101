<?php

echo " SHRUTIKA MADDA \n";
echo " \n<br>";
echo " \n<br>";

function foo($arg1 = '', $arg2 = '') {
 
    echo "arg1: $arg1\n";
    echo "arg2: $arg2\n";
 
}
 
foo('hello','world');

foo();

?>

<br>
<br>
<br>


function foo() {
 
    
    $args = func_get_args();
 
    foreach ($args as $k => $v) {
        echo "arg".($k+1).": $v\n";
    }
 
}
 
foo();

foo('hello');

arg1: hello

 
foo('hello', 'world', 'again');


<br>
<br>

// get all php files
$files = glob('*.php');
 
print_r($files);

Array
(
    [0] => phptest.php
    [1] => pi.php
    [2] => post_output.php
    [3] => test.php
)
*/

<br>
<br>

// get all php files AND txt files
$files = glob('*.{php,txt}', GLOB_BRACE);
 
print_r($files);
/* output looks like:
Array
(
    [0] => phptest.php
    [1] => pi.php
    [2] => post_output.php
    [3] => test.php
    [4] => log.txt
    [5] => test.txt
)
*/

<br>
<br>
$files = glob('../images/a*.jpg');
 
print_r($files);
/* output looks like:
Array
(
    [0] => ../images/apple.jpg
    [1] => ../images/art.jpg
)
*/

<br>
<br>
$files = glob('../images/a*.jpg');
 
// applies the function to each array element
$files = array_map('realpath',$files);
 
print_r($files);
/* output looks like:
Array
(
    [0] => C:\wamp\www\images\apple.jpg
    [1] => C:\wamp\www\images\art.jpg
)
*/

<br>
<br>

echo "Initial: ".memory_get_usage()." bytes \n";
/* prints
Initial: 361400 bytes
*/
 
// let's use up some memory
for ($i = 0; $i < 100000; $i++) {
    $array []= md5($i);
}
 
// let's remove half of the array
for ($i = 0; $i < 100000; $i++) {
    unset($array[$i]);
}
 
echo "Final: ".memory_get_usage()." bytes \n";
/* prints
Final: 885912 bytes
*/
 
echo "Peak: ".memory_get_peak_usage()." bytes \n";
/* prints
Peak: 13687072 bytes
*/

<br>
<br>

print_r(getrusage());
/* prints
Array
(
    [ru_oublock] => 0
    [ru_inblock] => 0
    [ru_msgsnd] => 2
    [ru_msgrcv] => 3
    [ru_maxrss] => 12692
    [ru_ixrss] => 764
    [ru_idrss] => 3864
    [ru_minflt] => 94
    [ru_majflt] => 0
    [ru_nsignals] => 1
    [ru_nvcsw] => 67
    [ru_nivcsw] => 4
    [ru_nswap] => 0
    [ru_utime.tv_usec] => 0
    [ru_utime.tv_sec] => 0
    [ru_stime.tv_usec] => 6269
    [ru_stime.tv_sec] => 0
)
 
*/

<br>
<br>

// sleep for 3 seconds (non-busy)
sleep(3);
 
$data = getrusage();
echo "User time: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "System time: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);
 
/* prints
User time: 0.011552
System time: 0
*/

<br>
<br>
// loop 10 million times (busy)
for($i=0;$i<10000000;$i++) {
 
}
 
$data = getrusage();
echo "User time: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "System time: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);
 
/* prints
User time: 1.424592
System time: 0.004204
*/

<br>
<br>

$start = microtime(true);
// keep calling microtime for about 3 seconds
while(microtime(true) - $start < 3) {
 
}
 
$data = getrusage();
echo "User time: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "System time: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);
 
/* prints
User time: 1.088171
System time: 1.675315
*/

<br>
<br>

// this is relative to the loaded script's path
// it may cause problems when running scripts from different directories
require_once('config/database.php');
 
// this is always relative to this file's path
// no matter where it was included from
require_once(dirname(__FILE__) . '/config/database.php');


<br>
<br>


my_debug("some debug message", __LINE__);
/* prints
Line 4: some debug message
*/
 
// some more code
// ...
my_debug("another debug message", __LINE__);
/* prints
Line 11: another debug message
*/
 
function my_debug($msg, $line) {
    echo "Line $line: $msg\n";
}

<br>
<br>

// generate unique string
echo md5(time() . mt_rand(1,1000000));


<br>
<br>

// generate unique string
echo uniqid();
/* prints
4bd67c947233e
*/
 
// generate another unique string
echo uniqid();
/* prints
4bd67c9472340
*/

<br>
<br>

// with prefix
echo uniqid('foo_');
/* prints
foo_4bd67d6cd8b8f
*/
 
// with more entropy
echo uniqid('',true);
/* prints
4bd67d6cd8b926.12135106
*/
 
// both
echo uniqid('bar_',true);
/* prints
bar_4bd67da367b650.43684647
*/

<br>
<br>

// a complex array
$myvar = array(
    'hello',
    42,
    array(1,'two'),
    'apple'
);
 
// convert to a string
$string = serialize($myvar);
 
echo $string;
/* prints
a:4:{i:0;s:5:"hello";i:1;i:42;i:2;a:2:{i:0;i:1;i:1;s:3:"two";}i:3;s:5:"apple";}
*/
 
// you can reproduce the original variable
$newvar = unserialize($string);
 
print_r($newvar);
/* prints
Array
(
    [0] => hello
    [1] => 42
    [2] => Array
        (
            [0] => 1
            [1] => two
        )
 
    [3] => apple
)
*/


<br>
<br>

// a complex array
$myvar = array(
    'hello',
    42,
    array(1,'two'),
    'apple'
);
 
// convert to a string
$string = json_encode($myvar);
 
echo $string;
/* prints
["hello",42,[1,"two"],"apple"]
*/
 
// you can reproduce the original variable
$newvar = json_decode($string);
 
print_r($newvar);
/* prints
Array
(
    [0] => hello
    [1] => 42
    [2] => Array
        (
            [0] => 1
            [1] => two
        )
 
    [3] => apple
)
*/



<br>
<br>

$string =
"Lorem ipsum dolor sit amet, consectetur
adipiscing elit. Nunc ut elit id mi ultricies
adipiscing. Nulla facilisi. Praesent pulvinar,
sapien vel feugiat vestibulum, nulla dui pretium orci,
non ultricies elit lacus quis ante. Lorem ipsum dolor
sit amet, consectetur adipiscing elit. Aliquam
pretium ullamcorper urna quis iaculis. Etiam ac massa
sed turpis tempor luctus. Curabitur sed nibh eu elit
mollis congue. Praesent ipsum diam, consectetur vitae
ornare a, aliquam a nunc. In id magna pellentesque
tellus posuere adipiscing. Sed non mi metus, at lacinia
augue. Sed magna nisi, ornare in mollis in, mollis
sed nunc. Etiam at justo in leo congue mollis.
Nullam in neque eget metus hendrerit scelerisque
eu non enim. Ut malesuada lacus eu nulla bibendum
id euismod urna sodales. ";
 
$compressed = gzcompress($string);
 
echo "Original size: ". strlen($string)."\n";
/* prints
Original size: 800
*/
 
 
 
echo "Compressed size: ". strlen($compressed)."\n";
/* prints
Compressed size: 418
*/
 
// getting it back
$original = gzuncompress($compressed);


<br>
<br>

// capture the start time
$start_time = microtime(true);
 
// do some stuff
// ...
 
// display how long the script took
echo "execution took: ".
        (microtime(true) - $start_time).
        " seconds.";
        

<br>
<br>

$start_time = microtime(true);
 
register_shutdown_function('my_shutdown');
 
// do some stuff
// ...
 
 
function my_shutdown() {
    global $start_time;
 
    echo "execution took: ".
            (microtime(true) - $start_time).
            " seconds.";
}

















?>
