<?php

echo "1.) CHUNK SPLIT \n";
echo " \n<br>"; 
function chunk_split_unicode($str, $l = 76, $e = "\r\n") {
    $tmp = array_chunk(
        preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY), $l);
    $str = "";
    foreach ($tmp as $t) {
        $str .= join("", $t) . $e;
    }
    return $str;
}

$str = "Yarim kilo çay, yarim kilo seker.";
echo chunk_split($str, 4) ."\n" ;
echo chunk_split_unicode($str, 4);

echo " \n<br>";
echo " \n<br>";
echo "2.) COUNT CHARS \n";
echo " \n<br>";
$data = "Two Ts and one F.";

foreach (count_chars($data, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
}
?>
<?php
echo " \n<br>";
echo " \n<br>";
// Example 1
echo "3.)EXPLODE \n";
echo " \n<br>";
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
echo "4.) HTMLENTITIES \n";
echo " \n<br>";

$str = "A 'quote' is <b>bold</b>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);

// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str, ENT_QUOTES);
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "5.) HTML SPECIAL CHARACTER DECODE \n";
echo " \n<br>";
$str = "<p>this -&gt; &quot;</p>\n";

echo htmlspecialchars_decode($str);

// note that here the quotes aren't converted
echo htmlspecialchars_decode($str, ENT_NOQUOTES);
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "6.) HTML SPECIAL CHARACTER  \n";
echo " \n<br>";
$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
?>


<?php
echo " \n<br>";
echo " \n<br>";
echo "7.) IMPLODE  \n";
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
echo "8.) LCFIRST \n";
echo " \n<br>";
$foo = 'HelloWorld';
echo $foo = lcfirst($foo);             // helloWorld

$bar = 'HELLO WORLD!';
echo $bar = lcfirst($bar);             // hELLO WORLD!
echo $bar = lcfirst(strtoupper($bar)) // hELLO WORLD!
?>


<?php
echo " \n<br>";
echo " \n<br>";
echo "9.) LTRIM \n";
echo " \n<br>";
$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";


$trimmed = ltrim($text);
var_dump($trimmed);

$trimmed = ltrim($text, " \t.");
var_dump($trimmed);

$trimmed = ltrim($hello, "Hdle");
var_dump($trimmed);

// trim the ASCII control characters at the beginning of $binary
// (from 0 to 31 inclusive)
$clean = ltrim($binary, "\x00..\x1F");
var_dump($clean);

?>
<?php

echo " \n<br>";
echo " \n<br>";
echo "10.) MD5 \n";
echo " \n<br>";
$str = 'apple';

if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Would you like a green or red apple?";
}
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "11.) RTRIM \n";
echo " \n<br>";
$text = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = rtrim($text);
var_dump($trimmed);

$trimmed = rtrim($text, " \t.");
var_dump($trimmed);

$trimmed = rtrim($hello, "Hdle");
var_dump($trimmed);

// trim the ASCII control characters at the end of $binary
// (from 0 to 31 inclusive)
$clean = rtrim($binary, "\x00..\x1F");
var_dump($clean);

?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "12.) STR_REPLACE \n";
echo " \n<br>";
// Provides: <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");

// Provides: Hll Wrld f PHP
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

// Provides: You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);

// Provides: 2
$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count;
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "13.) STR_SPLIT \n";
echo " \n<br>";
$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

print_r($arr1);
print_r($arr2);

?>

<?php

echo " \n<br>";
echo " \n<br>";
echo "14.) STRRIPOS \n";
echo " \n<br>";
$haystack = 'ababcd';
$needle   = 'aB';

$pos      = strripos($haystack, $needle);

if ($pos === false) {
    echo "Sorry, we did not find ($needle) in ($haystack)";
} else {
    echo "Congratulations!\n";
    echo "We found the last ($needle) in ($haystack) at position ($pos)";
}
?>

<?php
echo " \n<br>";
echo " \n<br>";
echo "15.)STRTOLOWER  \n";
echo " \n<br>";
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str; // Prints mary had a little lamb and she loved it so
?>



<?php
echo " \n<br>";
echo " \n<br>";
echo "16.)TRIM  \n";
echo " \n<br>";
$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = trim($text);
var_dump($trimmed);

$trimmed = trim($text, " \t.");
var_dump($trimmed);

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);

$trimmed = trim($hello, 'HdWr');
var_dump($trimmed);

// trim the ASCII control characters at the beginning and end of $binary
// (from 0 to 31 inclusive)
$clean = trim($binary, "\x00..\x1F");
var_dump($clean);

?>


















