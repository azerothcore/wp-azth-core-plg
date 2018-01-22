<?php

/*
  Plugin Name: AzerothCore Wordpress Integration
  Description: Provides AzerothCore integration for Wordpress
  Version: 0.1
  Author: Yehonal and AzerothCore community
 */

define("AC_PATH_PLG", plugin_dir_path(__FILE__));
define("AC_URL_PLG", plugin_dir_url(__FILE__));

require_once AC_PATH_PLG . 'src/Libs/SoapHandler.php';
require_once AC_PATH_PLG . 'src/Core/Options.php';

require_once AC_PATH_PLG . 'modules/AdminPanel/AdminPanel.php';
require_once AC_PATH_PLG . 'modules/ServerInfo/ServerInfo.php';



