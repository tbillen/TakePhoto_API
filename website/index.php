<?php

global $query, $db;

foreach ($db->select($query::getImage(1)) as $res){
    $b64 = $res["image"];
    print "<img src='data:image/jpeg;base64, $b64'>";
}


