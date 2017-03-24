<html>
    <body>
        


    <?php
	
 $pass = fopen("logfilepass", 'r');//ここのlogfilepassをサーバーのlogファイルのパスにする(webサーバーに設置する場合はipも)
 
 

while (!feof($pass)) {
 

  $txt = fgets($pass);
 

  echo $txt.'<br>';
 
}
 
fclose($pass);  ?><br>
<meta http-equiv="refresh" content="5; url=log.php">          
    </body>
</html>