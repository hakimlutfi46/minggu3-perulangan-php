<?php
$marks = array(
    "mohammad" => array(
        "physics" => 35,
        "maths" => 30,
        "chemistry" => 39
    ),

    "qadir" => array(
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 29
    ),


    "zara" => array(
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39
    )
);

echo "Marks for mohammad in physics : " . $marks["mohammad"]["physics"] . "<br>";
echo "Marks for qadir in maths : " . $marks["qadir"]["maths"] . "<br>";
echo "Marks for zara in chemistry : " . $marks["zara"]["physics"] . "<br>";
