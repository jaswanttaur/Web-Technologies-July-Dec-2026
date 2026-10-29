<!DOCTYPE html>
<html>
<head>
    <title>GET Method Example</title>
</head>
<body>

<h2>Student Information Form</h2>

<form action="" method="GET">

    Name:
    <input type="text" name="student_name">
    <br><br>

    Age:
    <input type="number" name="age">
    <br><br>

    Department:
    <input type="text" name="department">
    <br><br>

    <input type="submit" value="Submit">

</form>

<?php
if (isset($_GET['student_name'])) {

    $name = htmlspecialchars($_GET['student_name']);
    $age = htmlspecialchars($_GET['age'] ?? '');
    $department = htmlspecialchars($_GET['department'] ?? '');

    echo "<h3>Submitted Information</h3>";
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Department: " . $department;
}
?>

</body>
</html>