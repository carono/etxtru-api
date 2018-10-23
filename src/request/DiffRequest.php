<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\request;

class DiffRequest extends \carono\etxtru\RequestAbstract
{
	/**
	 * Функция показывает степень схожести двух текстов
	 *
	 * @param string $source Исходный текст (длина от 30 до 20000 знаков)
	 * @param string $text Текст для сравнения (длина от 30 до 20000 знаков)
	 * @return \carono\etxtru\response\CompareTextResponse|\stdClass
	 */
	public function compareText($source, $text)
	{
		$params = [
			'source' => $source,
			'text' => $text
		];
		return $this->getClient()->getContent('diff.compareText', $params, 'carono\etxtru\response\CompareTextResponse');
	}
}
