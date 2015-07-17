<?php


require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('client_manager', 'prod', false);
sfContext::createInstance($configuration)->dispatch();
