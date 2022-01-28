<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "r";
ViewHelper::display(php_sapi_name() === "cli", "array");
ViewHelper::display(false, "array");

$data = getPlayerDataJson();
?>
</body>
</html>