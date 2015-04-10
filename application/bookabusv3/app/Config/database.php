<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DATABASE_CONFIG {

public $default = array(
'datasource' => 'Database/Mysql',
'persistent' => false,
'host' => 'localhost',
'login' => 'root',
'password' => '',
'database' => 'bookabusv2',
'prefix' => '',
//'encoding' => 'utf8',
);

public $test = array(
'datasource' => 'Database/Mysql',
'persistent' => false,
'host' => 'localhost',
'login' => 'user',
'password' => 'password',
'database' => 'test_database_name',
'prefix' => '',
//'encoding' => 'utf8',
);
}