<?php

/* Zest Frameowrk config file */
return [

    /*
     * Basic configuration.
     */
   'Config' => [
        'APP_NAME'               => 'Zest Framework',
        'APP_VERSION'            => '3.0.0',
        'SHOW_ERRORS'            => true,
        'LANGUAGE'               => 'en',
        'DATA_DIR'               => '../Storage/Data/',
        'CACHE_DIR'              => '../Storage/Cache/',
        'SESSION_PATH'           => '../Storage/Session/',
        'THEME_PATH'             => '../App/Views/standard/',
        'CRYPTO_KEY'             => 'your-key',
        'ROUTER_CACHE'           => false,
        'ROUTE_CACHE_REGENERATE' => 3600,
        'MAINTENANCE'            => false,
    ],

	 /* Hashing */	
	'hashing' => [
		/* Default Hash Driver */
		'driver' => 'argon2id',
		
		/*
		| Bcrypt Options
		
		| Here you may specify the configuration options that should be used when
		| passwords are hashed using the Bcrypt algorithm. This will allow you
		| to control the amount of time it takes to hash the given password.
		|
		*/
        'bcrypt' => [
            'cost' => 10,
        ],
		
		/*
		| Argon Options
		
		| Here you may specify the configuration options that should be used when
		| passwords are hashed using the Bcrypt algorithm. This will allow you
		| to control the amount of time it takes to hash the given password.
		|
		*/
        'argon' => [
            'memory' => 1024,
            'threads' => 2,
            'time' => 2,
        ],        
	],	
	
    /*
     * Database configuration.
     */
    'Database' => [
        /* Database DRIVE */
        'DB_DRIVER' => 'database-drive', // mysql is recommendeds
        /* Database NAME */
        'DB_NAME' => 'database-name',
        /* MYSQL HOST */
        'MYSQL_HOST' => 'mysql-host',
        /* MYSQL PASS */
        'MYSQL_USER' => 'mysql-user',
        /* MYSQL PASS*/
        'MYSQL_PASS' => 'mysql-pass',
        /* SQLite name with path */
        'SQLITE_NAME' => 'path/to/sqlite',
    ],

    /*
     * Auth configuration.
     */
    'Auth' => [
        /* Auth database name */
        'DB_NAME' => 'db-name',
        /* Auth database table name*/
        'DB_TABLE' => 'db-table',
        /* Auth default verification link */
        'VERIFICATION_LINK' => '/account/verify/',
        /* Auth default password reset link */
        'RESET_PASSWORD_LINK' => '/account/reset/password',
        /* Is send auth relate email over smtp. */
        'IS_SMTP' => false,
        /* Is user need to verify their email */
        'IS_VERIFY_EMAIL' => false,
        /* Is user password should be strong? */
        'STICKY_PASSWORD' => false,
    ],

    /*
     * Email configuration.
     */
    'email' => [
        /* Site Email */
        'SITE_EMAIL' => 'site-email', // mysql is recommendeds
        /* SMTP HOST */
        'SMTP_HOST' => 'smtp-host',
        /* SMTP USER */
        'SMTP_USER' => 'smtp-user',
        /* SMTP PASS */
        'SMTP_PASS' => 'smtp-pass',
        /* SMTP PORT*/
        'SMTP_PORT' => 'smtp-port',
    ],

    /* Dependencies */
    /* class that should be automatically resolved by the IOC */
    'dependencies' => [
        //examples
        'version' => \Zest\Common\Version::class,
        'pass'    => \Zest\Common\passwordManipulation::class,
    ],
];
