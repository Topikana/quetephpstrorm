<?php


$students = array (
"Emmanuel"  =>  42,
"Thierry"   =>  51,
"Pascal"    =>  45,
"Eric"      =>  48,
"Nicolas"   =>  19,
);

echo "La liste des éléves  : " . PHP_EOL;


$totalStudents = count($students);
foreach ($students as $students){
    echo $students . PHP_EOL;
}

echo $moyenne = (42 + 51 + 45 + 48 + 19)/5;
