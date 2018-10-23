<?php
require 'func.php';


$content = <<<HTML
[![Latest Stable Version](https://poser.pugx.org/carono/etxtru-api/v/stable)](https://packagist.org/packages/carono/etxtru-api)
[![Total Downloads](https://poser.pugx.org/carono/etxtru-api/downloads)](https://packagist.org/packages/carono/etxtru-api)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/carono/etxtru-api/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/carono/etxtru-api/?branch=master)
HTML;


$content .= asHeader('Введение');
$content .= <<<HTML
Данный клиент разработан для работы с сайтом https://www.etxtru.ru.  
Класс клиента генерируется автоматически на основе документации https://www.etxt.ru/api/
HTML;


$content .= asHeader('Инсталяция');
$content .= asCode('composer require carono/etxtru-api');
$content .= asHeader('Использование');
$content .= <<<HTML
```php
// Получение баланса
  
require '../vendor/autoload.php';

\$client = new \carono\etxtru\Client();
\$client->apiKey = 'token';
\$client->password = 'password';

\$response = \$client->users()->getBalance();
  
// Создание заказа
  
\$config = new \carono\etxtru\config\TasksSaveTaskConfig();
\$config->public = 0;
\$config->title = 'Задача 1';
\$config->description = 'Описание';
\$config->price = 5;
\$config->price_type = 1;
\$config->size = 500;
\$config->id_folder = 'folder_name';
\$config->deadline = '30.10.2018';
\$config->id_category = 1938;
\$config->file = fopen('/path/file.jpg', 'rb');

\$response = \$client->tasks()->saveTask(\$config);
```
HTML;

$data = json_decode(file_get_contents('data.json'), true);
$description = [
    ['Метод', 'Описание']
];
$sectionData = [];
foreach ($data as $api => $section) {
    $sectionName = formMethodName($section['name']);
    $description[] = ['$client->' . $sectionName . '()', $section['description']];

    $sectionData[] = asHeader($section['description']);
    $sectionData[] = <<<HTML
```php
\$client->{$sectionName}();
```

HTML;
    $methods = [
        ['Метод', 'Описание', 'Входные данные', 'Выходные данные']
    ];
    $sectionData[] = asHeader('Доступные методы', 2);
    foreach ($section['methods'] as $method) {
        $sectionData[] = '**' . $method['name'] . '** - ' . $method['description'];


        if (count($method['params']) > 4) {
            $params = '$config';
        } else {
            $params = [];
            foreach ($method['params'] as $param) {
                $params[] = '$' . $param['name'];
            }
            $params = implode(', ', $params);
        }
        $methodName = formMethodName($method['name']);

        $sectionData[] = <<<HTML
        
```php
\$client->{$sectionName}()->{$methodName}($params);
```

HTML;


        $sectionData[] = '';
        if ($method['params']) {
            $sectionData[] = asHeader('Входные параметры', 4);
            $params = [['Параметр', 'Тип', 'Описание']];
            foreach ($method['params'] as $param) {
                $params[] = [$param['name'], $param['type'], stripLines($param['description'])];
            }
            $sectionData[] = asTable($params);
        }

        $sectionData[] = asHeader('Результат', 4);
        $params = [['Параметр', 'Описание']];
        foreach ($method['returns'] as $param) {
            $params[] = [$param['name'], stripLines($param['description'])];
        }
        $sectionData[] = asTable($params);


//            $results[] = formParamLine($result);
//            if (isset($result['result'])) {
//                foreach ($result['result'] as $res) {
//                    $results[] = formParamLine($res);
//                }
//            }

        $sectionData[] = "\n\n***\n\n";
    }
    $sectionData[] = asTable($methods);
}
$content .= asTable($description);

foreach ($sectionData as $sectionDatum) {
    $content .= $sectionDatum;
}

file_put_contents('../README.md', trim($content));

