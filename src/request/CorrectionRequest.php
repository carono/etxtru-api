<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\request;

class CorrectionRequest extends \carono\etxtru\RequestAbstract
{
	/**
	 * Функция создает задание на коррекцию.
	 *
	 * @param \carono\etxtru\config\CorrectionAddConfig|array $config
	 * @return \carono\etxtru\response\AddResponse|\stdClass
	 */
	public function add($config)
	{
		$params = [];
		foreach ($config instanceof \carono\etxtru\ConfigAbstract ? $config->toArray() : $config as $key => $value) {
		    $params[$key] = $value;
		}
		return $this->getClient()->getContent('correction.add', $params, 'carono\etxtru\response\AddResponse');
	}


	/**
	 * Функция создает задание на коррецию из заказов и статей.
	 *
	 * @param \carono\etxtru\config\CorrectionImportConfig|array $config
	 * @return \carono\etxtru\response\ImportResponse|\stdClass
	 */
	public function import($config)
	{
		$params = [];
		foreach ($config instanceof \carono\etxtru\ConfigAbstract ? $config->toArray() : $config as $key => $value) {
		    $params[$key] = $value;
		}
		return $this->getClient()->getContent('correction.import', $params, 'carono\etxtru\response\ImportResponse');
	}
}
