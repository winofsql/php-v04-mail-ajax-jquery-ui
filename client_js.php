<script>
// *************************************
// 簡易スマホチェック
// *************************************
jQuery.isMobile = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
toastr.options={"closeButton":false,"debug":false,"newestOnTop":false,"progressBar":false,"positionClass":"toast-bottom-center","preventDuplicates":false,"onclick":null,"showDuration":"300","hideDuration":"1000","timeOut":"3000","extendedTimeOut":"1000","showEasing":"swing","hideEasing":"linear","showMethod":"fadeIn","hideMethod":"fadeOut"};
if ( !$.isMobile ) {
	toastr.options.positionClass = "toast-top-center";
}

// *************************************
// jQuery UI 日付コントロール
// *************************************
var datepicker_option = {
    dateFormat: 'yy/mm/dd',
    dayNamesMin: ['日', '月', '火', '水', '木', '金', '土'],
    monthNames:  ['１月', '２月', '３月', '４月', '５月', '６月', '７月', '８月', '９月', '１０月', '１１月', '１２月'],
    showMonthAfterYear: true,
    yearSuffix: '年',
    changeYear: true,
    showAnim: 'fadeIn',
    yearRange: "c-5:c+5"
}

// ******************************
// jQuery onload イベント
// ******************************
$(function(){

    // *************************************
    // jQuery UI 日付コントロール
    // *************************************
    $( "#date1" ).datepicker(datepicker_option);

    // *************************************
    // 送信処理
    // *************************************
    $("#base").submit( function(event){

        // 本来の送信処理はキャンセルする
        event.preventDefault();

        if ( !confirm("送信してもよろしいですか?") ) {
            return;
        }

        console.log("送信処理開始");

        // 処理が終わるまで操作不可
        $(".unit").prop("disabled", true);

        // 送信用の FORM オブジェクトを作成
        var formData = new FormData();

        // 画像データサイズの制限
        formData.append("MAX_FILE_SIZE", 10000000);

        formData.append("pass", $("#pass").val() );
        formData.append("to", $("#to").val() );
        formData.append("subject", $("#subject").val() );
        formData.append("text", $("#text").val() );
        formData.append("date1", $("#date1").val() );
        formData.append("date2", $("#date2").val() );

        // 添付ファイル
        if ( $("#file").get(0).files.length == 1 ) {
            formData.append("file", $("#file").get(0).files[0]);
        }

        $.ajax({
            url: "./mail.php",
            type: "POST",
            data: formData,
            processData: false,  // jQuery がデータを処理しないよう指定
            contentType: false   // jQuery が contentType を設定しないよう指定
        })
        .done(function( data, textStatus ){
            console.log( "status:" + textStatus );
            console.log( "data:" + JSON.stringify(data, null, "    ") );

            if ( data.status ) {
                toastr.info( "メールが送信されました" );
                $(".entry").val("");
            }
            else {
                toastr.info( "メールの送信が失敗しました" );
            }

        })
        .fail(function(jqXHR, textStatus, errorThrown ){
            console.log( "status:" + textStatus );
            console.log( "errorThrown:" + errorThrown );
        })
        .always(function() {

            // 操作不可を解除
            $(".unit").prop("disabled", false);
        })
        ;

    });

});

</script>
