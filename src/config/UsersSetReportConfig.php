<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\config;

class UsersSetReportConfig extends \carono\etxtru\ConfigAbstract
{
	/**
	 * Идентификатор пользователя, кому отзыв
	 *
	 * @var int
	 */
	public $id;

	/**
	 * Идентификатор редактируемого отзыва, время для редактирования - 1 час от начала публикации
	 *
	 * @var int
	 */
	public $id_report;

	/**
	 * Текст отзыва, 50-5000 символов
	 *
	 * @var string
	 */
	public $text;

	/**
	 * Тип отзыва: 1 - положительный (по умолчанию), 2 - отрицательный
	 *
	 * @var int
	 */
	public $rate;


}
