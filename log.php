<html>
    <body>
        


    <?php
	$pathfileini = parse_ini_file("config.ini");
        
 $path = fopen("$pathfileini[logfile_path]", 'r');
 
 

while (!feof($path)) {
 

  $txt = fgets($path);
 

  echo $txt.'<br>';
 
}
 
fclose($path);  ?><br>
 <meta http-equiv="refresh" content="3; url=log.php">          
    </body>
</html>