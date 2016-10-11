<?php

$config['db_host'] = '127.0.0.1';
$config['db_user'] = 'root';
$config['db_pass'] = 'mysql';
$config['db_name'] = 'trisBlog';

foreach ( $config as $k => $v ) {
    define(strtoupper($k), $v);    
}


