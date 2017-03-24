<html>
    <body>
        


    <?php
	$pathfileini = parse_ini_file("config.ini");
        
 $path = fopen("$pathfileini[logfile_path]", 'r');//ここのlogfilepassをサーバーのlogファイルのパスにする(webサーバーに設置する場合はipも)
 
 

while (!feof($path)) {
 

  $txt = fgets($path);
 

  echo $txt.'<br>';
 
}
 
fclose($path);  ?><br>
 <meta http-equiv="refresh" content="5; url=log.php">          
    </body>
</html>