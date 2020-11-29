<?php

/* Zest Frameowrk config file */
return [

    /*
     * Basic configuration.
     */
    'App' => [
        /*
        //App Name
    */
        'app_name'                => get_env('APP_NAME'),
        /*
        //App Version
    */
        'app_version'             => '3.0.0',
        /*
        //Display Error (recommended turn off in production)
    */
        'SHOW_ERRORS'             => get_env('APP_DEBUG'),
        /*
        //Default language
    */
        'language'                => 'en',
        /*
        //Default data dr
    */
        'data_dir'                => 'Data/',
        /*
        //Default cache dr
    */
        'cache_dir'               => 'Cache/',
        /*
        //Default session path
    */
        'session_path'            => 'Session/',
        /*
        //Current theme
    */
        'theme_path'              => 'App/Views/',
        /*
        //Router cache
    */
        'router_cache'            => false,
        /*
        //When router cache should regenerate
    */
        'router_cache_regenerate' => 3600,
        /*
        //Maintance mode
    */
        'maintenance'             => false,
        /*
        //Default time zone
    */
        'time_zone'               => 'UTC',
    ],

    /* Encryption */
    'encryption' => [
        /*
        | Supported "openssl" and "sodium"
        */
        'driver' => 'openssl',

        // Key, that is use to encrypt and decrypt.
        'key' => 'euyq74tjfdskjFDSGq74taeoqiertp',
    ],

    /* Hashing */
    'hashing' => [
        /* Default Hash Driver
        | Supported: "bcrypt", "argon2i", "argon2id"
        */
        'driver' => 'bcrypt',

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
            'memory'  => 1024,
            'threads' => 2,
            'time'    => 2,
        ],
    ],

    /* Cache Configuration */

    /*    |--------------------------------------------------------------------------
    | Cache    |--------------------------------------------------------------------------
    |
    | This option controls the default cache connection that gets used while
    | using this caching library. This connection is used when another is
    | not explicitly specified when executing a given caching function.
    | Supported: "apc", "apcu" , "session", "file", "memcached", "memcached", "redis"
    |
    */
    'cache' => [
        'driver' => get_env('CACHE_DRIVER'),

        'memcache' => [
            'host' => get_env('MEMCACHE_HOST'),
            'port' => get_env('MEMCACHE_PORT'),
        ],
        'memcached' => [
            'host'   => get_env('MEMCACHED_HOST'),
            'port'   => get_env('MEMCACHED_PORT'),
            'weight' => get_env('MEMCACHED_WEIGHT'),
        ],
        'redis' => [
            'host' => get_env('RADIS_HOST'),
            'port' => get_env('RADIS_PORT'),
        ],
    ],

    /*
     * Database configuration.
     */
    'Database' => [
        /* Database DRIVE */
        'DB_DRIVER' => get_env('DB_CONNECTION'), // mysql is recommendeds
        /* Database NAME */
        'DB_NAME' => get_env('DB_DATABASE'),
        /* MYSQL HOST */
        'MYSQL_HOST' => get_env('DB_HOST'),
        /* MYSQL PASS */
        'MYSQL_USER' => get_env('DB_USERNAME'),
        /* MYSQL PASS*/
        'MYSQL_PASS' => get_env('DB_PASSWORD'),
        /* SQLite name with path */
        'SQLITE_NAME' => get_env('SQLITE_NAME'),
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
        'SITE_EMAIL' => get_env('MAIL_FROM_ADDRESS'), // mysql is recommendeds
        /* SMTP HOST */
        'SMTP_HOST' => get_env('MAIL_HOST'),
        /* SMTP USER */
        'SMTP_USER' => get_env('MAIL_USERNAME'),
        /* SMTP PASS */
        'SMTP_PASS' => get_env('MAIL_PASSWORD'),
        /* SMTP PORT*/
        'SMTP_PORT' => get_env('MAIL_PORTW'),
    ],

    /* Dependencies */
    /* class that should be automatically resolved by the IOC */
    'dependencies' => [
        //examples
        'version' => \Zest\Common\Version::class,
        'pass'    => \Zest\Common\passwordManipulation::class,
    ],

    /*
     * Files Configuration
    */
    'files' => [
        //Default file mine type
        'mine' => [
            'type' => [
                'application/x-zip-compressed',
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'image/gif',
                'image/jpeg',
                'image/jpeg',
                'audio/mpeg',
                'video/mp4',
                'application/pdf',
                'image/png',
                'application/zip',
                'application/et-stream',
                'image/x-icon',
                'image/icon',
                'image/svg+xml',
            ],
        ],

        //Default types
        'types' => [
            'image' => ['jpg', 'png', 'jpeg', 'gif', 'ico', 'svg'],
            'zip'   => ['zip', 'tar', '7zip', 'rar'],
            'docs'  => ['pdf', 'docs', 'docx'],
            'media' => ['mp4', 'mp3', 'wav', '3gp'],
        ],
    ],

    /*
     *
     * Class aliases
     *
     *
     * The key is the alias and the value is the actual class.
     */
    'class_aliases' => [

    ],

];
