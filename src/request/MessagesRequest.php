<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\request;

class MessagesRequest extends \carono\etxtru\RequestAbstract
{
	/**
	 * Функция выводит непрочитанные системные сообщения пользователя. Максимальный лимит сообщений 100.
	 *
	 * @param int $from Дата, с которой выводить сообщения, unixtime
	 * @return \carono\etxtru\response\GetListResponse|\stdClass
	 */
	public function getList($from)
	{
		$params = [
			'from' => $from
		];
		return $this->getClient()->getContent('messages.getList', $params, 'carono\etxtru\response\GetListResponse');
	}


	/**
	 * Функция помечает указанные непрочитанные системные сообщения пользователя как прочитанные.
	 *
	 * @param array (int var1, int var2, ...) $ids Массив идентификаторов сообщений
	 * @return \carono\etxtru\response\SetReadResponse|\stdClass
	 */
	public function setRead($ids)
	{
		$params = [
			'ids' => $ids
		];
		return $this->getClient()->getContent('messages.setRead', $params, 'carono\etxtru\response\SetReadResponse');
	}


	/**
	 * Функция удаляет указанные непрочитанные системные сообщения пользователя.
	 *
	 * @param array (int var1, int var2, ...) $ids Массив идентификаторов сообщений
	 * @return \carono\etxtru\response\SetDeleteResponse|\stdClass
	 */
	public function setDelete($ids)
	{
		$params = [
			'ids' => $ids
		];
		return $this->getClient()->getContent('messages.setDelete', $params, 'carono\etxtru\response\SetDeleteResponse');
	}


	/**
	 * Функция выводит сообщения из привата с указанным пользователем.
	 *
	 * @param \carono\etxtru\config\MessagesReadPrivateConfig|array $config
	 * @return \carono\etxtru\response\ReadPrivateResponse|\stdClass
	 */
	public function readPrivate($config)
	{
		$params = [];
		foreach ($config instanceof \carono\etxtru\ConfigAbstract ? $config->toArray() : $config as $key => $value) {
		    $params[$key] = $value;
		}
		return $this->getClient()->getContent('messages.readPrivate', $params, 'carono\etxtru\response\ReadPrivateResponse');
	}


	/**
	 * Функция возвращает количество непрочитанных сообщений из привата, с группировкой по авторам.
	 *
	 * @return \carono\etxtru\response\GetCountUnreadResponse|\stdClass
	 */
	public function getCountUnread()
	{
		$params = [];
		return $this->getClient()->getContent('messages.getCountUnread', $params, 'carono\etxtru\response\GetCountUnreadResponse');
	}


	/**
	 * Функция посылает сообщение в приват указанному пользователем. Данная возможность доступна
	 * пользователям с рейтингом более 10000. Таймаут между сообщениями 1 минута.
	 *
	 * @param int $id_user Идентификатор пользователя, обязательный параметр
	 * @param string $text Текст сообщения, максимально 10000 символов
	 * @return \carono\etxtru\response\WritePrivateResponse|\stdClass
	 */
	public function writePrivate($id_user, $text)
	{
		$params = [
			'id_user' => $id_user,
			'text' => $text
		];
		return $this->getClient()->getContent('messages.writePrivate', $params, 'carono\etxtru\response\WritePrivateResponse');
	}
}
