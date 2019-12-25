<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (isset($_REQUEST['name'])) {

  # Append something onto the $name variable so that you can see that it passed through your PHP script.
   $name = $_REQUEST['name'] . ' - 123 ';

    # I'm sending back a json structure in case there are multiple pieces of information you'd like
    # to pass back.
    header('Content-Type: application/json');
    print json_encode('{"success" : "' . $name . '"}');

    }

}

exit;

?>