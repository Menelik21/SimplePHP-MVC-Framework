<?php

use App\core\BaseController;

class Logout extends BaseController{

    public function userLogout(){

        unset($_SESSION['username']);
        unset($_SESSION['success']);
        unset($_SESSION['firstname']);
        unset($_SESSION['lastname']);
        session_destroy();
        redirect('login/loginpage');
		exit;
    }
}

?>