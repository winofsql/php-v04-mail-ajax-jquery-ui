<!DOCTYPE html>
<html>

<head>
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta charset="utf-8">
<title>メール送信とMySQL登録( ajax )</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link id="link" rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

<?php
require_once("client_css.php");
require_once("client_js.php");
?>

</head>

<body>
<h3 class="alert alert-primary"><a href="control.php">メール送信とMySQL登録( ajax )</a></h3>
<div id="content">

    <form id="base" method="post">

        <div class="body">
            <div class="left">宛先</div>

            <div class="right">
                <input
                    size="50"
                    maxlength="50"
                    required
                    type="email" 
                    name="to" 
                    id="to" 
                    class="unit entry">
            </div>
        </div>
        <div class="body">
            <div class="left">タイトル</div>

            <div class="right">
                <input 
                    size="50"
                    maxlength="50"
                    type="text" 
                    name="subject" 
                    id="subject" 
                    class="unit entry">
            </div>
        </div>
        <div class="body">
            <div class="left">本文</div>

            <div class="right">
                <textarea 
                    name="text" 
                    id="text" 
                    class="unit entry"></textarea>
            </div>
        </div>

        <div class="body">
            <div class="left">添付ファイル</div>

            <div class="right">
                <input
                    type="file" 
                    name="file" 
                    id="file" 
                    class="unit entry">
            </div>
        </div>

        <div class="body">
            <div class="left">日付1</div>

            <div class="right">
                <input
                    autocomplete="off"
                    type="text" 
                    name="date1" 
                    id="date1" 
                    class="unit entry">
            </div>
        </div>

        <div class="body">
            <div class="left">日付2</div>

            <div class="right">
                <input
                    type="date" 
                    name="date2" 
                    id="date2" 
                    class="unit entry">
            </div>
        </div>

        <div>
            <input type="submit" name="btn" id="btn" value="メール送信" class="btn btn-primary unit mt-3">
        </div>

    </form>
    <div id="result" class="m-4"><?= $message ?></div>

</div>
</body>
</html>
