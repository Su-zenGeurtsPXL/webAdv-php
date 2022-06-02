<?php
session_start();
$_SESSION['name'] = 'Sofie';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session plaatsen</title>
</head>
<body>
<h1>Session</h1>
Naam: <?php print( $_SESSION['name'] ); ?>
</body>
</html>