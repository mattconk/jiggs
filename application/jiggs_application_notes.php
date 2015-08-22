<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Notes about Changes to this application
 * 
 * @author Matt Conk <mattconk@gmail.com>
 * @version Sep 2, 2013
 * @package Jiggs App
 */

/*
 * Added the Autocrumb - Lightweight Breadcrumb Helper (ver.12.05.1)
 * @link http://ellislab.com/forums/viewthread/137949/
 * 
 * 1. Put breadcrumb_helper.php to application/helpers.
 * 2. Put breadcrumb.php to application/config.
 * 3. In autoload : $autoload[‘helper’] = array(‘breadcrumb’)
 * 4. Add these line to your view file: <?php echo set_breadcrumb(); ?>. 
 *      I suggest that you put it on master template so that it can save time as
 *      you don’t need to add text in every view page.
 * 5. Change the configuration as you need.
 */
