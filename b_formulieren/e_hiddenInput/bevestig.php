<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bevestiging</title>
</head>
<body>
De ingegeven waarde voor naam is
<?php print($_GET['naam']);?>.
<form action="verwerking.php" method="get">
    <input type="hidden" name="naam"
           value="<?php print($_GET['naam']);?>">
    <input type="submit" value="bevestig">
</form>
<a href="ingave.html">Terug</a>
</body>
</html>
