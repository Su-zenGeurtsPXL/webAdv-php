<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Verwerking</title>
</head>
<body>
<!--FOUTIEF: Niet bestendig tegen XXS-->
<!--Naam: --><?php //print( $_GET['naam'] ); ?><!--<br/>-->
<!--T-Shirt --><?php //print( $_GET['tshirt'] ); ?>

Naam: <?php
print( htmlentities( $_GET['naam'], ENT_QUOTES, 'UTF-8' ) );
?><br>
T-Shirt: <?php
print( htmlentities( $_GET['tshirt'], ENT_QUOTES, 'UTF-8' ) );
?>
</body>
</html>


