<?php
/**
 * All contrller should extend the BaseController class
 */

use App\core\BaseController;

class Welcome extends BaseController{

    public function __construct(){

    }
    public function index(){

        $this->view('welcome.view');
    }
}

?>