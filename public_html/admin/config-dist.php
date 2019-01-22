<?php
// HTTP
define('HTTP_SERVER', 'https://www.example.org/admin/');
define('HTTP_CATALOG', 'https://www.example.org/');

// HTTPS
define('HTTPS_SERVER', 'https://www.example.org/admin/');
define('HTTPS_CATALOG', 'https://www.example.org/');

// DIR
define('DIR_APPLICATION', '/var/www/html/example.org/public_html/admin/');
define('DIR_SYSTEM', '/var/www/html/example.org/public_html/system/');
define('DIR_IMAGE', '/var/www/html/example.org/public_html/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', '/var/www/html/example.org/public_html/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'user');
define('DB_PASSWORD', 'pass');
define('DB_DATABASE', 'name');
define('DB_PORT', '3306');
define('DB_PREFIX', 'prefix__');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
