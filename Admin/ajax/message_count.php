<?php

require __DIR__ .'/../../server/inc/connection.php';

header('Content-Type: application/json');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');


	

$result = $con->query("SELECT COUNT(*) AS c FROM contact WHERE is_read = 0");
$row = $result->fetch_assoc();


echo json_encode(['count' => (int)($row['c'] ?? 0 )]);

?>