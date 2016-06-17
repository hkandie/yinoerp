
<?php

// outputs the username that owns the running php/httpd process
// (on a system with the "whoami" executable in the path)
exec('php yii help gii/model');
$dir = __DIR__ . "/common/modules/";
$files1 = scandir($dir);
$i = 0;
$comd="";
foreach ($files1 as $value) {
    if ($i == 2) {
        continue;
    }
    if (strpos($value, '.') !== false) {
        continue;
    }
    $files2 = scandir("$dir/$value/models");
    print_r($value . "\n");
    foreach ($files2 as $file2) {
        print_r($file2 . "\n");
        $filename = explode(".", $file2);
        $comd .= "php yii gii/crud --controllerClass : common\\modules\\" . $value . "\\controllers\\" . $filename[0] . "Controller"
                . " --modelClass: common\\modules\\" . $value . "\\models\\" . $filename[0]."\n";
    }
    $i++;
}
$myfile = fopen("list.txt", "w") or die("Unable to open file!");
fwrite($myfile, $comd);
fclose($myfile);
