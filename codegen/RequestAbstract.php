<?php

namespace carono\etxtru\codegen;

use carono\codegen\ClassGenerator;

class RequestAbstract extends ClassGenerator
{
    /**
     * @return string
     */
    protected function formExtends()
    {
        return 'carono\etxtru\RequestAbstract';
    }

    /**
     * @return string
     */
    protected function formClassName()
    {
        return ucfirst(formClassName($this->params['name'])) . 'Request';
    }

    /**
     * @return string
     */
    protected function formClassNamespace()
    {
        return 'carono\etxtru\request';
    }

    /**
     * @return string
     */
    protected function formOutputPath()
    {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'request' . DIRECTORY_SEPARATOR . $this->formClassName() . '.php';
    }

    /**
     * @return bool
     */
    public function methods()
    {

        foreach ($this->params['methods'] as $methodData) {

            $methodName = formMethodName($methodData['name']);
            $method = $this->phpClass->addMethod($methodName);
            $method->addComment(stripAndWordWrap($methodData['description']));
            $params = [];
            if (count($methodData['params']) > 4) {
                $config = new ConfigAbstract();
                $config->renderToFile(array_merge(['api' => $this->params['name']], $methodData));
                $className = '\\' . $config->formClassNamespace() . '\\' . $config->formClassName();
                $method->addParameter('config');
                $method->addComment("@param $className|array \$config");
                $body = <<<PHP
foreach (\$config instanceof \carono\\etxtru\ConfigAbstract ? \$config->toArray() : \$config as \$key => \$value) {
    \$params[\$key] = \$value;
}
PHP;
                $paramsStr = self::arrayAsPhpVar($params);
                $method->addBody("\$params = $paramsStr;");
                $method->addBody($body);
            } else {
                foreach ($methodData['params'] as $param) {
                    $type = formParamType($param['type']);
                    $description = trim(stripAndWordWrap($param['description']));
                    $method->addComment("@param {$type} \${$param['name']} {$description}");
                    $params[$param['name']] = '$' . $param['name'];
                    if ($param['required']) {
                        $method->addParameter($param['name']);
                    } else {
                        $method->addParameter($param['name'], null);
                    }
                }
                $paramsStr = self::arrayAsPhpVar($params);
                $method->addBody("\$params = $paramsStr;");
            }
            $response = new ResponseAbstract();
            if (isset($methodData['returns'][0])) {
                $response->renderToFile(['name' => $methodName, 'returns' => $methodData['returns']]);
                $className = $response->formClassNamespace() . '\\' . $response->formClassName();
            } else {
                $className = 'carono\etxtru\Response';
            }
            $method->addComment("@return \\$className|\stdClass");
            $api = $this->params['name'] . '.' . $methodData['name'];
            $method->addBody("return \$this->getClient()->getContent('$api', \$params, '$className');");
        }
        return false;
    }

    protected static function arrayAsPhpVar($array)
    {
        $export = [];
        foreach ($array as $key => $value) {
            $export[] = "'$key' => " . (strpos($value, '$') === false ? "'$value'" : $value);
        }
        $export = implode(",\n\t", $export);
        if ($array) {
            $result = "[\n\t$export\n]";
        } else {
            $result = '[]';
        }
        return $result;
    }
}