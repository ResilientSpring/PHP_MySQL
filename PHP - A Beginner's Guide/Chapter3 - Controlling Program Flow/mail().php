<?php

/* Using mail() to send a simple email: */

// The message
$message = "Line 1\r\nLine 2\r\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('caffeinated@example.com', 'My Subject', $message);


// Source: https://www.php.net/manual/en/function.mail.php

?>
