<?php
$name = "this is my simple string";
print $name;
print "<br>";
echo "The length of " . "my string is : " . strlen($name);
print "<br>";
echo str_word_count($name);
print "<br>";
echo strrev($name);
print "<br>";
echo strpos($name, " is");
print "<br>";
echo str_replace("string", "sequence of characters", $name);
?>