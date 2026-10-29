
<?php
include "connect.php";

// INSERT RECORD
if (isset($_POST['insert'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "INSERT INTO students (name, age)
            VALUES ('$name', '$age')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully!<br>";
    } else {
        echo "Error inserting record.<br>";
    }
}

// DELETE RECORD
if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $sql = "DELETE FROM students WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully!<br>";
    } else {
        echo "Error deleting record.<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
</head>
<body>

<h2>Student Management System</h2>

<h3>Insert Student</h3>

<form method="POST" action="">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Age:
    <input type="number" name="age" required>
    <br><br>

    <input type="submit" name="insert" value="Insert Student">

</form>

<hr>

<h3>Student Records</h3>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Action</th>
    </tr>

    <?php
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
    ?>

    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo htmlspecialchars($row['name']); ?></td>
        <td><?php echo $row['age']; ?></td>
        <td>
            <a href="index.php?delete=<?php echo $row['id']; ?>"
               onclick="return confirm('Delete this record?');">
                Delete
            </a>
        </td>
    </tr>

    <?php
    }
    ?>

</table>

</body>
</html>
