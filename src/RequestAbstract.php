<?php


namespace carono\etxtru;


abstract class RequestAbstract
{
    protected $_client;

    /**
     * RequestAbstract constructor.
     *
     * @param Client|ClientAbstract $client
     */
    public function __construct($client)
    {
        $this->_client = $client;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->_client;
    }
}