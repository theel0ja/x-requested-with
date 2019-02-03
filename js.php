<?php

	header("Content-Type: application/javascript");

foreach (getallheaders() as $name => $value) {
    echo "document.write(\"$name: $value<br>\");\n";
}
?>
