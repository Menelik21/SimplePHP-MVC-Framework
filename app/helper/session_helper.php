<?php
/**
 * This session helper used to display flash message like info, warning, alert and so on.
 * And also the app us this helper session_start to set $_SESSION on various page
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

function flashMessageDisplay(string $name): void
{
    if (!isset($_SESSION[$name])) {
        return;
    }
    // Assigne session text to flash message and unset the session
    $flash_message = $_SESSION[$name];
    unset($_SESSION[$name]);
    echo ($flash_message);
}

function flash(string $name = '', string $message =''): void
{
    if ($name !== '' && $message !== '') {
        // create a flash message
        flashMessageCreate($name, $message);
    } elseif ($name !== '' && $message === '') {
        // display a flash message
        flashMessageDisplay($name);
    }
    else{
      return;
    }
}

?>