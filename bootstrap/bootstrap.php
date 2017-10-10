<?php

// Constant, only within the file and within specific place.
// Define the system directory
define ('SYSTEM_DIR', __DIR__ . '/..'); // system directory

define ('APP_DIR', SYSTEM_DIR . '/app'); // public directory

define ('PUBLIC_DIR', SYSTEM_DIR . '/public'); // public directory

define ('ROUTES_DIR', SYSTEM_DIR . '/routes'); // Route definitions directory

define ('VENDOR_DIR', SYSTEM_DIR . '/vendor'); // vendor directory




// from https://classes.codingbootcamp.cz/coding-bootcamp/autumn-2017/518- last task
// require_once the three files that we added/created

require_once VENDOR_DIR . '/codingbootcamp/exercises/db.php';

require_once VENDOR_DIR . '/codingbootcamp/tinymvc/helpers.php';

require_once VENDOR_DIR . '/codingbootcamp/tinymvc/request.php';

require_once VENDOR_DIR . '/polakjan/tinymvc/config.php';



