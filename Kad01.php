<?php
/**
 * ファイル名：kad01.php
 *
 * 課題01(制御構文・配列)
 * 制御構文と配列を使用したスクリプト
 * 
 * @author リシン
 * @package sk2a34
 * @license ECC
 * Relese2.0 
 */

    header('charset=utf-8');
    //定数
    define('MESSAGE','Are you ready for PHP?');
    //変数
    $message = 'OK';

    
    /**
     * 配列の初期化
     */
    //配列
    $A1 = array('PHP', 'JSP', 'Ruby', 'Perl', 'Python');
    //連想配列
    $A2 = array('略語:PHP' => '正式名:Hypertext Preprocessor','略語:ASP' => '正式名:Active Server Pags','略語:JSP' => '正式名:Java Server Pages','略語:CGI' => '正式名:Common Gateway Interface','略語:IIS'=>'正式名:Internet Information Server');
?>
<!DOCTYPE html>
<html lang="ja">
<head><title>sample01</title>
<link rel="stylesheet" href="../css/kad.css">
</head>
<body>
<header>
<h1><span>課題01 制御構文・配列1</span></h1>
</header>
<div id="contents">
<h2>■文字列の表示(変数・定数)</h2>
<br>
定数(MESSAGE)：<?= MESSAGE ?>
<br>
<?php
    /**
     * 文字列の表示
     */
    print('変数($res)：'. $message);
?>
<br>
<br>
<h2>■配列1 表示</h2>
<br>
<h4>配列の内容を表示する(WEB要スクリプト一覧)</h4>
<br>
<?php
    /**
     * 配列の表示処理
     */
    for ($i = 0; $i < count($A1); $i++) {
         print($A1[$i] . "<br>\n");
    }
?>
<br>
<h2>■配列2 表示</h2>
<br>
<h4>配列の内容を表示する(略語→正式名)</h4>
<br>
<?php
    /**
     * 連想配列の表示処理
     */
    foreach ($A2 as $key => $val) {
        print($key . '→' . $val . "<br>\n");
    }

?>
</div>
</body>
</html>

