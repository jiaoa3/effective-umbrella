<!DOCTYPE html>
<html>
<body>

<h1>My Refactored Output</h1>

<?php

require_once "ViewHelper.php";

echo "isCLI Display Output:";


ViewHelper::display(php_sapi_name() === "cli", "array");

echo "!isCLI Display Output:";

ViewHelper::display(false, "array");

$data = getPlayerDataJson();
?>
</body>
</html>