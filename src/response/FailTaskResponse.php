<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class FailTaskResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор отмененного заказа
	 */
	public $id;

	/**
	 * Идентификатор созданной копии заказа, если указано копирование
	 */
	public $id_copy;

	/**
	 * Ссылка для восстановления рейтинга исполнителю
	 */
	public $rateup;


}
