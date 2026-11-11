<?php

require_once "./data/LoginRequest.php";
require_once "./exception/ValidationException.php";
require_once "./helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "Eko";
$loginRequest->password = "eko123";
/* $loginRequest->username = "   "; */
$loginRequest->password = "  ";

/* try { */
/*   validateLoginRequest($loginRequest); */
/* } catch (ValidationException $exception) { */
/*   echo "Validation Error : {$exception->getMessage()}" . "<br>"; */
/* } catch (Exception $exception) { */
/*   echo "Error : {$exception->getMessage()}" . "<br>"; */
/* } */

try {
  validateLoginRequest($loginRequest);
  echo "Login berhasil! <br>";
} catch (ValidationException | Exception $exception) {
  echo "Error : {$exception->getMessage()}" . "<br>";
  /* var_dump($exception->getTrace()); */
  echo $exception->getTraceAsString() . "<br>";
} finally {
  echo "Redirecting...";
}
