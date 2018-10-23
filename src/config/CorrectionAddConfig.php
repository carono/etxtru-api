<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\config;

class CorrectionAddConfig extends \carono\etxtru\ConfigAbstract
{
	/**
	 * Заголовок задания, обязательный параметр
	 *
	 * @var string
	 */
	public $title;

	/**
	 * Описание задания
	 *
	 * @var string
	 */
	public $description;

	/**
	 * Проверяемый текст, обязательный параметр
	 *
	 * @var string
	 */
	public $text;

	/**
	 * Идентификатор папки проекта задания, по умолчанию 0
	 *
	 * @var int
	 */
	public $id_folder;

	/**
	 * Дата проверки текста корректором в формате дд.мм.гггг, по умолчанию (минимально возможное) -
	 * текущее время плюс 1 сутки
	 *
	 * @var string
	 */
	public $deadline;

	/**
	 * Cрок проверки текста корректором в формате чч:мм, 23:59 по умолчанию
	 *
	 * @var string
	 */
	public $timeline;


}
