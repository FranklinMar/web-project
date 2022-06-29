<?php

$end = '<br>';

$language = 'PHP';

$year = 2017;

$name = 'language';

$greeting = "Hello There!";

echo $greeting.$end;
echo "General Kenobi!$end";
echo "{$language} stands for - PHP Hypertext Preprocessor!$end";
echo "${$name} $name is a script $name!".$end.$end;
echo "$year year is the one of the best years in my life!".$end.$end;

// Functions

echo "'$greeting' info:$end";
echo "Characters: ".strlen($greeting)."$end";
echo "Words: ".str_word_count($greeting)."$end$end";

echo str_replace("There", "World", $greeting).$end."No, wait, something is wrong.";

// Null

$print = null;
if (null) {
    $print = "null";
} else {
    $print = "Empty";
}
echo "Condition:".$end.$end.$print.$end;

// Arrays and 'for' loop

$array = ['Smartphone', 'Laptop', 'GPU', 'CPU'];

echo "Techincal stuff:$end"; 
for ($i = 0; $i < count($array); $i++) {
    echo "- ".$array[$i]."$end";
}
echo $end;

$dict = ["Maryna" => "girl", "Denys" => "boy", "Dima" => "boy", "Katya" => "girl"];
foreach ($dict as $key => $value){
    echo "$key is a $value$end";
}
echo $end;

// implode and explode

$str = "1 2 3 4 5";
foreach (explode(" ", $str) as $item) {
    echo "$item$end";
}
echo $end.$end;

echo implode(", ", $array) . " - I love it!$end$end";

// Type equality

$x = 14;
$y = "14";
if ($x == $y) {
    echo "x equals y$end";
} else {
    echo "x doesn't equal y$end";
}

if ($x === $y) {
    echo "x equals y$end";
} else {
    echo "x doesn't equal y$end";
}
echo $end;


$a = "1";
echo $a . $end;

$a *= 10;
echo $x . $end;

$a = $a * 1.2;
echo $a . $end;

$a = 5 * "10 number";
echo $a . $end;

$a = "kat";
$a[0] = 'c';
echo $a . "<br>";

echo ((boolean) $a) . "<br>";
?>