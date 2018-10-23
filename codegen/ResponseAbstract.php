<?php

namespace carono\etxtru\codegen;

use carono\codegen\ClassGenerator;

class ResponseAbstract extends ClassGenerator
{
    public $properties = [];

    protected function formExtends()
    {
        if (strpos($this->formClassName(), 'ElementResponse')) {
            return 'carono\etxtru\ArrayObject';
        }

        return 'carono\etxtru\ResponseAbstract';
    }

    protected function formClassName()
    {
        $name = $this->params['name'];


        $name = formClassName($name);
        if (!isset($this->params['returns']) && substr($name, -1, 1) == 's') {
            $name = substr($name, 0, -1) . 'Element';
        }
        return $name . 'Response';
    }

    protected function formClassNamespace()
    {
        return 'carono\etxtru\response';
    }

    protected function formOutputPath()
    {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'response' . DIRECTORY_SEPARATOR . $this->formClassName() . '.php';
    }

    protected function classProperties()
    {
        $properties = [];
        foreach ($this->params['returns'] as $param) {
            $properties[$param['name']] = [
                'comment' => [
                    stripAndWordWrap($param['description'])
                ],
                'value' => null
            ];
        }
        return $properties;
    }

}