<style>
* {
    font-size: 16px;
    font-family: "ヒラギノ角ゴPro W6","Hiragino Kaku Gothic Pro W6","メイリオ",Meiryo,"ＭＳ Ｐゴシック",Verdana,Arial,Helvetica,sans-serif;
}

/* PC 用の表示 */
@media screen and ( min-width:480px ) {
    #content {
        margin: 20px;
    }
    #base {
        width: 650px;
        border: 0px solid #ff0000;
    }
    .unit {
        width: 500px;
        margin-top: 5px;
    }
    #pass {
        width: 160px;
    }
    #text {
        height: 120px;
    }
    .left {
        vertical-align: top;
        display:inline-block;
        width: 100px;
        padding-top: 0.5rem;	
    }
    .btn {
        width: 160px;
    }
    .right {
        display:inline-block;
    }

}

/* スマホ用の表示 */
@media screen and ( max-width:479px ) {
    #content {
        margin: 0px;
    }
    #base {
        margin-top: 8px;
    }
    .unit {
        width: 100%;
    }
    
    .left,.right {
    }

    .left {
        padding: 4px;
    }

    #text {
        width: 100%;
        height: 120px;
    }

}
</style>
