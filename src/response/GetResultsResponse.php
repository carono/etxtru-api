<?php

/**
 * This class is generated using the package carono/codegen
 */

namespace carono\etxtru\response;

class GetResultsResponse extends \carono\etxtru\ResponseAbstract
{
	/**
	 * Идентификатор заказа
	 */
	public $id_task;

	/**
	 * Идентификатор пользователя, сдавшего результат
	 */
	public $id_user;

	/**
	 * Комментарий пользователя к сдаче результата
	 */
	public $comment;

	/**
	 * Текст результата
	 */
	public $content;

	/**
	 * Дата сдачи результата, unixtime
	 */
	public $date;

	/**
	 * Дата отправки результата на доработку, unixtime
	 */
	public $date_reset;

	/**
	 * Массив параметров проверки результата системой
	 */
	public $check;

	/**
	 * Массив файлов результата, ссылки на файлы действительны примерно сутки
	 */
	public $files;


}
