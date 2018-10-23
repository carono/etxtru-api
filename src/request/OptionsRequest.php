<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\request;

class OptionsRequest extends \carono\etxtru\RequestAbstract
{
	/**
	 * Функция получения списка языков, используемых в системе.
	 *
	 * @return \carono\etxtru\response\GetLangsResponse|\stdClass
	 */
	public function getLangs()
	{
		$params = [];
		return $this->getClient()->getContent('options.getLangs', $params, 'carono\etxtru\response\GetLangsResponse');
	}
}
