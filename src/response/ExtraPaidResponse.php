<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class ExtraPaidResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Флаг успешности зачисления
	 */
	public $status;

	/**
	 * Размер доплаты. Возвращается если установлен параметр autopay=get
	 */
	public $count;


}
