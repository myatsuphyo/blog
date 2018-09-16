<?php
/*
* Note that <pre> tags and newline characters (\n) are used
* for the sake of legibility
*/
// Path to the current file (i.e. '/simple_blog/test.php')
echo $_SERVER['PHP_SELF'], "\n\n";
// Information about the user's browser
echo $_SERVER['HTTP_USER_AGENT'], "\n\n";
// Address of the page that referred the user (if any)
echo $_SERVER['HTTP_REFERER'], "\n\n";
// IP address from which the user is viewing the script
echo $_SERVER['REMOTE_ADDR'], "\n\n";
// Human-readable export of the contents of $_SERVER
print_r($_SERVER);
?>