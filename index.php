<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body>

<div style="position:absolute; top:20px; right:20px;">
<?php
if (isset($_SESSION['username'])) {
    echo "Halo, " . $_SESSION['username'];
} else {
    echo "<a href='login.html'>Login</a>";
}
?>
</div>

<h1>Halaman Utama</h1>

</body>
</html>