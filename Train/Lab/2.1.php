<?php
$a = array(
    1 => "Bir",
    2 => "Eki",
    3 => "Ush",
    4 => "Dort",
    5 => "Besh",
    6 => "Aldy",
    7 => "Yeti",
    8 => "Sekiz",
    9 => "Dokuz"
);

$b = array(
    "kz" => "Kazakhstan",
    "ru" => "Russia",
    "usa" => "USA",
    "chi" => "China",
    "hg" => "Hogwarts"
);

$json_a = json_encode($a);
$json_b = json_encode($b);

print_r($a);
echo "<br>"."Json for Array a:"."<br>";
echo "<br>".$json_a."<br>";

echo "<br>";

print_r($b);
echo "<br>"."Json for Array b:"."<br>";
echo "<br>".$json_b;