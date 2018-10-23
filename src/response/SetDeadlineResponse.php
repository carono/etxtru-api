<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class SetDeadlineResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Установленная дата и время сдачи заказа
	 */
	public $deadline;

	/**
	 * Идентификатор заказа
	 */
	public $id;

	/**
	 * Текущий статус заказа (например, был 5 - просроченный, после продления станет 2 - в работе)
	 */
	public $status;

	/**
	 * Флаг срочности заказа, 1 - срочный, 0 - нет
	 */
	public $quick;


}
