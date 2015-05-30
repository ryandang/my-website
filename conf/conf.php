<?php
/**
 * This is a configuration file containing useful functions and
 * variables.
 */
 
/**
 * base_url() returns the base url as a string
 */
 
define("SITE","DEV"); 
 
if(SITE == "DEV")
{
function base_url() {return "http://localhost/livesite2/";}
}
else
{
function base_url() {return "http://www.ryandang.ca/";}
}
define("BASE_URL",base_url());
define("BASE_FOLDER","");
define("IMG_WIDTH","400");
?>