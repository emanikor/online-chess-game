<?php
 require_once 'connect.php';

 $db->exec("CREATE TABLE IF NOT EXISTS feedback(id SERIAL,name tinytext, email tinytext, message tinytext,sent_on timestamp, status tinyint)");
 $db->exec("CREATE TABLE IF NOT EXISTS users(id SERIAL,name tinytext, email tinytext,id_no int, password tinytext,created_at timestamp)");

 