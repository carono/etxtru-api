<?php


namespace carono\etxtru;


abstract class ResponseAbstract extends ArrayObject
{
    /**
     * @var boolean
     */
    public $success;
    /**
     * @var string
     */
    public $error;


    /**
     * @param $property
     * @return mixed|null
     */
    public function getResponseClass($property)
    {
        return isset($this->_responseClasses[$property]) ? $this->_responseClasses[$property] : null;
    }
}