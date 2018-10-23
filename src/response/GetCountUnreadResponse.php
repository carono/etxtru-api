<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class GetCountUnreadResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Общее количество непрочитанных сообщений
	 */
	public $count;

	/**
	 * Массив ассоциативных пар значений [id_author => идентификатор пользователя, count => количество
	 * непрочитанных сообщений]
	 */
	public $users;


}
