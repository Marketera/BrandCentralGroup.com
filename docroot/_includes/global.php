<?php
/**
 * Load the Hark Framework and other globals needed for your website
 *
 * @author Nathan J. Brauer
 * @web http://NathanBrauer.com
 * @project Hark Framework
 */
include_once('Hark/init.php');

// Add additional includes here (e.g. load classes)

/**
 * Any code you wish to execute on EVERY page should appear here.
 *
 * DO:
 * - Put stuff that needs to be run before headers are sent
 * - headers, cookies, sessions, settings, etc...
 *
 * DON'T:
 * - Print anything to the browser (echo, print, etc)
 * - Add functions, classes, etc. These should be separated into
 *   their own files and those files should be included above.
 */

/**
 * Many PHP installations require seting the default timezone
 */
//date_default_timezone_set('America/Los_Angeles');


HarkConfig::CanonicalHomeURL('http://www.BrandCentralGroup.com');