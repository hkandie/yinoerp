
<?php

// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
exec('php yii help gii/model');
$dir = __DIR__ . "/common/modules/";
$files1 = scandir($dir);
$i=0;
foreach ($files1 as $value) {
    if($i==1){
        continue;
    }
    if (strpos($value, '.') !== false){
        continue;
    }
    $files2 = scandir("$dir/$value/models");
    print_r($value."\n");
    foreach ($files2 as $file2) {
        print_r($file2."\n");
        echo exec("php yii gii/crud --controllerClass:".$dir."/".$value."/.controllers/".$file2);
    }
    $i++;
}
