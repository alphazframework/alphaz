<?php

namespace Config;

/**
 * Application configuration
 *
 */
class Config
{
    /**
     * App Name
     * @var string
     */
    const App_Name = 'Zest Framework';
    
    /**
     * App Version
     * @var inr
     */
    const App_Version = '1.0.3';   
    
    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'your-database-host';

    /**
     * Database driver
     * @var string
     */
    const DB_DRIVER = 'database-driver'; // MySQL is recommended
    
    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'your-database-name';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'your-database-user';

    /**
     * Database password
     * @var string
     */
    const DB_PASS = 'your-database-password';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

    /**
     * Default language
     * @var string
     */
    const Language = 'en';
    
    /**
     * Default Data dir
     * @var string
     */
    const Data_Dir = '../Storage/Data';
    
    /**
     * Default Session storage path
     * @var string
     */
    const Session_Path = '../Storage/Session/';
}
