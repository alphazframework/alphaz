<?php

/* Zest Frameowrk config file */
return [

    /**
     * Basic configuration.
     */
   'Config' => [
        'APP_NAME' => "Zest Framework",
        'APP_VERSION' => '3.0.0',
        'SHOW_ERRORS' => true,
        'LANGUAGE' => 'en',
        'DATA_DIR' => '../Storage/Data/',
        'CACHE_DIR' => '../Storage/Cache/',
        'SESSION_PATH' => '../Storage/Session/',
        'THEME_PATH' => '../App/Views/standard/',
        'CRYPTO_KEY' => 'your-key',
        'ROUTER_CACHE' => false,
        'ROUTE_CACHE_REGENERATE' => 3600,
        'MAINTENANCE' => false,
    ],

    /**
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

    /**
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

        /* Default errors messages */
        'errors' => [
            'password_confitm'   => 'Password much be matched',
            'username_not_exist' => 'Sorry, the username does not exists',
            'email_not_exist'    => 'Sorry, the email does not exists',
            'password_match'     => 'Password does not matched',
            'sticky_password'    => 'Password much be greate then 6 much contain lowercase,uppercase and special character',
            'account_verify'     => 'You should verify your account in order to login, another verification is sended to your email addresss',
            'already_login'      => 'Account already loggedin',
            'need_login'         => 'You need login to your account in order to update profile',
            'token'              => 'Invilid request',            
        ],
        
        /* Defai;t success messages */
        'success' => [
            'signin'          => 'Login successfully',
            'signup'          => 'Your account has been created successfully',
            'update'          => 'Your account has been updated',
            'update_password' => 'Your password has been updated',
            'verified'        => 'Your account verified login now to enjoy in our services',
            'reset'           => 'Password reset request has been sended to your email',
        ],

        /* Default email subjects */
        'subjects' => [
            'need_verify' => 'Account verification required',
            'verified'    => 'Account verified',
            'reset'       => 'Password reset request',
        ],

        'bodies' => [
            'need_verify' => 'Dear :email your account has been created you need verify your account<br><a href=":link">verify my account</a><br>Click above link if you unable to open copy paste below link <br>:link',
            'reset'       => 'Dear :email We recieve password reset request form your account reset your password now<br><a href=":link">reset my password</a><br>Click above link if you unable to open copy paste below link <br>:link',
            'verified'    => 'Dear :email your account verified login now to enjoy in our services',
        ],
    ],

    /**
     * Database configuration.
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
    /** class that should be automatically resolved by the IOC */
    'dependencies' => [
		//examples
        'version' => \Zest\Common\Version::class,
        'pass' => \Zest\Common\passwordManipulation::class,
    ]
];