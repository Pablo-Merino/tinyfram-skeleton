<?php
/**
 * <strong>Name :  index.php</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5
 *
 * @category  tinyfram-skeleton
 * @package   
 * @author    pmerino <pablo.perso1995@gmail.com>
 * @copyright 2015
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   GIT: $Id$
 * @link      
 * @since     File available since Release 0.1.0
 */

chdir(dirname(__DIR__));

require './vendor/autoload.php';

use TinyFram\FrameworkCore;

$app = FrameworkCore::getInstance();

$app->setAppConfig(
    array(
        "views" => dirname(__DIR__)."/app/views/",
        "db" => array(
            "host" => "localhost",
            "username" => "root",
            "password" => "",
            "dbname" => "blog"
        )
    )
);

require './app/config/routes.php';

$app->dispatch();