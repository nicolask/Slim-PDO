<?php
require_once dirname(__DIR__, 1).'/vendor/autoload.php';

$db_host = @$GLOBALS['slimpdo.database.host'];
$db_name = @$GLOBALS['slimpdo.database.dbname'];
$db_port = @$GLOBALS['slimpdo.database.port'];
$db_user = @$GLOBALS['slimpdo.database.username'];
$db_password = @$GLOBALS['slimpdo.database.password'];

$dsn = "pgsql:host={$db_host};dbname={$db_name};port={$db_port};user={$db_user};password={$db_password}";

$slim_pdo = new \Slim\PDO\Database($dsn);

require_once __DIR__ . '/generate_fixtures.php';
generate_fixtures($slim_pdo);

