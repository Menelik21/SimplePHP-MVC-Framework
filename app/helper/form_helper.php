<?php
/**
 * This helper used to for various functions on form like retain the form data after submit and error exist. 
 * Usage Eg. <input type="text" id="firstname" value ="<?php formDataRetain('firstname')" />
 */
function formDataRetain(string $fieldname = ''){

	if (isset($fieldname) && isset($_POST[$fieldname])) {
		# here we retain the form data after sumbit if the form is not successfully submit
		$retainValue = htmlspecialchars($_POST[$fieldname], ENT_QUOTES);
		echo $retainValue;
	}
	else{
		echo '';
	}
}

?>
