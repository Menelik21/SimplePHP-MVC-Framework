<?php

/**
 * This BaseController class is contrle Model and View of the app.
 * And extended by all controller
 */
namespace App\core;

class BaseController
{
	
	public function __construct()
	{
		# code...
	}

	public function view($filename, $data = []){

		$filePath = realpath(__DIR__."/../view/".$filename.".php");
		if (file_exists($filePath)) {
			require_once ($filePath);
		}
		
	}
	//Model include
	public function model($filename){

		$filePath = realpath(__DIR__."/../model/".$filename.".php");
		if (file_exists($filePath)) {
			require_once ($filePath);
			return new $filename;
		}
	}
}