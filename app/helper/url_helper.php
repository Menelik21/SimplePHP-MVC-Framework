<?php
/**
 * This helper used to redirect to appropriate page of the application
 */
function redirect($page){

	header("Location:".APP_ROOT_PATH."index.php/".$page);
}

?>