<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Verwerking</title>
</head>
<body>
<?php
$vrienden = $_GET['vriend'];
foreach ( $vrienden as $index => $vriend ) {
    print( $index. ': '. $vriend . '<br/>' );
}
?>
</body>
</html>