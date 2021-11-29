<?php
spl_autoload_register(function(string $_classname) {

	$filename=__DIR__."/../src/".str_replace("\\", "/", $_classname).".php";
	require_once($filename);
});

//let there be a formatter, le it be the default one.
$formatter=new \log\default_formatter();

//let there be a logger. Let it be the out logger with the default formatter.
$log=new \log\out_logger($formatter);
$log->info("hello world", "example");

//there, done.

