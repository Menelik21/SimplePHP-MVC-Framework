<?php

/**
 * The main purpose of this Core class is routing.
 * The URL is Controller/Method/arguments
 * Eg. http://localhost/myapp/index.php/post/delete/1
 */
class Core
{
	//URL components
	protected $controller = DEFAULT_CONTROLLER;
	protected $method = DEFAULT_METHOD;
	protected $param = [];
	protected $url;

	public function __construct()
	{
		$this->url = $this->urlParser();

		/*
		* First check the controller found in the controller folder if the controller found redirect 
		* the page to that controller else redirect to the default index page
		*
		*/

		if (isset($this->url) && isset($this->url[3]) && $this->url[3]!="") {

			//remove unwanted url path parts
			unset($this->url[0]);
			unset($this->url[1]);
			unset($this->url[2]);

			//set controller
			$this->controller = strtolower(ucfirst($this->url[3]));

			$filePath= (__DIR__."/../controller/".$this->controller.".php");
			if (file_exists($filePath)) {

				require_once($filePath);
				$this->controller = new $this->controller;
				unset($this->url[3]);

				if (isset($this->url[4]) && method_exists($this->controller, $this->url[4])) {

					$this->method = $this->url[4];
					unset($this->url[4]);
				}
				$this->param = $this->url ? array_values($this->url) : [];

				call_user_func_array([$this->controller,$this->method], $this->param);
			}
			else{
				$this->controller = DEFAULT_CONTROLLER;
				$filePath= realpath(__DIR__."/../controller/".$this->controller.".php");
				if (file_exists($filePath)) {
					require_once($filePath);
					$this->controller = new $this->controller;
					call_user_func_array([$this->controller,$this->method], $this->param);
				}
			}
	
		}
		else{

			$filePath= realpath(__DIR__."/../controller/".$this->controller.".php");
			if (file_exists($filePath)) {
				require_once($filePath);
				$this->controller = new $this->controller;
				call_user_func_array([$this->controller,$this->method], $this->param);
			}
		
		}
	}

	/**
	 * This urlParse method manipulate the request uri and return to the constractor to load appropriate
	 * controller class
	 */
	public function urlParser(){

		$url = $_SERVER['REQUEST_URI'];
		$urlComponent = parse_url($url);
		if(isset($urlComponent)){
			$urlComponent = filter_var($urlComponent['path'], FILTER_SANITIZE_URL);
			$urlComponent = explode("/", $urlComponent);
			return $urlComponent;
		}
		else{
			return "/";
		}

	}
}

?>
