<?php

/**
 * An MVC framework and test project
 *
 * PHP Version 7
 *
 * @version 1.0
 * @author  Awais <asargodha@gmail.com>
 */

use App\Application;

require __DIR__ . '/vendor/autoload.php';

Application::routes(__DIR__ . '/routes.php')->run();
