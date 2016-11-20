
?><?php

echo " SHRUTIKA MADDA \n";
echo " \n<br>";
echo " Homework 7 \n";
echo " \n<br>";
echo " \n<br>";
echo " Gobal Example \n";
echo " \n<br>";
function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();

echo " \n<br>";
echo " \n<br>";
echo " Server Example \n";
echo " \n<br>";

echo $_SERVER['SERVER_NAME'];

echo " \n<br>";
echo " \n<br>";
echo " GET Example \n";
echo " \n<br>";
echo 'Shrutika ' . htmlspecialchars($_GET["name"]) . '!';

echo " \n<br>";
echo " \n<br>";
echo " POST Example \n";
echo " \n<br>";
echo 'Madda ' . htmlspecialchars($_POST["name"]) . '!';

echo " \n<br>";
echo " \n<br>";
echo " Cookie Example \n";
echo " \n<br>";
echo 'IS218 ' . htmlspecialchars($_COOKIE["name"]) . '!';

echo " \n<br>";
echo " \n<br>";
echo " ENV Example \n";
echo " \n<br>";
echo 'My username is ' .$_ENV["USER"] . '!';
?>