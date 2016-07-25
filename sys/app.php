<?php

class App {
	public static function init(){
		request_log();
	}

	public static function router(){
		if(isset($_SERVER['PATH_INFO']) && !empty($_SERVER['PATH_INFO'])) { // apache && nginx
			$path=$_SERVER['PATH_INFO'];
			$path_arr=explode('/', $path);
			$ctrl=$path_arr[1];
			$act=isset($path_arr[2]) ? $path_arr[2] : 'index';
		}else{
			$ctrl='index';
			$act='index';
		}
		return ['ctrl'=>$ctrl.'Ctrl', 'act'=>$act.'Act'];
	}

	public static function run() {
		self::init();
		$router=self::router();
		$ctrl=$router['ctrl'];
		$act=$router['act'];
		$class=new $ctrl();
		$class->$act();
	}
}

