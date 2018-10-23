<?php

namespace carono\etxtru\codegen;


use carono\codegen\ClassGenerator;

class ConfigAbstract extends ClassGenerator
{
    protected function formExtends()
    {
        return 'carono\etxtru\ConfigAbstract';
    }

    protected function formClassName()
    {
        return formClassName($this->params['api'] . '_' . $this->params['name'], []) . 'Config';
    }

    protected function formClassNamespace()
    {
        return 'carono\etxtru\config';
    }

    protected function formOutputPath()
    {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . $this->formClassName() . '.php';
    }

    protected function classProperties()
    {
        $properties = [];
        foreach ($this->params['params'] as $param) {
            if (is_string($param)) {
                continue;
            }
            $properties[$param['name']] = [
                'comment' => [
                    stripAndWordWrap(stripSpaces($param['description'])),
                    '@var ' . formParamType($param['type'])
                ]
            ];
        }
        return $properties;
    }
}