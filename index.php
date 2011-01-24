<?php
/**
 * @author Anthony Gaudio
 * @category ANM293 - Advanced PHP
 * Project 01
 * Gitting to know Git
 */
ob_start();
/*
 * Start output buffering
 * This means to 'capture' everything in the buffer and don't immediately
 * send it to the browser. If a parameter is passed, it will specify the 
 * callback function.
 */

echo 'My First Project with Output Buffering';
/*
 * Sample echo statement with text intended to be displayed in the browser
 */
$v = ob_get_contents();
/*
 * assign content of buffer to the variable $v with ob_get_contents();
 */
ob_end_clean();
/*
 * clean, or empty the buffer without sending it to the browser
 * 
 */
echo $v;
/*
 * display the contents on varible $v which just received the contents of the
 * buffer.
 * 
 */
?>
