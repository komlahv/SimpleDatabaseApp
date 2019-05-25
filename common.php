<?php

/*
CSRF stands for Cross-Site Request Forgery, and is a way an 
attacker can trick a browser into executing a malicious action.

In order to prevent this, we will test the CSRF token in the session
against a value in a hidden input. If they match, the code will execute. If not, the code will exit.
*/
session_start();

if (empty($_SESSION['csrf'])) {
  if (function_exists('random_bytes')) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
  } else if (function_exists('mcrypt_create_iv')) {
    $_SESSION['csrf'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
  } else {
    $_SESSION['csrf'] = bin2hex(openssl_random_pseudo_bytes(32));
  }
}

/**
 * Escapes HTML for output
 *
 */

function escape($html)
{
  return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}