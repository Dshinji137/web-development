<?php
// Start session
session_start();
// Include configuration
require_once('config/config.php');

// Helper function files
require_once('helpers/system_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');

//Auto load class
function __autoload($class_name) {
  require_once('libraries/'.$class_name.'.php');
}
 ?>
