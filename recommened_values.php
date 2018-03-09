<?php

class TYPO3ProbeConfiguration {
    /**
     * Max upload size in megabytes
     * @var int
     */
    public static $upload_size = 100;
    /**
     * Max execution time in seconds
     * @var int
     */
    public static $max_execution_time = 240;
    /**
     * Recommended memory limit in megabytes
     * @var int
     */
    public static $memory_limit = 128;

    /**
     * Recommended Apache modules
     * @var array
     */
    public static $apache_modules = array(
        'mod_rewrite',
        'mod_deflate',
        'mod_alias',
        'mod_expires',
        'mod_filter',
        'mod_headers',
        'mod_mime',
        'mod_php7',
    );
}
