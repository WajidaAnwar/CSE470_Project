<?php

require "config.php";
require "helpers.php";
require "database.php";
require "controller.php";
require "model.php";
require "app.php";

spl_autoload_register(function($class_name){

	require "../app/models/". ucfirst($class_name) . ".php";
});
