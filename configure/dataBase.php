<?php
try {
	$db = new mysqli('localhost', 'root', '', 'web_server');
	// $db->set_charset('utf-8');
} catch (Exception $e) {
	throw new Exception('ERRO - MYSQL: ' . $e->getMessage());
}
