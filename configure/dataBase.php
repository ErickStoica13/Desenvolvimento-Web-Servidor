<?php
try {
	$db = new mysqli('localhost', 'root', '', 'web_server_sistema');
} catch (Exception $e) {
	throw new Exception('ERRO - MYSQL: ' . $e->getMessage());
}
