<?php
if (function_exists('mysqli_connect')) {
    echo "MySQLi is enabled on your server.";
} else {
    echo "MySQLi is not enabled on your server.";
}
?>
