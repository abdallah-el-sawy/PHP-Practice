<?php

/* PHP.ini & configuration */

// error_reporting , error_log , display_errors

# error_reporting
var_dump(ini_get("error_reporting"));
echo "<br />";

# error_log
var_dump(ini_get("error_log"));
echo "<br />";

# display_errors
var_dump(ini_get("display_errors"));
echo "<br />";

// there are more abou errors but we will talk about it later in error handling section