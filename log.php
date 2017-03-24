<html>
    <body>
        


    <?php
 $fp = fopen("C:/Users/meroe/Desktop/Genisys/server.log", 'r');
 
// whileで行末までループ処理
while (!feof($fp)) {
 
  // fgetsでファイルを読み込み、変数に格納
  $txt = fgets($fp);
 
  // ファイルを読み込んだ変数を出力
  echo $txt.'<br>';
 
}
 
// fcloseでファイルを閉じる
fclose($fp);  ?><br>
<meta http-equiv="refresh" content="5; url=log.php">          
    </body>
</html>