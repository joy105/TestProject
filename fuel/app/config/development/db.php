<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
    'default' => array(
        'type'           => 'pdo',
        'connection'  => array(
	'dsn'        => 'mysql:host=localhost;dbname=testproject',
	'username'   => 'root',
	'password'   => 'password',
        'persistent'     => false,
        'compress'       => false,
        ),
        'identifier'     => '`',
        'table_prefix'   => '',
        'charset'        => 'utf8',
        'enable_cache'   => true,
        'profiling'      => false,
        'readonly'       => false,
    ),
);
/*
return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost:8001;dbname=testproject',
			'username'   => 'testproject',
			'password'   => 'testproject',
		),
	),
);
*/