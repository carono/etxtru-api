<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\config;

class UsersGetListConfig extends \carono\etxtru\ConfigAbstract
{
	/**
	 * Число пользователей для выборке, не более 100 за запрос (по умолчанию)
	 *
	 * @var int
	 */
	public $count;

	/**
	 * Смещение от последней записи в выборке, по умолчанию 0
	 *
	 * @var int
	 */
	public $from;

	/**
	 * Фильтрация по рейтингу, начиная с данного значения
	 *
	 * @var int
	 */
	public $rate_from;

	/**
	 * Фильтрация по рейтингу, заканчивая данным значением
	 *
	 * @var int
	 */
	public $rate_out;

	/**
	 * Флаг онлайн статуса на бирже, 1 - онлайн, 0 - офлайн, по умолчанию все вместе
	 *
	 * @var int
	 */
	public $online;


}
