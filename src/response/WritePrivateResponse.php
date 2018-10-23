<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class WritePrivateResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор пользователя, которому посылается сообщение
	 */
	public $id_user;

	/**
	 * Текст сообщения
	 */
	public $text;

	/**
	 * Время отсылки, unixtime
	 */
	public $time;


}
