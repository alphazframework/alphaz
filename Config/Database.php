<?php

namespace Config;

/**
 * Database configuration.
 */
class Database
{
    /* Database DRIVE */
    /**
     * Database driver.
     *
     * @var string
     */
    const DB_DRIVER = 'database-driver'; // mysql is recommendeds
    /**
     * Database name.
     *
     * @var string
     */
    const DB_NAME = 'your-database-name';	
	
    /* Start MYSQL configuration */
    /**
     * MySql host.
     *
     * @var string
     */
    const MYSQL_HOST = 'your-database-host';

    /**
     * Database user.
     *
     * @var string
     */
    const MYSQL_USER = 'your-database-user';

    /**
     * Database password.
     *
     * @var string
     */
    const MYSQL_PASS = 'your-database-password';

    /* End MYSQL configuration */
}
