<?php
require_once("setting.php");

header( "Content-Type: text/html; charset=utf-8" );

// 固有の処理
require_once("model.php");

// **************************
// 初期画面( URL 呼び出し )
// **************************
if ( $_SERVER["REQUEST_METHOD"] == "GET" ) {

}

// **************************
// 処理
// **************************
if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

}

// **************************
// 画面定義
// **************************
require_once("view.php");

//debug_print();
?>
