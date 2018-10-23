<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\request;

class ArticlesRequest extends \carono\etxtru\RequestAbstract
{
	/**
	 * Возвращает список готовых статей на продажу. Поле "Описание статьи" не выводится во избежание
	 * автоматической выемки всех описаний статей.
	 *
	 * @param \carono\etxtru\config\ArticlesGetListConfig|array $config
	 * @return \carono\etxtru\response\GetListResponse|\stdClass
	 */
	public function getList($config)
	{
		$params = [];
		foreach ($config instanceof \carono\etxtru\ConfigAbstract ? $config->toArray() : $config as $key => $value) {
		    $params[$key] = $value;
		}
		return $this->getClient()->getContent('articles.getList', $params, 'carono\etxtru\response\GetListResponse');
	}


	/**
	 * Функция осуществляет покупку указанной статьи текущим пользователем
	 *
	 * @param int $id Идентификатор покупаемой статьи
	 * @return \carono\etxtru\response\BuyResponse|\stdClass
	 */
	public function buy($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('articles.buy', $params, 'carono\etxtru\response\BuyResponse');
	}


	/**
	 * Функция выводит тексты запрошенных купленных статей
	 *
	 * @param array (int var1, int var2, ...) $id Массив идентификаторов купленных статей
	 * @return \carono\etxtru\response\GetTextResponse|\stdClass
	 */
	public function getText($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('articles.getText', $params, 'carono\etxtru\response\GetTextResponse');
	}


	/**
	 * Функция создает zip архив с текстами и изображениями указанных купленных статей для текущего
	 * пользователя
	 *
	 * @param array (int var1, int var2, ...) $id Массив идентификаторов купленных статей
	 * @return \carono\etxtru\response\DownloadResponse|\stdClass
	 */
	public function download($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('articles.download', $params, 'carono\etxtru\response\DownloadResponse');
	}
}
