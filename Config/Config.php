<?php

namespace Config;

/**
 * Application configuration.
 */
class Config
{
    /**
     * App Name.
     *
     * @var string
     */
    const App_Name = 'Zest Framework';

    /**
     * App Version.
     *
     * @var inr
     */
    const App_Version = '1.9.1';

    /**
     * Database host.
     *
     * @var string
     */
    const DB_HOST = 'your-database-host';

    /**
     * Database driver.
     *
     * @var string
     */
    const DB_DRIVER = 'database-driver'; // MySQL is recommended

    /**
     * Database name.
     *
     * @var string
     */
    const DB_NAME = 'your-database-name';

    /**
     * Database user.
     *
     * @var string
     */
    const DB_USER = 'your-database-user';

    /**
     * Database password.
     *
     * @var string
     */
    const DB_PASS = 'your-database-password';

    /**
     * Show or hide error messages on screen.
     *
     * @var bool
     */
    const SHOW_ERRORS = true;

    /**
     * Default language.
     *
     * @var string
     */
    const Language = 'en';

    /**
     * Default Data dir.
     *
     * @var string
     */
    const Data_Dir = '../Storage/Data';

    /**
     * Default Session storage path.
     *
     * @var string
     */
    const Session_Path = '../Storage/Session/';

    /**
     * if true auto csrf validate.
     *
     * @var bool
     */
    const AUTO_CSRF_VARIFIED = false;

    /**
     * Default path for views/theme.
     *
     * @var string
     */
    const THEME_PATH = '../App/Views';
    /**
     * Default time for csrf token expire.
     *
     * @var int
     */
    const CSRF_TIMESTAMP = 3600;

    /**
     * Default cypto key (512-bit).
     *
     * @var keygen
     */
    const CRYPTO_KEY = 'RgUjXn2r5u8x/A?D(G+KbPeShVmYp3s6v9y$B&E)H@McQfTjWnZr4t7w!z%C*F-J';
    /**
     * Default site maintainness.
     *
     * @var bool
     */
    const Maintenance = false;
    /**
     * Route Cache if true load routes from cache.
     *
     * @var bool
     */
    const ROUTER_CACHE = false;
    /**
     * Router cache regenerate time.
     *
     * @var int
     */
    const ROUTE_CACHE_REGENERATE = 3600;
    /**
     * SMPT Host
     *
     * @var string
     */
    const SMPT_HOST = "your-smtp-host";
    /**
     * SMPT User
     *
     * @var string
     */    
    const SMPT_USER = "your-smtp-user";
    /**
     * SMPT Pass
     *
     * @var string
     */    
    const SMPT_PASS = "your-smtp-pass";
    /**
     * SMPT Port
     *
     * @var int
     */    
    const SMPT_PORT = 111;
}
