<?php
setcookie ('taal', 'NL', time() + 24 * 60 *60 );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>
<h1>Geplaatste cookies</h1>
<?php
foreach( $_COOKIE as $key => $value ) {
    print( $key. ' : '. $value. '<br/>' );
}
?>
</body>
</html>