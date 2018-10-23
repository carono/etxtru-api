<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\request;

class ArticlesArchiveRequest extends \carono\etxtru\RequestAbstract
{
	/**
	 * Возвращает список купленных пользователм статей и перенесенных в архив статей.
	 *
	 * @param \carono\etxtru\config\ArticlesArchiveGetListConfig|array $config
	 * @return \carono\etxtru\response\GetListResponse|\stdClass
	 */
	public function getList($config)
	{
		$params = [];
		foreach ($config instanceof \carono\etxtru\ConfigAbstract ? $config->toArray() : $config as $key => $value) {
		    $params[$key] = $value;
		}
		return $this->getClient()->getContent('articles_archive.getList', $params, 'carono\etxtru\response\GetListResponse');
	}


	/**
	 * Функция выводит тексты запрошенных статей из архива текущего пользователя
	 *
	 * @param array (int var1, int var2, ...) $id Массив идентификаторов статей в архиве
	 * @return \carono\etxtru\response\GetTextResponse|\stdClass
	 */
	public function getText($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('articles_archive.getText', $params, 'carono\etxtru\response\GetTextResponse');
	}


	/**
	 * Функция создает zip архив с текстами и изображениями указанных статей из архива для текущего
	 * пользователя
	 *
	 * @param array (int var1, int var2, ...) $id Массив идентификаторов статей из архива
	 * @return \carono\etxtru\response\DownloadResponse|\stdClass
	 */
	public function download($id)
	{
		$params = [
			'id' => $id
		];
		return $this->getClient()->getContent('articles_archive.download', $params, 'carono\etxtru\response\DownloadResponse');
	}
}
