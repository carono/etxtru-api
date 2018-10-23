<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\config;

class MessagesReadPrivateConfig extends \carono\etxtru\ConfigAbstract
{
	/**
	 * Идентификатор пользователя, обязательный параметр
	 *
	 * @var int
	 */
	public $id_user;

	/**
	 * Число сообщений для выборки, максимально и по умолчанию 100
	 *
	 * @var int
	 */
	public $count;

	/**
	 * Смещение, начиная с которого выбирать, по умолчанию 0
	 *
	 * @var int
	 */
	public $from;

	/**
	 * Дата начала выборки, unixtime
	 *
	 * @var int
	 */
	public $date_from;

	/**
	 * Дата окончания выборки, unixtime
	 *
	 * @var int
	 */
	public $date_to;

	/**
	 * Если указано 1, то выводятся только непрочитанные сообщения, показанные сообщения сразу пометятся
	 * как прочитанные
	 *
	 * @var int
	 */
	public $unread;


}
