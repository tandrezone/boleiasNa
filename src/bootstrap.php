<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";


use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();

// loads .env, .env.local, and .env.$APP_ENV.local or .env.$APP_ENV
//$dotenv->loadEnv(__DIR__ . '/../.env');

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array("/home/tiago/projects/boleiasNA/src"),
    isDevMode: true,
);
// or if you prefer XML
// $config = ORMSetup::createXMLMetadataConfiguration(
//    paths: array(__DIR__."/config/xml"),
//    isDevMode: true,
//);

// configuring the database connection
$connection = DriverManager::getConnection([
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . "/db.sqlite",
], $config);

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);

require ("/home/tiago/projects/boleiasNA/src/code/teste.php");