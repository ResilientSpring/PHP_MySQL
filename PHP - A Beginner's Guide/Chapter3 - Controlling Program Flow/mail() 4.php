<?php

/*Sending mail with an additional command line parameter.*/


mail('nobody@example.com', 'the subject', 'the message', null,
    '-fwebmaster@example.com');

// Source: https://www.php.net/manual/en/function.mail.php

?>