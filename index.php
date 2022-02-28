<?php
/**
 * Here we require all necessary files for all pages of the application
 */
require_once "vendor/autoload.php";
require_once "app/core/Core.php";
require_once "app/config/config.php";
require_once "app/config/database.php";
require_once "app/helper/session_helper.php";
require_once "app/helper/form_helper.php";
require_once "app/helper/url_helper.php";

$appCore = new Core;

?>
