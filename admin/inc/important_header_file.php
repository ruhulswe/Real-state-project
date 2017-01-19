<?php 
    require_once (__DIR__.'/../../config/dbconfig.php');
    require_once (__DIR__.'/../../helper/session.php');
    require_once (__DIR__.'/../../helper/helper.php');
    $db = new Database;
    session::init();
     //$db->dbCreation("berkeley");
    //$db->createTable("admin");
    //$db->dropTable("admin");
    //$db->TRUNCATE("admin");