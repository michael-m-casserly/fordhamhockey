<?php if (!defined("__IH")) { session_start(); define("__IH","efac6ff107b2b68a7b500266a61a1126f4b823f4"); } if ( isset($_POST["__il"]) && isset($_POST["__ip"]) && sha1($_POST["__ip"].substr($_POST["__il"],0,2)) === __IH ) { $_SESSION["__ih"] = __IH; } else if ( !isset($_SESSION["__ih"]) || $_SESSION["__ih"] !== __IH ) { echo "<h1>Authentication required</h1><form action='' method=post>Username: <input name=__il type=text><br>Password: <input name=__ip type=password><br><input type=submit value=Login></form>"; return; } ?><?php

function pt_register()
{
  $num_args = func_num_args();
   $vars = array();

   if ($num_args >= 2) {
       $method = strtoupper(func_get_arg(0));

       if (($method != 'SESSION') && ($method != 'GET') && ($method != 'POST') && ($method != 'SERVER') && ($method != 'COOKIE') && ($method != 'ENV')) {
           die('The first argument of pt_register must be one of the following: GET, POST, SESSION, SERVER, COOKIE, or ENV');
     }

       $varname = "HTTP_{$method}_VARS";
      global ${$varname};

       for ($i = 1; $i < $num_args; $i++) {
           $parameter = func_get_arg($i);

           if (isset(${$varname}[$parameter])) {
               global $$parameter;
               $$parameter = ${$varname}[$parameter];
          }

       }

   } else {
       die('You must specify at least two arguments');
   }

}

?>
