<?php

require_once(dirname(__FILE__).'/./protobuf_php5.2_lib/parser/pb_parser.php');

$phpver = explode(".",phpversion());
//$version = $phpver[0] * 100 + $phpver[1] * 10 + $phpver[2];
$version = $phpver[0] * 100 + $phpver[1] * 10 ;

if($version < 530) {
    
    echo 'using php 5.2.17';
    echo "\n";
    $proto = new PBParser();
    
    if($argc > 1) {
        $proto->parse($argv[1]);
        echo 'File parsing done!';
        echo "\n";
    } else {
        echo 'please input file name *.proto';
        echo "\n";
        echo 'usage: php protoc.php echo.proto';
        echo "\n";
    }

} else {
    echo 'not support php version > 5.3';
    echo "\n";
} 

?>
