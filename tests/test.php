<?php
require '../vendor/autoload.php';

$client = new \carono\etxtru\Client();
$client->apiKey = '';
$client->password = '';

$response = $client->users()->getBalance();
print_r($response);

$config = new \carono\etxtru\config\TasksSaveTaskConfig();
$config->public = 0;
$config->title = 'Задача 1';
$config->description = 'Описание';
$config->price = 5;
$config->price_type = 1;
$config->size = 500;
$config->id_folder = 'test';
$config->deadline = '30.10.2018';
$config->id_category = 1938;

$response = $client->tasks()->saveTask($config);
print_r($response);