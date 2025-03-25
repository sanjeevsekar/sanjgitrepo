<?php

$source_db_name = 'DBNAME';
$source_db_user = 'DBUSER';
$source_db_pwd = 'DBPASS';
$source_db_host = 'DBHOST';
$source_db_driver = 'mysqli';


$src_driver_conn_params = [
    'dbname' => $source_db_name,
    'user' => $source_db_user,
    'password' => $source_db_pwd,
    'host' => $source_db_host,
    'driver' => $source_db_driver, //pdo_mysql, mysqli
];
