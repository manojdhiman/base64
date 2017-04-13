<?php
$files=getDirContents('D:\xampp\htdocs\convert2base64\Sample Pictures');
foreach($files as $f=>$l){
	$fname=basename($l);
	$content=base64_encode(file_get_contents($l));
	file_put_contents("D:/xampp/htdocs/convert2base64/Sample Pictures/".$fname,$content);
}
function getDirContents($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($path)) {
            $results[] = $path;
        } else if($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}
?>
