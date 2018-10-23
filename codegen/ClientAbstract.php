<?php

namespace carono\etxtru\codegen;

use carono\codegen\ClassGenerator;

class ClientAbstract extends ClassGenerator
{
    protected function formExtends()
    {
        return 'carono\rest\Client';
    }

    protected function formClassName()
    {
        return 'ClientAbstract';
    }

    protected function formClassNamespace()
    {
        return 'carono\etxtru';
    }

    protected function formOutputPath()
    {
        return dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $this->formClassName() . '.php';
    }

    public function methods()
    {
        $this->phpClass->setAbstract(true);
        foreach ($this->params as $request => $data) {
            $sectionRequest = new RequestAbstract();
            $sectionRequest->renderToFile($data);
            $className = "\\" . $sectionRequest->formClassNamespace() . "\\" . $sectionRequest->formClassName();

            $method = $this->phpClass->addMethod(formMethodName($request));
            $body = <<<PHP
return (new $className(\$this));
PHP;
            $method->addBody($body);
            $method->addComment($data['description']);
            $method->addComment("@return $className");
        }
        return false;
    }
}