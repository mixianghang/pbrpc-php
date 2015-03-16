<?php
require 'ProtobufParser.php';

if (!debug_backtrace()) {
    if (!class_exists('ProtobufMessage')) {

        echo $argv[0] .
            ' requires protobuf extension installed to run' .
            PHP_EOL;

        exit(1);
    }

    $optionError = false;
    $useNamespaces = false;

    $iterator = new RegexIterator(new ArrayIterator($argv), '/^-/');
    foreach ($iterator as $key => $value) {
        switch ($value) {
            case '-n' :
            case '--use-namespaces' :
                $useNamespaces = true;
                break;
            case '--prefix' :
            case '-p' :
                $prefix = $argv[$key+1];
                break;
            case '--outdir' :
            case '-o' :
                $outdir = $argv[$key+1];
                break;
            case '--help' :
            case '-h'     :
                echo '--prefix/-p set prefix for classname'.PHP_EOL;
                echo '--outdir/-o set output directory for class files'.PHP_EOL;
                echo '--outdir/-o set output directory for class files'.PHP_EOL;
                echo '--help/-h set help information'.PHP_EOL;
                break;
            default :
                $optionError = true;
                break;
        }
    }

    if ($optionError) {
        echo '--prefix/-p set prefix for classname'.PHP_EOL;
        echo '--outdir/-o set output directory for class files'.PHP_EOL;
        echo '--outdir/-o set output directory for class files'.PHP_EOL;
        echo '--help/-h set help information'.PHP_EOL;
        break;
    }

    $parser = new ProtobufParser($useNamespaces,$prefix,$outdir);

    $file = $argv[1];
    if (!file_exists($file)) {
        printf($file . ' does not exist' . PHP_EOL);
        exit(1);
    }

    if (!is_file($file)) {
        printf($file . ' is not a file' . PHP_EOL);
        exit(1);
    }

    try {
        $parser->parse($file,$outdir);
    } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}
