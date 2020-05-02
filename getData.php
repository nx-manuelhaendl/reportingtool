<?php

// This is just an example of reading server side data and sending it to the client.
// It reads a json formatted text file and outputs it.

$json = '{
    "cols": [
    {"id":"","label":"Test","pattern":"","type":"string"},
    {"id":"","label":"Test2","pattern":"","type":"number"}
    ],
    "rows": [
    {"c":[{"v":"Open","f":null},{"v":3,"f":null}]},
    {"c":[{"v":"Click","f":null},{"v":1,"f":null}]},
    {"c":[{"v":"Bounce","f":null},{"v":1,"f":null}]},
    {"c":[{"v":"Job","f":null},{"v":1,"f":null}]},
    {"c":[{"v":"Unsubscribes","f":null},{"v":2,"f":null}]}
    ]
}';
echo json_decode($json);

// Instead you can query your database and parse into JSON etc etc

?>