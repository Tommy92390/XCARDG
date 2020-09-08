<?php

function getHeading($id){
    require db_class.php;
    $DB = new DB();
    $heading = $DB->query('SELECT id, title, content FROM section WHERE id = ?', array($_GET['id']));
    return $heading;
}

function getAdvertising($id){
    $DB = new DB();
    $ad = $DB->query('SELECT enterprise, content FROM advertisement WHERE id = ?', array($_GET['id']));
    return $ad;
}