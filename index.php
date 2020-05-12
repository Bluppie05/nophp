<html>
</html>
<?php
include("Parsedown.php");

$filetoopen = "README.md";

$filecontents = file_get_contents($filetoopen);

$Parsedown = new Parsedown();
echo $Parsedown->text($filecontents);
?>
