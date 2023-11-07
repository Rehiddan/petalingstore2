<?php

$mysqli = new mysqli($config->petalingstore-do-user-15065973-0.c.db.ondigitalocean.com, $config->doadmin, $config->AVNS_ntwWQ37zLf9PSEATzj_, $config->defaultdb);

if ($mysqli->connect_errno) {
    echo "<div class='error'>";
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    echo "</div>";
}

?>
