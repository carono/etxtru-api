<?php

require '../vendor/autoload.php';
require 'ClientAbstract.php';
require 'RequestAbstract.php';
require 'ResponseAbstract.php';
require 'ConfigAbstract.php';
require 'func.php';

use GuzzleHttp\Client;
use carono\etxtru\codegen\ClientAbstract;

clearFolder('config');
clearFolder('request');
clearFolder('response');


$apidoc = 'apidoc.html';
if (file_exists($apidoc)) {
    $content = file_get_contents($apidoc);
} else {
    $content = (new Client())->get('https://www.etxt.ru/api/')->getBody()->getContents();
    file_put_contents($apidoc, $content);
}


$query = \phpQuery::newDocumentHTML($content);
$data = [];

foreach ($query->find('h4') as $title) {
    $name = pq($title)->text();
    if (strpos($name, '.') === false) {
        continue;
    }
    echo $name . "\n";
    $description = $query->find("td:contains('$name')")->next('td')->text();
    list($api, $method) = explode('.', $name);


    $params = [];
    if (pq($title)->nextAll('h5')->eq(0)->text() === 'Параметры') {
        foreach (pq($title)->nextAll('h5:contains("Параметры")')->eq(0)->next('table')->eq(0)->find('tr')->eq(0)->nextAll() as $tr) {
            $td = pq($tr)->find('td');
            foreach (explode(', ', $td->eq(0)->text()) as $name) {
                $params[] = [
                    'name' => $name,
                    'type' => $td->eq(1)->text(),
                    'description' => $td->eq(2)->text(),
                    'required' => isRequired($td->eq(2)->text())
                ];
            }
        }
    }
    $results = [];
    foreach (pq($title)->nextAll('h5:contains("Результат")')->next('table')->eq(0)->find('tr')->eq(0)->nextAll() as $tr) {
        $td = pq($tr)->find('td');
        foreach (explode(', ', $td->eq(0)->text()) as $name) {
            $results[] = [
                'name' => $name,
                'description' => $td->eq(1)->text(),
            ];
        }
    }

    if (!isset($data[$api])) {
        $data[$api] = [
            'name' => $api,
            'description' => $description,
            'methods' => []
        ];
    }

    $data[$api]['methods'][] = [
        'name' => $method,
        'description' => pq($title)->next('p')->text(),
        'params' => $params,
        'returns' => $results
    ];
};
file_put_contents('data.json', json_encode($data));

$abstractClient = new ClientAbstract();
$abstractClient->renderToFile($data);