<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class ListTasksFailsResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор заказа
	 */
	public $id_task;

	/**
	 * Идентификатор исполнителя
	 */
	public $id_user;

	/**
	 * Дата отказа, unixtime
	 */
	public $date;

	/**
	 * Дата возврата рейтинга, unixtime
	 */
	public $date_back;

	/**
	 * Флаг возврата рейтинга
	 */
	public $back;

	/**
	 * Название заказа
	 */
	public $title;


}
