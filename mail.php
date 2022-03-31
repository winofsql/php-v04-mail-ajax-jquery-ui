<?php
require_once("setting.php");

header( "Content-Type: application/json; charset=utf-8" );

// 固有の処理
require_once("model.php");

db_mail();

