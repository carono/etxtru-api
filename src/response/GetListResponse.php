<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class GetListResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор сообщения
	 */
	public $id;

	/**
	 * Дата сообщения, unixtime
	 */
	public $date;

	/**
	 * Текст сообщения, может содержать HTML или BB форматирование
	 */
	public $text;


}
