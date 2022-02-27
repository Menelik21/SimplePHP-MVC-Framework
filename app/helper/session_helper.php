<?php
/**
 * This session helper used to display flash message like info, warning, alert and so on.
 * And also the app us this helper session_start to set $_SESSION on various page using the below session method
 */
session_start();

function flashMessageCreate(string $name, string $message): void
{
    // Remove existing session with this name
    if (isset($_SESSION[$name])) {
        unset($_SESSION[$name]);
    }
    // Set the session
    $_SESSION[$name] = $message;
}

function flashMessageDisplay(string $name)
{
    if (!isset($_SESSION[$name])) {
        return;
    }
    // Assigne session text to flash message and unset the session
    $flash_message = $_SESSION[$name];
    unset($_SESSION[$name]);
    return ($flash_message);
}

function flash(string $name = '', string $message ='')
{
    if ($name !== '' && $message !== '') {
        // create a flash message
        flashMessageCreate($name, $message);
    } elseif ($name !== '' && $message === '') {
        // display a flash message
        return flashMessageDisplay($name);
    }
    else{
      return;
    }
}
/**
 * This session helper method used to create a sssion on various place of the application.
 * Eg. session("loginerror","Incorrect username or password");
 * To display the message just call the session method session("loginError")
 */
function session(string $sessionName = '', string $sessionValue = ''){

    if (!empty($sessionName) & !empty($sessionValue)) {
        #create the session
        $_SESSION[$sessionName] = $sessionValue;
        return $_SESSION[$sessionName];
    }
    elseif (!empty($sessionName) && empty($sessionValue) && isset($_SESSION[$sessionName])) {
        #here we return the session with its name
        return $_SESSION[$sessionName];
    }
    else{
        return;
    }
    
}

?>
