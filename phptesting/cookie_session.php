```php
<?php
session_start();

// Create a cookie
setcookie("username", "Arshdeep", time() + 3600, "/");

// Store data in session
$_SESSION["username"] = "Arshdeep";
$_SESSION["branch"] = "CSE";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies and Sessions</title>
</head>
<body>

<h2>PHP Cookies and Sessions Management</h2>

<h3>1. Cookie Management</h3>

<?php
if (isset($_COOKIE["username"])) {
    echo "Cookie Value: " . htmlspecialchars($_COOKIE["username"]);
} else {
    echo "Cookie created. Refresh the page to read it.";
}
?>

<br><br>

<a href="?delete_cookie=1">Delete Cookie</a>

<?php
if (isset($_GET["delete_cookie"])) {
    setcookie("username", "", time() - 3600, "/");
    echo "<br>Cookie deletion requested. Refresh the page.";
}
?>

<hr>

<h3>2. Session Management</h3>

<?php
echo "Username: " . htmlspecialchars($_SESSION["username"]);
echo "<br>";
echo "Branch: " . htmlspecialchars($_SESSION["branch"]);
?>

<br><br>

<a href="?delete_session=1">Delete Session</a>

<?php
if (isset($_GET["delete_session"])) {
    $_SESSION = [];
    session_destroy();

    echo "<br>Session destroyed.";
}
?>

</body>
</html>
```