<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class ReadPrivateResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Дата сообщения, unixtime
	 */
	public $date;

	/**
	 * Текст сообщения
	 */
	public $text;

	/**
	 * Идентификатор автора сообщения
	 */
	public $id_author;

	/**
	 * Идентификатор собеседника
	 */
	public $id_user;

	/**
	 * Флаг прочтения сообщения, 1 - прочитано, 0 - не прочитано
	 */
	public $reads;


}
