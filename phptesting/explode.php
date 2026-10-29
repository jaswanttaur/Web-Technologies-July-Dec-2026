<?php
// $subjects = "PHP,MySQL,HTML,CSS";

// $result = explode(",", $subjects);

// print_r($result);



$student = "Jaspreet Singh,21,CSE";

$data = explode(",", $student);

echo "Name: " . $data[0] . "<br>";
echo "Age: " . $data[1] . "<br>";
echo "Department: " . $data[2];




?>