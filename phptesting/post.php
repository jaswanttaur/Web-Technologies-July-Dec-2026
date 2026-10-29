<!DOCTYPE html>
<html>
<head>
    <title>POST Method Example</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form action="" method="POST">

    Name:
    <input type="text" name="student_name" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Department:
    <select name="department">
        <option value="CSE">CSE</option>
        <option value="IT">IT</option>
        <option value="CE">CE</option>
    </select>
    <br><br>

    <input type="submit" name="submit"
           value="Register">

</form>

<?php
if (isset($_POST['submit'])) {

    $name = htmlspecialchars($_POST['student_name']);
    $email = htmlspecialchars($_POST['email']);
    $department = htmlspecialchars($_POST['department']);

    echo "<h3>Registration Details</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Department: " . $department;
}
?>

</body>
</html>