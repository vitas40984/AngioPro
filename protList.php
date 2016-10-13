<?php

require_once("db.php");
require_once("phpFunctions.php");

$protocols=protocols_all();

include("views/protList.php");

?>