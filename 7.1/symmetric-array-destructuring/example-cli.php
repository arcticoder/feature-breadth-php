<?php
$data = [
    [1, 'Tom'],
    [2, 'Fred'],
];

// Convert the following array iteration from list() style to [] style:
foreach ($data as list($id, $name)) {
    echo "index $id is $name\n";    
}